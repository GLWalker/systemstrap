<?php
/**
 * SystemStrap Dialog Renderer
 * 
 * Intercepts blocks that are flagged as Dialog Triggers, injects vanilla JS trigger,
 * and renders the selected template part into a `<dialog>` element at the bottom of the page.
 */

defined('ABSPATH') || exit;

class SystemStrap_Dialog_Renderer {

    private static $dialogs = [];
    private static $rendering_sources = [];
    private static $dialogs_printed = false;

    public static function init() {
        add_filter('render_block_core/icon', [__CLASS__, 'intercept_dialog_trigger'], 10, 2);
        add_filter('render_block_icon-block/icon', [__CLASS__, 'intercept_dialog_trigger'], 10, 2);
        add_filter('render_block_core/button', [__CLASS__, 'intercept_dialog_trigger'], 10, 2);
        add_filter('render_block_core/template-part', [__CLASS__, 'inject_dialogs_into_footer_template_part'], 20, 2);

        add_action('wp_footer', [__CLASS__, 'render_dialogs'], 99);
        add_action('wp_enqueue_scripts', [__CLASS__, 'enqueue_assets']);
    }

    public static function intercept_dialog_trigger($block_content, $block) {
        $attrs = $block['attrs'] ?? [];

        if (empty($attrs['systemDialogAction'])) {
            return $block_content;
        }

        $template_part_slug = sanitize_title( $attrs['systemDialogTemplatePart'] ?? '' );
        $legacy_pattern_slug = sanitize_text_field( $attrs['systemDialogPattern'] ?? '' );
        $dialog_source = self::resolve_dialog_source( $template_part_slug, $legacy_pattern_slug );

        if ( empty( $dialog_source ) || empty( $dialog_source['raw_content'] ) ) {
            return $block_content;
        }

        $position = $attrs['systemDialogPosition'] ?? 'start';
        if ( ! in_array( $position, [ 'start', 'end', 'top', 'bottom', 'center' ], true ) ) {
            $position = 'start';
        }

        $dialog_id = 'strap-dialog-' . wp_generate_uuid4();
        $dialog_label = $dialog_source['label'];
        $is_icon_trigger = in_array($block['blockName'] ?? '', ['core/icon', 'icon-block/icon'], true);

        $block_content = self::add_dialog_trigger_attributes($block_content, $dialog_id, $dialog_label, $is_icon_trigger);

        // Prevent infinite recursion if a dialog source loops back into itself.
        if (in_array($dialog_source['guard'], self::$rendering_sources, true)) {
            return $block_content;
        }

        self::$rendering_sources[] = $dialog_source['guard'];
        self::$dialogs[$dialog_id] = [
            'content'  => self::wrap_dialog_surface_markup(
                do_blocks($dialog_source['raw_content']),
                $position
            ),
            'position' => $position,
            'label'    => $dialog_label,
        ];
        array_pop(self::$rendering_sources);

        return $block_content;
    }

    private static function get_dialog_label($source_title) {
        $label = __('Dialog', 'systemstrap');

        if (! empty($source_title)) {
            $label = wp_strip_all_tags($source_title);
        }

        return $label;
    }

    private static function wrap_dialog_surface_markup($content, $position) {
        if (empty($content) || 'center' === $position) {
            return $content;
        }

        return sprintf(
            '<div class="wp-block-group strap-offcanvas-panel">%s</div>',
            $content
        );
    }

    private static function resolve_dialog_source($template_part_slug, $legacy_pattern_slug) {
        if ($template_part_slug) {
            $template_part = self::get_template_part_payload($template_part_slug);

            if (! empty($template_part['raw_content'])) {
                return $template_part;
            }
        }

        if (! $legacy_pattern_slug) {
            return null;
        }

        $mapped_slug = self::map_legacy_pattern_to_template_part($legacy_pattern_slug);
        if (! $mapped_slug) {
            return null;
        }

        return self::get_template_part_payload($mapped_slug);
    }

    private static function map_legacy_pattern_to_template_part($pattern_slug) {
        $slug = sanitize_text_field($pattern_slug);

        if (str_contains($slug, '/')) {
            $parts = explode('/', $slug);
            $slug = end($parts);
        }

        $slug = strtolower($slug);

        if (in_array($slug, ['modal-search', 'modal-search-full'], true)) {
            return 'modal-search';
        }

        if (str_starts_with($slug, 'modal-')) {
            return 'modal-part';
        }

        if (str_starts_with($slug, 'offcanvas-')) {
            return 'offcanvas-part';
        }

        return '';
    }

    private static function get_template_part_payload($slug) {
        if (! function_exists('get_block_template')) {
            return null;
        }

        $slug = sanitize_title($slug);
        if (! $slug) {
            return null;
        }

        $template_part_id = get_stylesheet() . '//' . $slug;
        $template_part = get_block_template($template_part_id, 'wp_template_part');

        if (! $template_part || empty($template_part->content)) {
            return null;
        }

        return [
            'guard'   => 'template-part:' . $slug,
            'label'   => self::get_dialog_label($template_part->title ?? self::humanize_template_part_slug($slug)),
            'raw_content' => $template_part->content,
        ];
    }

    private static function humanize_template_part_slug($slug) {
        return ucwords(str_replace('-', ' ', $slug));
    }

    private static function add_dialog_trigger_attributes($block_content, $dialog_id, $dialog_label, $prefer_native_button = false) {
        if (empty($block_content) || ! class_exists('WP_HTML_Tag_Processor')) {
            return $block_content;
        }

        $original_content = $block_content;
        $processor = new WP_HTML_Tag_Processor($block_content);
        $closed_label = sprintf(
            /* translators: %s: dialog label. */
            __('Open %s', 'systemstrap'),
            $dialog_label
        );
        $open_label = sprintf(
            /* translators: %s: dialog label. */
            __('%s open', 'systemstrap'),
            $dialog_label
        );

        if (! $processor->next_tag()) {
            return $block_content;
        }

        $tag_name = $processor->get_tag();

        if ($prefer_native_button && ! in_array($tag_name, ['A', 'BUTTON'], true)) {
            $upgraded_content = self::upgrade_single_root_trigger_to_button($block_content, $processor, $tag_name);

            if (! empty($upgraded_content)) {
                $block_content = $upgraded_content;
                $processor = new WP_HTML_Tag_Processor($block_content);

                if (! $processor->next_tag('BUTTON')) {
                    return $original_content;
                }
            }
        }

        $processor->set_attribute('data-strap-dialog-target', '#' . $dialog_id);
        $processor->set_attribute('data-strap-dialog-label-closed', $closed_label);
        $processor->set_attribute('data-strap-dialog-label-open', $open_label);
        $processor->set_attribute('aria-controls', $dialog_id);
        $processor->set_attribute('aria-expanded', 'false');
        $processor->set_attribute('aria-haspopup', 'dialog');
        $processor->set_attribute('aria-label', $closed_label);

        if (! in_array($processor->get_tag(), ['A', 'BUTTON'], true)) {
            $processor->set_attribute('role', 'button');
            $processor->set_attribute('tabindex', '0');
        }

        if ('BUTTON' === $processor->get_tag()) {
            $processor->set_attribute('type', 'button');
        }

        while ($processor->next_tag('SVG')) {
            $processor->set_attribute('aria-hidden', 'true');
            $processor->set_attribute('focusable', 'false');
        }

        return $processor->get_updated_html();
    }

    private static function upgrade_single_root_trigger_to_button($block_content, WP_HTML_Tag_Processor $processor, $tag_name) {
        $attribute_names = $processor->get_attribute_names_with_prefix('');
        $attributes = [];

        foreach ($attribute_names as $name) {
            if (in_array($name, ['role', 'tabindex', 'type'], true)) {
                continue;
            }

            $attributes[$name] = $processor->get_attribute($name);
        }

        $inner_html = self::extract_single_root_inner_html($block_content, $tag_name);
        if (null === $inner_html) {
            return $block_content;
        }

        return sprintf(
            '<button type="button"%1$s>%2$s</button>',
            self::build_html_attributes($attributes),
            $inner_html
        );
    }

    private static function extract_single_root_inner_html($block_content, $tag_name) {
        $pattern = sprintf(
            '~^\s*<%1$s\b[^>]*>(.*)</%1$s>\s*$~is',
            preg_quote(strtolower($tag_name), '~')
        );

        if (! preg_match($pattern, $block_content, $matches)) {
            return null;
        }

        return $matches[1];
    }

    private static function build_html_attributes($attributes) {
        $html = '';

        foreach ($attributes as $name => $value) {
            if (null === $value || false === $value || '' === $value) {
                continue;
            }

            if (true === $value) {
                $html .= ' ' . esc_attr($name);
                continue;
            }

            $html .= sprintf(
                ' %1$s="%2$s"',
                esc_attr($name),
                esc_attr($value)
            );
        }

        return $html;
    }

    private static function get_dialogs_markup() {
        if (empty(self::$dialogs) || self::$dialogs_printed) {
            return '';
        }

        $markup = '';

        foreach (self::$dialogs as $id => $data) {
            $content  = $data['content'];
            $position = $data['position'];
            $label    = $data['label'];
            $class_names = esc_attr("strap-dialog strap-dialog-pos-{$position}");

            // The content is already fully parsed and styles are enqueued!
            $markup .= sprintf(
                    '<dialog id="%1$s" class="%2$s" aria-modal="true" aria-label="%3$s">
                    <div class="strap-dialog-content" role="document">
                        <div class="wp-block-button is-style-system-btn-icon strap-dialog-close-btn">
                            <button class="wp-block-button__link -close" aria-label="Close dialog" type="button">
                                <span class="system-icon system-icon-close"></span>
                            </button>
                        </div>
                        %4$s
                    </div>
                </dialog>',
                esc_attr($id),
                $class_names,
                esc_attr($label),
                $content
            );
        }

        self::$dialogs_printed = true;
        return $markup;
    }

    public static function inject_dialogs_into_footer_template_part($block_content, $block) {
        if (empty($block_content) || empty(self::$dialogs) || self::$dialogs_printed) {
            return $block_content;
        }

        $attrs = $block['attrs'] ?? [];
        $class_name = $attrs['className'] ?? '';
        $slug = $attrs['slug'] ?? '';

        if (! str_contains($class_name, 'site-footer') && 'footer' !== $slug) {
            return $block_content;
        }

        $dialogs_markup = self::get_dialogs_markup();
        if ('' === $dialogs_markup) {
            return $block_content;
        }

        return $block_content . $dialogs_markup;
    }

    public static function render_dialogs() {
        $dialogs_markup = self::get_dialogs_markup();
        if ('' === $dialogs_markup) {
            return;
        }

        echo $dialogs_markup;
    }

    public static function enqueue_assets() {
        // We'll enqueue CSS and JS for the dialog unconditionally so it's ready, 
        // or we could conditionally load it. Since it's tiny, global is fine.
        wp_enqueue_style(
            'strap-dialog',
            get_template_directory_uri() . '/assets/css/style-variations/core-icon-dialog.css',
            ['strap-main-styles'],
            wp_get_theme()->get('Version')
        );

        wp_enqueue_script(
            'strap-dialog-init',
            get_template_directory_uri() . '/assets/js/dialog-init.js',
            [],
            wp_get_theme()->get('Version'),
            true
        );
    }
}

SystemStrap_Dialog_Renderer::init();
