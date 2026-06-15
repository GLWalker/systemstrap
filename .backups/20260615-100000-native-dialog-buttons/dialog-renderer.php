<?php
/**
 * SystemStrap Dialog Renderer
 * 
 * Intercepts blocks that are flagged as Dialog Triggers, injects vanilla JS trigger,
 * and renders the selected pattern into a `<dialog>` element at the bottom of the page.
 */

defined('ABSPATH') || exit;

class SystemStrap_Dialog_Renderer {

    private static $dialogs = [];
    private static $rendering_patterns = [];

    public static function init() {
        add_filter('render_block_core/icon', [__CLASS__, 'intercept_dialog_trigger'], 10, 2);
        add_filter('render_block_icon-block/icon', [__CLASS__, 'intercept_dialog_trigger'], 10, 2);
        add_filter('render_block_core/button', [__CLASS__, 'intercept_dialog_trigger'], 10, 2);

        add_action('wp_footer', [__CLASS__, 'render_dialogs'], 99);
        add_action('wp_enqueue_scripts', [__CLASS__, 'enqueue_assets']);
    }

    public static function intercept_dialog_trigger($block_content, $block) {
        $attrs = $block['attrs'] ?? [];

        if (empty($attrs['systemDialogAction']) || empty($attrs['systemDialogPattern'])) {
            return $block_content;
        }

        $dialog_id = 'strap-dialog-' . wp_generate_uuid4();
        $pattern_slug = $attrs['systemDialogPattern'];
        $position = $attrs['systemDialogPosition'] ?? 'start'; // start, end, top, bottom, center
        $pattern_label = self::get_dialog_label($pattern_slug);

        $block_content = self::add_dialog_trigger_attributes($block_content, $dialog_id, $pattern_label);

        // Prevent infinite recursion if patterns reference each other
        if (in_array($pattern_slug, self::$rendering_patterns, true)) {
            return $block_content;
        }

        // Process the blocks EARLY (during main render loop) so WP knows to enqueue their styles
        self::$rendering_patterns[] = $pattern_slug;
        $pattern_content = do_blocks('<!-- wp:pattern {"slug":"' . esc_attr($pattern_slug) . '"} /-->');
        array_pop(self::$rendering_patterns);

        // Queue the parsed HTML to be rendered in the footer
        self::$dialogs[$dialog_id] = [
            'content'  => $pattern_content,
            'position' => $position,
            'label'    => $pattern_label,
        ];

        return $block_content;
    }

    private static function get_dialog_label($pattern_slug) {
        $label = __('Dialog', 'systemstrap');

        if (class_exists('WP_Block_Patterns_Registry')) {
            $pattern = WP_Block_Patterns_Registry::get_instance()->get_registered($pattern_slug);
            if (!empty($pattern['title'])) {
                $label = $pattern['title'];
            }
        }

        return $label;
    }

    private static function add_dialog_trigger_attributes($block_content, $dialog_id, $dialog_label) {
        if (empty($block_content) || ! class_exists('WP_HTML_Tag_Processor')) {
            return $block_content;
        }

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

        while ($processor->next_tag('SVG')) {
            $processor->set_attribute('aria-hidden', 'true');
            $processor->set_attribute('focusable', 'false');
        }

        return $processor->get_updated_html();
    }

    public static function render_dialogs() {
        if (empty(self::$dialogs)) {
            return;
        }

        foreach (self::$dialogs as $id => $data) {
            $content  = $data['content'];
            $position = $data['position'];
            $label    = $data['label'];
            $class_names = esc_attr("strap-dialog strap-dialog-pos-{$position}");

            // The content is already fully parsed and styles are enqueued!
            echo sprintf(
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
