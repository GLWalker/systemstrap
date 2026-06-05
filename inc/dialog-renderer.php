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

        // Add onclick to the block's first HTML tag (usually <a>, <button>, or <svg>)
        $onclick = sprintf("event.preventDefault(); document.getElementById('%s').showModal();", esc_js($dialog_id));
        
        // Use a simple regex to insert the onclick attribute into the first tag of the block content.
        $block_content = preg_replace('/^<([a-zA-Z0-9]+)([^>]*)>/i', '<$1$2 onclick="' . $onclick . '">', trim($block_content));

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
        ];

        return $block_content;
    }

    public static function render_dialogs() {
        if (empty(self::$dialogs)) {
            return;
        }

        foreach (self::$dialogs as $id => $data) {
            $content  = $data['content'];
            $position = $data['position'];
            $class_names = esc_attr("strap-dialog strap-dialog-pos-{$position}");

            // The content is already fully parsed and styles are enqueued!
            echo sprintf(
                '<dialog id="%1$s" class="%2$s">
                    <div class="strap-dialog-content">
                        <div class="wp-block-button is-style-system-btn-icon strap-dialog-close-btn">
                            <button class="wp-block-button__link -close" aria-label="Close dialog" type="button">
                                <span class="system-icon system-icon-close"></span>
                            </button>
                        </div>
                        %3$s
                    </div>
                </dialog>',
                esc_attr($id),
                $class_names,
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
