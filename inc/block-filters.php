<?php
/**
 * SystemStrap Block Filters & Action Hooks
 *
 * @package systemstrap
 */

defined( 'ABSPATH' ) || exit;

/**
 * Internal helpers.
 */

if ( ! function_exists( 'strap_get_class_name' ) ) {
	/**
	 * Retrieve the `className` attribute from a block.
	 *
	 * @param array $block The block array.
	 * @return string
	 */
	function strap_get_class_name( array $block ): string {
		return $block['attrs']['className'] ?? '';
	}
}

if ( ! function_exists( 'strap_get_html_processor' ) ) {
	/**
	 * Create a tag processor for rendered block HTML.
	 *
	 * @param string $block_content Rendered block HTML.
	 * @return WP_HTML_Tag_Processor|null
	 */
	function strap_get_html_processor( string $block_content ): ?WP_HTML_Tag_Processor {
		if ( empty( $block_content ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
			return null;
		}

		return new WP_HTML_Tag_Processor( $block_content );
	}
}

if ( ! function_exists( 'strap_html_processor_set_attributes' ) ) {
	/**
	 * Apply multiple attributes to the current tag.
	 *
	 * @param WP_HTML_Tag_Processor $processor Active processor positioned on a tag.
	 * @param array                 $attributes Attributes to apply.
	 * @return void
	 */
	function strap_html_processor_set_attributes( WP_HTML_Tag_Processor $processor, array $attributes ): void {
		foreach ( $attributes as $name => $value ) {
			if ( null === $value || '' === $value ) {
				continue;
			}

			if ( true === $value ) {
				$processor->set_attribute( $name, true );
				continue;
			}

			$processor->set_attribute( $name, $value );
		}
	}
}

if ( ! function_exists( 'strap_html_processor_add_classes' ) ) {
	/**
	 * Add one or more classes to the current tag.
	 *
	 * @param WP_HTML_Tag_Processor $processor Active processor positioned on a tag.
	 * @param string                $class_name Space-delimited class list.
	 * @return void
	 */
	function strap_html_processor_add_classes( WP_HTML_Tag_Processor $processor, string $class_name ): void {
		$classes = preg_split( '/\s+/', trim( $class_name ) );

		if ( ! is_array( $classes ) ) {
			return;
		}

		foreach ( $classes as $class ) {
			$class = sanitize_html_class( $class );

			if ( '' !== $class ) {
				$processor->add_class( $class );
			}
		}
	}
}

if ( ! function_exists( 'strap_do_block_action' ) ) {
	/**
	 * Execute a WordPress action hook inside block content.
	 *
	 * @param string $hook The name of the action hook to execute.
	 * @return string
	 */
	function strap_do_block_action( string $hook = '' ): string {
		$hook = sanitize_key( $hook );

		if ( ! preg_match( '/^strap_hook_(start|end)_[a-z0-9_]+$/', $hook ) ) {
			return '';
		}

		ob_start();
		do_action( $hook );
		$block_action = ob_get_clean();
		return $block_action ? $block_action : '';
	}
}

if ( ! function_exists( 'strap_add_schema_to_title_markup' ) ) {
	/**
	 * Add schema attributes to rendered site and post title markup.
	 *
	 * @param string $markup Rendered block HTML.
	 * @param string $class_name Optional class name to preserve on the outer title element.
	 * @return string
	 */
	function strap_add_schema_to_title_markup( string $markup, string $class_name = '' ): string {
		$processor = strap_get_html_processor( $markup );

		if ( ! $processor ) {
			return $markup;
		}

		if ( $processor->next_tag() ) {
			$tag_name = $processor->get_tag();

			if ( in_array( $tag_name, array( 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'P' ), true ) ) {
				$processor->set_attribute( 'itemprop', 'headline' );

				if ( '' !== $class_name ) {
					strap_html_processor_add_classes( $processor, $class_name );
				}
			}
		}

		if ( $processor->next_tag( array( 'tag_name' => 'A' ) ) ) {
			$processor->set_attribute( 'itemprop', 'url' );
		}

		return $processor->get_updated_html();
	}
}

if ( ! function_exists( 'strap_add_schema_to_tagline_markup' ) ) {
	/**
	 * Add schema attributes to rendered site tagline markup.
	 *
	 * @param string $markup Rendered block HTML.
	 * @param string $class_name Optional class name to preserve on the outer tagline element.
	 * @return string
	 */
	function strap_add_schema_to_tagline_markup( string $markup, string $class_name = '' ): string {
		$processor = strap_get_html_processor( $markup );

		if ( ! $processor || ! $processor->next_tag() ) {
			return $markup;
		}

		$processor->set_attribute( 'itemprop', 'description' );

		if ( '' !== $class_name ) {
			strap_html_processor_add_classes( $processor, $class_name );
		}

		return $processor->get_updated_html();
	}
}

/**
 * Render bundled logo fallback when no custom logo is assigned.
 *
 * @param array $block Parsed block data.
 * @return string
 */
function strap_render_site_logo_fallback( array $block ): string {
	$fallback_path = get_template_directory() . '/assets/media/SystemStrap-Logo-90.png';
	if ( ! file_exists( $fallback_path ) ) {
		return '';
	}

	$attrs      = $block['attrs'] ?? array();
	$width_attr = '';
	$style_attr = '';

	if ( ! empty( $attrs['width'] ) ) {
		$width      = (int) $attrs['width'];
		$width_attr = ' width="' . esc_attr( $width ) . '"';
		$style_attr = ' style="width:' . esc_attr( $width ) . 'px;height:auto"';
	}

	$image = sprintf(
		'<img src="%1$s" alt="%2$s"%3$s%4$s class="custom-logo" itemprop="logo">',
		esc_url( get_theme_file_uri( 'assets/media/SystemStrap-Logo-90.png' ) ),
		esc_attr( get_bloginfo( 'name' ) ),
		$width_attr,
		$style_attr
	);

	$is_link = ! isset( $attrs['isLink'] ) || $attrs['isLink'];
	if ( ! $is_link ) {
		return sprintf(
			'<div class="wp-block-site-logo">%s</div>',
			$image
		);
	}

	$link_target = ! empty( $attrs['linkTarget'] ) ? $attrs['linkTarget'] : '_self';
	$home_markup = sprintf(
		'<a href="%1$s" class="custom-logo-link" rel="home" target="%2$s">%3$s</a>',
		esc_url( home_url( '/' ) ),
		esc_attr( $link_target ),
		$image
	);

	if ( is_front_page() && current_theme_supports( 'custom-logo', 'unlink-homepage-logo' ) ) {
		$home_markup = sprintf(
			'<span class="custom-logo-link" aria-current="page">%s</span>',
			$image
		);
	}

	return sprintf(
		'<div class="wp-block-site-logo">%s</div>',
		$home_markup
	);
}

/**
 * Add schema attributes to rendered site logo markup.
 *
 * @param string $block_content Rendered site logo markup.
 * @return string
 */
function strap_add_site_logo_schema_markup( string $block_content ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor ) {
		return $block_content;
	}

	while ( $processor->next_tag() ) {
		$tag_name = $processor->get_tag();

		if ( 'A' === $tag_name || 'SPAN' === $tag_name ) {
			strap_html_processor_set_attributes(
				$processor,
				array(
					'itemscope' => true,
					'itemtype'  => 'https://schema.org/ImageObject',
				)
			);
		}

		if ( 'IMG' === $tag_name ) {
			$processor->set_attribute( 'itemprop', 'contentUrl' );
		}
	}

	return $processor->get_updated_html();
}

/**
 * Generic render_block filters.
 */

/**
 * Keep repeated Query Loop patterns on a page from sharing pagination state.
 */
add_filter( 'render_block_data', 'strap_assign_runtime_query_ids', 10, 3 );
function strap_assign_runtime_query_ids( $parsed_block, $source_block = null, $parent_block = null ) {
	static $query_family_counts = array();

	$query_id_families = array(
		101 => 'query_media_object',
		102 => 'query_directory_listing',
		103 => 'query_directory_grid',
		104 => 'query_latest_posts_list',
		105 => 'query_directory_grid',
	);

	$query_id_ranges = array(
		'query_media_object'      => 1100,
		'query_directory_listing' => 1200,
		'query_directory_grid'    => 1300,
		'query_latest_posts_list' => 1400,
	);

	if ( empty( $parsed_block['blockName'] ) || 'core/query' !== $parsed_block['blockName'] ) {
		return $parsed_block;
	}

	if ( ! isset( $parsed_block['attrs'] ) || ! is_array( $parsed_block['attrs'] ) ) {
		$parsed_block['attrs'] = array();
	}

	$source_query_id = isset( $parsed_block['attrs']['queryId'] ) ? (int) $parsed_block['attrs']['queryId'] : 0;

	if ( ! isset( $query_id_families[ $source_query_id ] ) ) {
		return $parsed_block;
	}

	$query_family = $query_id_families[ $source_query_id ];

	if ( ! isset( $query_family_counts[ $query_family ] ) ) {
		$query_family_counts[ $query_family ] = 0;
	}

	$query_family_counts[ $query_family ]++;
	$parsed_block['attrs']['queryId'] = $query_id_ranges[ $query_family ] + $query_family_counts[ $query_family ];

	return $parsed_block;
}

if ( ! function_exists( 'strap_action_hook' ) ) {
	/**
	 * Replace dedicated separator placeholders with action output.
	 *
	 * @param string $block_content The rendered separator markup.
	 * @param array  $block         Parsed block.
	 * @return string
	 */
	function strap_action_hook( string $block_content, array $block ): string {
		$class_name = strap_get_class_name( $block );

		if ( ! $class_name || ! str_contains( $class_name, 'strap-action-hook' ) ) {
			return $block_content;
		}

		$action = explode( 'strap-action-hook ', $class_name )[1] ?? '';

		if ( $action && 'strap-action-hook ' . $action === $class_name ) {
			return strap_do_block_action( $action );
		}

		return $block_content;
	}

	add_filter( 'render_block_core/separator', 'strap_action_hook', 10, 2 );
}

/**
 * Add alert semantics to dedicated alert groups.
 */
add_filter(
	'render_block',
	function ( $block_content, $block ) {
		$class_name = strap_get_class_name( $block );
		$processor  = strap_get_html_processor( $block_content );

		if ( ( $block['blockName'] ?? '' ) !== 'core/group' || ! str_contains( $class_name, 'alert' ) || ! $processor || ! $processor->next_tag() ) {
			return $block_content;
		}

		$processor->set_attribute( 'role', 'alert' );
		return $processor->get_updated_html();
	},
	10,
	2
);

/**
 * Add toolbar semantics to dedicated toolbar groups.
 */
add_filter(
	'render_block',
	function ( $block_content, $block ) {
		$class_name = strap_get_class_name( $block );
		$processor  = strap_get_html_processor( $block_content );

		if ( ( $block['blockName'] ?? '' ) !== 'core/group' || ! str_contains( $class_name, 'toolbar' ) || ! $processor || ! $processor->next_tag() ) {
			return $block_content;
		}

		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'toolbar',
				'aria-label' => 'Toolbar',
			)
		);

		return $processor->get_updated_html();
	},
	10,
	2
);

/**
 * Add button-group semantics to grouped button wrappers.
 */
add_filter(
	'render_block',
	function ( $block_content, $block ) {
		$class_name = strap_get_class_name( $block );
		$processor  = strap_get_html_processor( $block_content );

		if ( ( $block['blockName'] ?? '' ) !== 'core/buttons' || ! str_contains( $class_name, 'button-group' ) || ! $processor || ! $processor->next_tag() ) {
			return $block_content;
		}

		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'group',
				'aria-label' => 'Button group',
			)
		);

		return $processor->get_updated_html();
	},
	10,
	2
);

/**
 * Mark disabled buttons/links as unavailable to assistive tech.
 */
add_filter(
	'render_block',
	function ( $block_content, $block ) {
		$processor = strap_get_html_processor( $block_content );

		if ( ( $block['blockName'] ?? '' ) !== 'core/button' || ! $processor ) {
			return $block_content;
		}

		while ( $processor->next_tag() ) {
			$tag_name    = $processor->get_tag();
			$class_attr  = (string) $processor->get_attribute( 'class' );
			$is_disabled = str_contains( $class_attr, 'disabled' ) || false !== $processor->get_attribute( 'disabled' );

			if ( ! $is_disabled || ! in_array( $tag_name, array( 'A', 'BUTTON' ), true ) ) {
				continue;
			}

			$processor->set_attribute( 'aria-disabled', 'true' );
			$processor->set_attribute( 'tabindex', '-1' );
		}

		return $processor->get_updated_html();
	},
	10,
	2
);

/**
 * Add breadcrumb landmark semantics to breadcrumb wrappers.
 */
add_filter(
	'render_block',
	function ( $block_content, $block ) {
		$class_name = strap_get_class_name( $block );
		$processor  = strap_get_html_processor( $block_content );

		if ( ( $block['blockName'] ?? '' ) !== 'core/group' || ! str_contains( $class_name, 'breadcrumbs' ) || ! $processor || ! $processor->next_tag() ) {
			return $block_content;
		}

		if ( 'NAV' !== $processor->get_tag() ) {
			$processor->set_attribute( 'role', 'navigation' );
		}

		$processor->set_attribute( 'aria-label', 'Breadcrumbs' );
		return $processor->get_updated_html();
	},
	10,
	2
);

if ( ! function_exists( 'strap_render_block_widget_badges' ) ) {
	/**
	 * Convert native block count output into theme-targetable badge markup.
	 *
	 * @param string $block_content Rendered block HTML.
	 * @param array  $block Parsed block data.
	 * @return string
	 */
	function strap_render_block_widget_badges( string $block_content, array $block ): string {
		$block_name = $block['blockName'] ?? '';

		if ( '' === $block_content || '' === $block_name ) {
			return $block_content;
		}

		if ( 'core/categories' === $block_name || 'core/archives' === $block_name ) {
			if ( str_contains( $block_content, '<select' ) ) {
				return $block_content;
			}

			$count_class = 'core/archives' === $block_name ? 'wp-block-archives__count' : 'wp-block-categories__count';
			$updated     = preg_replace(
				'/\(\s*(\d+)\s*\)/',
				'<span class="' . $count_class . '"><span class="count-paren">(</span>$1<span class="count-paren">)</span></span>',
				$block_content
			);

			return is_string( $updated ) ? $updated : $block_content;
		}

		if ( 'core/terms-query' === $block_name ) {
			$updated = preg_replace(
				'/(<(?:div|p)\b[^>]*class="[^"]*wp-block-term-count[^"]*"[^>]*>)\(\s*(\d+)\s*\)(<\/(?:div|p)>)/',
				'$1<span class="count-paren">(</span>$2<span class="count-paren">)</span>$3',
				$block_content
			);

			return is_string( $updated ) ? $updated : $block_content;
		}

		if ( 'core/tag-cloud' === $block_name ) {
			$updated = preg_replace(
				'/(<span class="tag-link-count"[^>]*>)\s*\(\s*(\d+)\s*\)(<\/span>)/',
				' $1<span class="count-paren">(</span>$2<span class="count-paren">)</span>$3',
				$block_content
			);

			return is_string( $updated ) ? $updated : $block_content;
		}

		return $block_content;
	}

	add_filter( 'render_block', 'strap_render_block_widget_badges', 20, 2 );
}

/**
 * Structural and landmark filters.
 */

/**
 * Add structured data to template parts.
 */
add_filter( 'render_block_core/template-part', 'strap_structured_data_parts_block_filter', 10, 2 );
function strap_structured_data_parts_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );

	if ( ! $class_name || ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	if ( str_contains( $class_name, 'main-search' ) ) {
		$itemtype = 'SearchResultsPage';
	} elseif ( str_contains( $class_name, 'main-index' ) || str_contains( $class_name, 'main-single' ) || str_contains( $class_name, 'main-archive' ) ) {
		$itemtype = 'Blog';
	} else {
		$itemtype = 'WebPage';
	}

	if ( str_contains( $class_name, 'site-header' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'id'         => 'masthead',
				'role'       => 'banner',
				'aria-label' => 'Site header',
				'itemscope'  => true,
				'itemtype'   => 'https://schema.org/WPHeader',
			)
		);
		return $processor->get_updated_html();
	}

	if ( str_contains( $class_name, 'site-main' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'main',
				'aria-label' => 'Main content',
				'itemscope'  => true,
				'itemtype'   => 'https://schema.org/' . $itemtype,
			)
		);
		return $processor->get_updated_html();
	}

	if ( str_contains( $class_name, 'site-footer' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'id'         => 'colophon',
				'role'       => 'contentinfo',
				'aria-label' => 'Site footer',
				'itemscope'  => true,
				'itemtype'   => 'https://schema.org/WPFooter',
			)
		);
		return $processor->get_updated_html();
	}

	if ( str_contains( $class_name, 'secondary-content' ) || str_contains( $class_name, 'tertiary-content' ) ) {
		$label = str_contains( $class_name, 'tertiary-content' ) ? 'Tertiary content' : 'Secondary content';

		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'complementary',
				'aria-label' => $label,
			)
		);
		return $processor->get_updated_html();
	}

	return $block_content;
}

/**
 * Add schema markup to single-content wrappers.
 */
add_filter( 'render_block_core/group', 'strap_single_content_block_filter', 10, 2 );
function strap_single_content_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );

	if ( ! str_contains( $class_name, 'hentry' ) || ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$post_type = 'Article';
	if ( is_singular() ) {
		$queried_post_type = get_post_type( get_queried_object_id() );
		if ( 'post' === $queried_post_type ) {
			$post_type = 'BlogPosting';
		}
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'itemscope' => true,
			'itemtype'  => 'https://schema.org/' . $post_type,
		)
	);

	return $processor->get_updated_html();
}

/**
 * Remove empty comments-header wrappers when the title block outputs nothing.
 */
add_filter( 'render_block_core/group', 'strap_comments_header_block_filter', 10, 2 );
function strap_comments_header_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );

	if ( ! str_contains( $class_name, 'comments-header' ) ) {
		return $block_content;
	}

	if ( '' === trim( wp_strip_all_tags( $block_content ) ) ) {
		return '';
	}

	return $block_content;
}

/**
 * Label entry-meta wrappers.
 */
add_filter( 'render_block_core/group', 'strap_entry_meta_content_block_filter', 10, 2 );
function strap_entry_meta_content_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );

	if ( ! str_contains( $class_name, 'entry-meta' ) || ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->set_attribute( 'aria-label', 'Entry meta' );
	return $processor->get_updated_html();
}

/**
 * Label post navigation wrappers.
 */
add_filter( 'render_block_core/group', 'strap_post_nav_content_block_filter', 10, 2 );
function strap_post_nav_content_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );

	if ( ! str_contains( $class_name, 'post-navigation' ) || ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->set_attribute( 'aria-label', 'Post navigation' );
	return $processor->get_updated_html();
}

/**
 * Add semantic list/navigation metadata to navigation blocks.
 */
add_filter( 'render_block_core/navigation', 'strap_navigation_content_block_filter', 10, 2 );
function strap_navigation_content_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );

	if ( ! $processor ) {
		return $block_content;
	}

	if ( $processor->next_tag( 'NAV' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'itemscope' => true,
				'itemtype'  => 'https://schema.org/SiteNavigationElement',
			)
		);
	}

	if ( $processor->next_tag( array( 'tag_name' => 'UL', 'class_name' => 'wp-block-navigation__container' ) ) ) {
		$processor->set_attribute( 'role', 'list' );
	}

	while ( $processor->next_tag( 'A' ) ) {
		$processor->set_attribute( 'itemprop', 'url' );
	}

	return $processor->get_updated_html();
}

/**
 * Add semantic list labeling to categories blocks.
 */
add_filter( 'render_block_core/categories', 'strap_categories_content_block_filter', 10, 2 );
function strap_categories_content_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );

	if ( ! $processor ) {
		return $block_content;
	}

	if ( $processor->next_tag( 'UL' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'list',
				'aria-label' => 'Categories',
			)
		);
	}

	return $processor->get_updated_html();
}

/**
 * Add semantic list labeling to archives blocks.
 */
add_filter( 'render_block_core/archives', 'strap_archives_content_block_filter', 10, 2 );
function strap_archives_content_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );

	if ( ! $processor ) {
		return $block_content;
	}

	if ( $processor->next_tag( 'UL' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'list',
				'aria-label' => 'Archives',
			)
		);
	}

	return $processor->get_updated_html();
}

/**
 * Label social links as a list.
 */
add_filter( 'render_block_core/social-links', 'strap_social_links_block_filter', 10, 2 );
function strap_social_links_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor ) {
		return $block_content;
	}

	if ( $processor->next_tag( 'UL' ) ) {
		$processor->set_attribute( 'role', 'list' );
		if ( false === $processor->get_attribute( 'aria-label' ) ) {
			$processor->set_attribute( 'aria-label', 'Social links' );
		}
	}

	return $processor->get_updated_html();
}

/**
 * Reinforce search landmarks with stable accessible naming.
 */
add_filter( 'render_block_core/search', 'strap_search_block_filter', 10, 2 );
function strap_search_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag( 'FORM' ) ) {
		return $block_content;
	}

	$label = ! empty( $block['attrs']['label'] ) ? wp_strip_all_tags( $block['attrs']['label'] ) : 'Search';
	if ( false === $processor->get_attribute( 'aria-label' ) ) {
		$processor->set_attribute( 'aria-label', $label );
	}

	return $processor->get_updated_html();
}

/**
 * Label post comments form containers and native forms.
 */
add_filter( 'render_block_core/post-comments-form', 'strap_post_comments_form_block_filter', 10, 2 );
function strap_post_comments_form_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor ) {
		return $block_content;
	}

	if ( $processor->next_tag() ) {
		$processor->set_attribute( 'aria-label', 'Comment form' );
	}

	if ( $processor->next_tag( 'FORM' ) && false === $processor->get_attribute( 'aria-label' ) ) {
		$processor->set_attribute( 'aria-label', 'Comment submission form' );
	}

	return $processor->get_updated_html();
}

/**
 * Content and schema filters.
 */

/**
 * Add machine-readable description semantics to excerpts.
 */
add_filter( 'render_block_core/post-excerpt', 'strap_post_excerpt_content_block_filter', 10, 2 );
function strap_post_excerpt_content_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );

	if ( ! str_contains( $class_name, 'entry-summary' ) || ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->set_attribute( 'itemprop', 'description' );
	return $processor->get_updated_html();
}

/**
 * Mark post content as article body.
 */
add_filter( 'render_block_core/post-content', 'strap_post_content_content_block_filter', 10, 2 );
function strap_post_content_content_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );

	if ( ! str_contains( $class_name, 'entry-content' ) || ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->set_attribute( 'itemprop', 'articleBody' );
	return $processor->get_updated_html();
}

/**
 * Add machine-readable text semantics to comment content blocks.
 */
add_filter( 'render_block_core/comment-content', 'strap_comment_content_block_filter', 10, 2 );
function strap_comment_content_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->set_attribute( 'itemprop', 'text' );
	return $processor->get_updated_html();
}

/**
 * Add schema to site-title output while preserving the core renderer.
 */
add_filter( 'render_block_core/site-title', 'strap_site_title_block_filter', 10, 2 );
function strap_site_title_block_filter( string $block_content, array $block ): string {
	if ( ! function_exists( 'strap_add_schema_to_title_markup' ) ) {
		return $block_content;
	}

	return strap_add_schema_to_title_markup( $block_content, 'site-title' );
}

/**
 * Add schema to site-tagline output while preserving the core renderer.
 */
add_filter( 'render_block_core/site-tagline', 'strap_site_tagline_block_filter', 10, 2 );
function strap_site_tagline_block_filter( string $block_content, array $block ): string {
	if ( ! function_exists( 'strap_add_schema_to_tagline_markup' ) ) {
		return $block_content;
	}

	return strap_add_schema_to_tagline_markup( $block_content, 'site-description' );
}

/**
 * Add schema to post-title output while preserving the core renderer.
 */
add_filter( 'render_block_core/post-title', 'strap_post_title_block_filter', 10, 2 );
function strap_post_title_block_filter( string $block_content, array $block ): string {
	if ( ! function_exists( 'strap_add_schema_to_title_markup' ) ) {
		return $block_content;
	}

	return strap_add_schema_to_title_markup( $block_content, 'entry-title' );
}

/**
 * Add schema to post-date output while preserving the core renderer.
 */
add_filter( 'render_block_core/post-date', 'strap_post_date_block_filter', 10, 3 );
function strap_post_date_block_filter( string $block_content, array $block, WP_Block $instance ): string {
	$updated_html = $block_content;
	$processor    = strap_get_html_processor( $updated_html );

	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->add_class( 'posted-on' );
	$updated_html = $processor->get_updated_html();

	$is_modified = isset( $block['attrs']['displayType'] ) && 'modified' === $block['attrs']['displayType'];
	$post_id     = $instance->context['postId'] ?? 0;
	$itemprop    = 'datePublished';
	$time_class  = 'entry-date published';

	if ( $is_modified && $post_id && get_the_modified_date( 'Ymdhi', $post_id ) > get_the_date( 'Ymdhi', $post_id ) ) {
		$itemprop   = 'dateModified';
		$time_class = 'entry-date updated';
	}

	$processor = strap_get_html_processor( $updated_html );
	if ( $processor && $processor->next_tag( 'TIME' ) ) {
		$processor->set_attribute( 'itemprop', $itemprop );
		$processor->set_attribute( 'class', $time_class );
		$updated_html = $processor->get_updated_html();
	}

	$processor = strap_get_html_processor( $updated_html );
	if ( $processor && $processor->next_tag( 'A' ) ) {
		$processor->set_attribute( 'itemprop', 'url' );
		$updated_html = $processor->get_updated_html();
	}

	if ( 'dateModified' !== $itemprop || ! $post_id ) {
		return $updated_html;
	}

	$published_time = sprintf(
		'<time class="entry-date published visually-hidden" datetime="%1$s" itemprop="datePublished">%2$s</time>',
		esc_attr( get_the_date( 'c', $post_id ) ),
		esc_html( get_the_date( empty( $block['attrs']['format'] ) ? '' : $block['attrs']['format'], $post_id ) )
	);

	$closing_div = strrpos( $updated_html, '</div>' );

	if ( false === $closing_div ) {
		return $updated_html . $published_time;
	}

	return substr_replace( $updated_html, $published_time . '</div>', $closing_div, strlen( '</div>' ) );
}

/**
 * Add schema to post-author output while preserving the core renderer.
 */
add_filter( 'render_block_core/post-author-name', 'strap_post_author_name_block_filter', 10, 3 );
function strap_post_author_name_block_filter( string $block_content, array $block, WP_Block $instance ): string {
	$author_id = 0;

	if ( isset( $instance->context['postId'] ) ) {
		$author_id = (int) get_post_field( 'post_author', $instance->context['postId'] );
	} else {
		$author_id = (int) get_query_var( 'author' );
	}

	if ( ! $author_id ) {
		return $block_content;
	}

	$author_name_text = get_the_author_meta( 'display_name', $author_id );

	if ( '' === $author_name_text ) {
		return $block_content;
	}

	$processor = strap_get_html_processor( $block_content );

	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->add_class( 'author' );
	$processor->add_class( 'vcard' );
	$processor->set_attribute( 'itemprop', 'author' );
	$processor->set_attribute( 'itemtype', 'https://schema.org/Person' );
	$processor->set_attribute( 'itemscope', true );

	$updated_html = $processor->get_updated_html();
	$start        = strpos( $updated_html, '>' );
	$end          = strrpos( $updated_html, '</div>' );

	if ( false === $start || false === $end || $end <= $start ) {
		return $updated_html;
	}

	if ( ! empty( $block['attrs']['isLink'] ) ) {
		$inner_html = sprintf(
			'<a href="%1$s" target="%2$s" class="wp-block-post-author-name__link url fn n" title="%3$s" rel="author" itemprop="url"><span class="author-name" itemprop="name">%4$s</span></a>',
			esc_url( get_author_posts_url( $author_id ) ),
			esc_attr( $block['attrs']['linkTarget'] ?? '_self' ),
			esc_attr( sprintf( __( 'View all posts by %s', 'systemstrap' ), $author_name_text ) ),
			esc_html( $author_name_text )
		);
	} else {
		$inner_html = sprintf(
			'<span class="author-name" itemprop="name">%s</span>',
			esc_html( $author_name_text )
		);
	}

	return substr( $updated_html, 0, $start + 1 ) . $inner_html . substr( $updated_html, $end );
}

/**
 * Add schema to comment-author output while preserving the core renderer.
 */
add_filter( 'render_block_core/comment-author-name', 'strap_comment_author_name_block_filter', 10, 3 );
function strap_comment_author_name_block_filter( string $block_content, array $block, WP_Block $instance ): string {
	$comment_id = $instance->context['commentId'] ?? 0;

	if ( ! $comment_id ) {
		return $block_content;
	}

	$comment = get_comment( $comment_id );

	if ( ! $comment ) {
		return $block_content;
	}

	$processor = strap_get_html_processor( $block_content );

	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->add_class( 'comment-author' );
	$processor->add_class( 'vcard' );
	$processor->set_attribute( 'itemprop', 'author' );
	$processor->set_attribute( 'itemtype', 'https://schema.org/Person' );
	$processor->set_attribute( 'itemscope', true );

	$updated_html = $processor->get_updated_html();
	$start        = strpos( $updated_html, '>' );
	$end          = strrpos( $updated_html, '</div>' );

	if ( false === $start || false === $end || $end <= $start ) {
		return $updated_html;
	}

	$comment_author_text = get_comment_author( $comment );
	$link                = get_comment_author_url( $comment );
	$commenter           = wp_get_current_commenter();
	$show_pending_links  = isset( $commenter['comment_author'] ) && $commenter['comment_author'];

	if ( ! empty( $link ) && ! empty( $block['attrs']['isLink'] ) ) {
		$inner_html = sprintf(
			'<cite class="fn"><a rel="external nofollow ugc" href="%1$s" target="%2$s" itemprop="url"><span itemprop="name">%3$s</span></a></cite>',
			esc_url( $link ),
			esc_attr( $block['attrs']['linkTarget'] ?? '_self' ),
			esc_html( $comment_author_text )
		);
	} else {
		$inner_html = sprintf(
			'<cite class="fn"><span itemprop="name">%s</span></cite>',
			esc_html( $comment_author_text )
		);
	}

	if ( '0' === $comment->comment_approved && ! $show_pending_links ) {
		$inner_html = wp_kses(
			$inner_html,
			array(
				'cite' => array( 'class' => true ),
				'span' => array( 'itemprop' => true ),
			)
		);
	}

	return substr( $updated_html, 0, $start + 1 ) . $inner_html . substr( $updated_html, $end );
}

/**
 * Add schema to comment-date output while preserving the core renderer.
 */
add_filter( 'render_block_core/comment-date', 'strap_comment_date_block_filter', 10, 3 );
function strap_comment_date_block_filter( string $block_content, array $block, WP_Block $instance ): string {
	$updated_html = $block_content;
	$processor    = strap_get_html_processor( $updated_html );

	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$processor->add_class( 'entry-meta' );
	$processor->add_class( 'comment-metadata' );
	$updated_html = $processor->get_updated_html();

	$processor = strap_get_html_processor( $updated_html );
	if ( $processor && $processor->next_tag( 'TIME' ) ) {
		$processor->set_attribute( 'itemprop', 'datePublished' );
		$processor->set_attribute( 'class', 'entry-date published' );
		$updated_html = $processor->get_updated_html();
	}

	$processor = strap_get_html_processor( $updated_html );
	if ( $processor && $processor->next_tag( 'A' ) ) {
		$processor->set_attribute( 'itemprop', 'url' );
		$updated_html = $processor->get_updated_html();
	}

	return $updated_html;
}

/**
 * Add tag-cloud labeling and keyword semantics.
 */
add_filter( 'render_block_core/tag-cloud', 'strap_tag_cloud_block_filter', 10, 2 );
function strap_tag_cloud_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor ) {
		return $block_content;
	}

	if ( $processor->next_tag( 'P' ) ) {
		$processor->set_attribute( 'aria-label', 'Tag cloud' );
	}

	while ( $processor->next_tag( 'A' ) ) {
		$processor->set_attribute( 'itemprop', 'keywords' );
	}

	return $processor->get_updated_html();
}

/**
 * Add taxonomy list semantics to post terms blocks.
 */
add_filter( 'render_block_core/post-terms', 'strap_post_terms_block_filter', 10, 2 );
function strap_post_terms_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	$term  = ! empty( $block['attrs']['term'] ) ? sanitize_key( $block['attrs']['term'] ) : '';
	$label = 'Post taxonomy';
	if ( $term ) {
		$label = 'Post ' . sanitize_text_field( $term );
	}

	if ( in_array( $processor->get_tag(), array( 'UL', 'OL' ), true ) ) {
		$processor->set_attribute( 'role', 'list' );
	}

	$processor->set_attribute( 'aria-label', $label );
	$updated_html = $processor->get_updated_html();

	$processor = strap_get_html_processor( $updated_html );
	if ( ! $processor ) {
		return $updated_html;
	}

	while ( $processor->next_tag( 'LI' ) ) {
		$processor->set_attribute( 'itemprop', 'itemListElement' );
	}

	$updated_html = $processor->get_updated_html();
	$processor    = strap_get_html_processor( $updated_html );
	if ( ! $processor ) {
		return $updated_html;
	}

	while ( $processor->next_tag( 'A' ) ) {
		if ( 'post_tag' === $term ) {
			$processor->set_attribute( 'itemprop', 'keywords' );
		} elseif ( 'category' === $term ) {
			$processor->set_attribute( 'itemprop', 'articleSection' );
		} else {
			$processor->remove_attribute( 'itemprop' );
		}
	}

	return $processor->get_updated_html();
}

/**
 * Scope comment body panels as Comment items.
 */
add_filter( 'render_block_core/group', 'strap_comment_body_group_block_filter', 10, 2 );
function strap_comment_body_group_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );

	if ( ! str_contains( $class_name, 'comment-body' ) || ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'itemscope' => true,
			'itemtype'  => 'https://schema.org/Comment',
		)
	);

	return $processor->get_updated_html();
}

/**
 * Media and branding filters.
 */

/**
 * Add schema.org markup to site-logo blocks, including fallback output.
 */
add_filter( 'render_block_core/site-logo', 'strap_site_logo_block_filter', 10, 2 );
function strap_site_logo_block_filter( string $block_content, array $block ): string {
	if ( empty( $block_content ) ) {
		$block_content = strap_render_site_logo_fallback( $block );
		if ( empty( $block_content ) ) {
			return $block_content;
		}
	}

	return strap_add_site_logo_schema_markup( $block_content );
}

/**
 * Add quotation schema to quote blocks.
 */
function strap_quote_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag( 'BLOCKQUOTE' ) ) {
		return $block_content;
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'itemscope' => true,
			'itemtype'  => 'https://schema.org/Quotation',
		)
	);

	return $processor->get_updated_html();
}
add_filter( 'render_block_core/quote', 'strap_quote_block_filter', 10, 2 );
add_filter( 'render_block_core/pullquote', 'strap_quote_block_filter', 10, 2 );

/**
 * Add schema to gallery blocks.
 */
add_filter( 'render_block_core/gallery', 'strap_gallery_block_filter', 10, 2 );
function strap_gallery_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag( 'FIGURE' ) ) {
		return $block_content;
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'itemscope' => true,
			'itemtype'  => 'https://schema.org/ImageGallery',
		)
	);

	return $processor->get_updated_html();
}

/**
 * Add image-object semantics to featured image blocks.
 */
add_filter( 'render_block_core/post-featured-image', 'strap_post_featured_image_block_filter', 10, 2 );
function strap_post_featured_image_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag( 'FIGURE' ) ) {
		return $block_content;
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'itemscope' => true,
			'itemtype'  => 'https://schema.org/ImageObject',
			'itemprop'  => 'image',
		)
	);

	if ( $processor->next_tag( 'A' ) ) {
		$processor->set_attribute( 'itemprop', 'url' );
	}

	if ( $processor->next_tag( 'IMG' ) ) {
		$processor->set_attribute( 'itemprop', 'contentUrl' );
	}

	return $processor->get_updated_html();
}

/**
 * Add schema to audio blocks.
 */
add_filter( 'render_block_core/audio', 'strap_audio_block_filter', 10, 2 );
function strap_audio_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag( 'FIGURE' ) ) {
		return $block_content;
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'itemscope' => true,
			'itemtype'  => 'https://schema.org/AudioObject',
		)
	);

	while ( $processor->next_tag() ) {
		if ( 'AUDIO' === $processor->get_tag() ) {
			$processor->set_attribute( 'itemprop', 'contentUrl' );
		}
	}

	$updated_html = $processor->get_updated_html();
	
	$meta_tags = '<meta itemprop="name" content="' . esc_attr( get_the_title() ) . ' Audio">';
	$updated_html = str_replace( '</figure>', $meta_tags . '</figure>', $updated_html );

	return $updated_html;
}

/**
 * BuddyPress filters.
 */

/**
 * Add landmark semantics to BuddyPress content sections.
 */
add_filter( 'render_block_core/group', 'strap_buddypress_semantic_block_filter', 10, 2 );
function strap_buddypress_semantic_block_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );

	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	if ( str_contains( $class_name, 'buddypress-activity-pattern' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'feed',
				'aria-label' => 'Activity feed',
			)
		);
		return $processor->get_updated_html();
	}

	if ( str_contains( $class_name, 'buddypress-members-pattern' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'region',
				'aria-label' => 'Members directory',
			)
		);
		return $processor->get_updated_html();
	}

	if ( str_contains( $class_name, 'buddypress-groups-pattern' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'region',
				'aria-label' => 'Groups directory',
			)
		);
		return $processor->get_updated_html();
	}

	if ( str_contains( $class_name, 'buddypress-blogs-pattern' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'region',
				'aria-label' => 'Sites directory',
			)
		);
		return $processor->get_updated_html();
	}

	return $block_content;
}

/**
 * Add semantic labeling to BuddyPress dynamic directory blocks.
 */
add_filter( 'render_block_bp/dynamic-members', 'strap_bp_dynamic_members_block_filter', 10, 2 );
function strap_bp_dynamic_members_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'role'       => 'region',
			'aria-label' => 'Members directory',
		)
	);

	if ( $processor->next_tag( array( 'tag_name' => 'DIV', 'class_name' => 'item-options' ) ) ) {
		$processor->set_attribute( 'aria-label', 'Member sorting options' );
	}

	if ( $processor->next_tag( array( 'tag_name' => 'UL', 'class_name' => 'item-list' ) ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'list',
				'aria-label' => 'Members',
			)
		);
	}

	return $processor->get_updated_html();
}

/**
 * Add semantic labeling to BuddyPress dynamic groups blocks.
 */
add_filter( 'render_block_bp/dynamic-groups', 'strap_bp_dynamic_groups_block_filter', 10, 2 );
function strap_bp_dynamic_groups_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'role'       => 'region',
			'aria-label' => 'Groups directory',
		)
	);

	if ( $processor->next_tag( array( 'tag_name' => 'DIV', 'class_name' => 'item-options' ) ) ) {
		$processor->set_attribute( 'aria-label', 'Group sorting options' );
	}

	if ( $processor->next_tag( array( 'tag_name' => 'UL', 'class_name' => 'item-list' ) ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'list',
				'aria-label' => 'Groups',
			)
		);
	}

	return $processor->get_updated_html();
}

/**
 * Restore saved custom classes on BuddyPress member blocks.
 *
 * BuddyPress rebuilds these wrappers in PHP and drops the incoming block
 * `className`, so style-variation classes like `is-style-system-panel`
 * must be reattached at render time.
 */
add_filter( 'render_block_bp/member', 'strap_bp_member_style_class_filter', 10, 2 );
add_filter( 'render_block_bp/members', 'strap_bp_member_style_class_filter', 10, 2 );
function strap_bp_member_style_class_filter( string $block_content, array $block ): string {
	$class_name = strap_get_class_name( $block );
	$processor  = strap_get_html_processor( $block_content );
	$block_name = $block['blockName'] ?? '';

	if ( ! $class_name || ! $processor || ! $processor->next_tag() ) {
		return $block_content;
	}

	if ( str_contains( $class_name, 'is-style-system-panel' ) ) {
		if ( 'bp/member' === $block_name ) {
			wp_enqueue_style( 'bp-member-system-panel' );
		}

		if ( 'bp/members' === $block_name ) {
			wp_enqueue_style( 'bp-members-system-panel' );
		}
	}

	strap_html_processor_add_classes( $processor, $class_name );

	$updated_html = $processor->get_updated_html();

	if ( 'bp/member' !== $block_name ) {
		return $updated_html;
	}

	$processor = strap_get_html_processor( $updated_html );

	if ( ! $processor ) {
		return $updated_html;
	}

	while ( $processor->next_tag( array( 'tag_name' => 'A', 'class_name' => 'button' ) ) ) {
		$processor->set_attribute( 'class', 'button' );
	}

	return $processor->get_updated_html();
}

/**
 * Complex list-output replacements.
 */

add_filter( 'render_block_core/latest-posts', 'strap_latest_posts_block_filter', 10, 2 );
function strap_latest_posts_block_filter( string $block_content, array $block ): string {
	$block_content = preg_replace( '/<ul([^>]*)>/', '<ul$1 itemscope itemtype="https://schema.org/ItemList">', $block_content, 1 );

	$counter = 1;
	$block_content = preg_replace_callback( '/<li>(.*?)<\/li>/s', function( $matches ) use ( &$counter ) {
		$inner = $matches[1];
		$url = '';
		$title = '';
		if ( preg_match( '/<a[^>]*href="([^"]*)"[^>]*>(.*?)<\/a>/', $inner, $a_matches ) ) {
			$url = $a_matches[1];
			$title = wp_strip_all_tags( $a_matches[2] );
		}
		
		$html = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
		$html .= '<meta itemprop="position" content="' . $counter . '" />';
		$html .= '<article itemprop="item" itemscope itemtype="https://schema.org/Article">';
		if ( $url && $title ) {
			$html .= '<link itemprop="mainEntityOfPage url" href="' . esc_url( $url ) . '" />';
			$html .= '<meta itemprop="headline" content="' . esc_attr( $title ) . '" />';
			$html .= '<meta itemprop="description" content="' . esc_attr( $title ) . '" />';
		}
		$html .= $inner;
		$html .= '</article></li>';
		
		$counter++;
		return $html;
	}, $block_content );

	return $block_content;
}

add_filter( 'render_block_core/post-template', 'strap_post_template_block_filter', 10, 2 );
function strap_post_template_block_filter( string $block_content, array $block ): string {
	$block_content = preg_replace( '/<ul([^>]*)>/', '<ul$1 itemscope itemtype="https://schema.org/ItemList">', $block_content, 1 );

	$counter = 1;
	// We need to parse <li> with classes.
	$block_content = preg_replace_callback( '/<li([^>]*)>(.*?)<\/li>/s', function( $matches ) use ( &$counter ) {
		$attrs = $matches[1];
		$inner = $matches[2];
		
		// Attempt to extract title/url from core/post-title if present
		$url = '';
		$title = '';
		if ( preg_match( '/<h[1-6][^>]*wp-block-post-title[^>]*>.*?<a[^>]*href="([^"]*)"[^>]*>(.*?)<\/a>.*?<\/h[1-6]>/s', $inner, $a_matches ) ) {
			$url = $a_matches[1];
			$title = wp_strip_all_tags( $a_matches[2] );
		}
		
		$html = '<li' . $attrs . ' itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
		$html .= '<meta itemprop="position" content="' . $counter . '" />';
		$html .= '<article itemprop="item" itemscope itemtype="https://schema.org/Article">';
		if ( $url && $title ) {
			$html .= '<link itemprop="mainEntityOfPage url" href="' . esc_url( $url ) . '" />';
			$html .= '<meta itemprop="headline" content="' . esc_attr( $title ) . '" />';
			$html .= '<meta itemprop="description" content="' . esc_attr( $title ) . '" />';
		}
		$html .= $inner;
		$html .= '</article></li>';
		
		$counter++;
		return $html;
	}, $block_content );

	return $block_content;
}

add_filter( 'render_block_core/latest-comments', 'strap_latest_comments_block_filter', 10, 2 );
function strap_latest_comments_block_filter( string $block_content, array $block ): string {
	$block_content = preg_replace( '/<ol([^>]*)>/', '<ol$1 itemscope itemtype="https://schema.org/ItemList">', $block_content, 1 );

	$counter = 1;
	$block_content = preg_replace_callback( '/<li([^>]*)>(.*?)<\/li>/s', function( $matches ) use ( &$counter ) {
		$attrs = $matches[1];
		$inner = $matches[2];
		
		$html = '<li' . $attrs . ' itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
		$html .= '<meta itemprop="position" content="' . $counter . '" />';
		$html .= '<article itemprop="item" itemscope itemtype="https://schema.org/Comment">';
		$html .= $inner;
		$html .= '</article></li>';
		
		$counter++;
		return $html;
	}, $block_content );

	return $block_content;
}
