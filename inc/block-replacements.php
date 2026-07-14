<?php

/**
 * SystemStrap Block Replacements
 * @package SystemStrap
 * @author G.L. Walker
 * @since 0.0.1
 *
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('strap_add_schema_to_title_markup')) {

    /**
     * Adds schema attributes to rendered site/post title markup.
     *
     * @param string $markup Rendered block HTML.
     * @param string $class_name Optional class name to preserve on the outer title element.
     * @return string
     */
    function strap_add_schema_to_title_markup($markup, $class_name = '')
    {
        if (empty($markup) || !class_exists('WP_HTML_Tag_Processor')) {
            return $markup;
        }

        $processor = new WP_HTML_Tag_Processor($markup);
        if ($processor->next_tag()) {
            $tag_name = $processor->get_tag();
            if (in_array($tag_name, ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'P'], true)) {
                $processor->set_attribute('itemprop', 'headline');
                if (!empty($class_name)) {
                    $processor->add_class($class_name);
                }
            }
        }

        if ($processor->next_tag(['tag_name' => 'A'])) {
            $processor->set_attribute('itemprop', 'url');
        }

        return $processor->get_updated_html();
    }
}

if (!function_exists('strap_add_schema_to_tagline_markup')) {

    /**
     * Adds schema attributes to rendered site tagline markup.
     *
     * @param string $markup Rendered block HTML.
     * @param string $class_name Optional class name to preserve on the outer tagline element.
     * @return string
     */
    function strap_add_schema_to_tagline_markup($markup, $class_name = '')
    {
        if (empty($markup) || !class_exists('WP_HTML_Tag_Processor')) {
            return $markup;
        }

        $processor = new WP_HTML_Tag_Processor($markup);
        if ($processor->next_tag()) {
            $processor->set_attribute('itemprop', 'description');
            if (!empty($class_name)) {
                $processor->add_class($class_name);
            }
        }

        return $processor->get_updated_html();
    }
}



if (!function_exists('strap_render_block_widget_badges')) {
    /**
     * Server-side badge replacements for Categories, Archives, and Terms Query blocks.
     * Converts native Gutenberg count text into <span class="system-badge">count</span>.
     */
    function strap_render_block_widget_badges( $block_content, $block ) {
        if ( empty( $block_content ) ) {
            return $block_content;
        }

        if ( 'core/categories' === $block['blockName'] || 'core/archives' === $block['blockName'] ) {
            if ( str_contains( $block_content, '<select' ) ) {
                return $block_content;
            }

            // Define the proper native class based on block type
            $count_class = ( 'core/archives' === $block['blockName'] ) ? 'wp-block-archives__count' : 'wp-block-categories__count';

            // Wrap counts structurally so they remain naked by default but can be targeted by System UI styles
            $block_content = preg_replace(
                '/\(\s*(\d+)\s*\)/',
                '<span class="' . $count_class . '"><span class="count-paren">(</span>$1<span class="count-paren">)</span></span>',
                $block_content
            );
        }

        if ( 'core/terms-query' === $block['blockName'] ) {
            $block_content = preg_replace(
                '/(<(?:div|p)\b[^>]*class="[^"]*wp-block-term-count[^"]*"[^>]*>)\(\s*(\d+)\s*\)(<\/(?:div|p)>)/',
                '$1<span class="count-paren">(</span>$2<span class="count-paren">)</span>$3',
                $block_content
            );
        }

        if ( 'core/tag-cloud' === $block['blockName'] ) {
            $block_content = preg_replace(
                '/(<span class="tag-link-count"[^>]*>)\s*\(\s*(\d+)\s*\)(<\/span>)/',
                ' $1<span class="count-paren">(</span>$2<span class="count-paren">)</span>$3',
                $block_content
            );
        }


        return $block_content;
    }
    add_filter( 'render_block', 'strap_render_block_widget_badges', 20, 2 );
}
