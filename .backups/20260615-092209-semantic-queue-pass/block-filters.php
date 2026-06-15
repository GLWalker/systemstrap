<?php
/**
 * SystemStrap Block Filters & Action Hooks
 *
 * @package systemstrap
 */

defined( 'ABSPATH' ) || exit;

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

if ( ! function_exists( 'strap_do_block_action' ) ) {
	/**
	 * Execute a WordPress action hook inside block content.
	 *
	 * @param string $hook The name of the action hook to execute.
	 * @return string
	 */
	function strap_do_block_action( string $hook = '' ): string {
		ob_start();
		do_action( $hook );
		$block_action = ob_get_clean();
		return $block_action ? $block_action : '';
	}
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

if ( ! function_exists( 'strap_replace_block_content' ) ) {
	/**
	 * Replace content in the block's rendered HTML.
	 *
	 * @param string $block_content The block's rendered content.
	 * @param string $search        The search string.
	 * @param string $replace       The replacement string.
	 * @param int    $limit         The limit of replacements.
	 * @return string
	 */
	function strap_replace_block_content( string $block_content, string $search, string $replace, int $limit = 1 ): string {
		$pattern = '/' . preg_quote( $search, '/' ) . '/';
		$result  = preg_replace( $pattern, $replace, $block_content, $limit );
		return is_string( $result ) ? $result : $block_content;
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

	$itemtype = match ( true ) {
		str_contains( $class_name, 'main-search' ) => 'SearchResultsPage',
		str_contains( $class_name, 'main-index' ),
		str_contains( $class_name, 'main-single' ),
		str_contains( $class_name, 'main-archive' ) => 'Blog',
		default => 'WebPage',
	};

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

	strap_html_processor_set_attributes(
		$processor,
		array(
			'itemscope' => true,
			'itemtype'  => 'https://schema.org/CreativeWork',
		)
	);

	return $processor->get_updated_html();
}

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

	while ( $processor->next_tag( 'A' ) ) {
		$processor->set_attribute( 'itemprop', 'url' );
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

	while ( $processor->next_tag( 'A' ) ) {
		$processor->set_attribute( 'itemprop', 'url' );
	}

	return $processor->get_updated_html();
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
			$processor->set_attribute( 'itemprop', 'logo' );
		}
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
 * Add taxonomy list semantics to post terms blocks.
 */
add_filter( 'render_block_core/post-terms', 'strap_post_terms_block_filter', 10, 2 );
function strap_post_terms_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor ) {
		return $block_content;
	}

	$label = 'Post taxonomy';
	if ( ! empty( $block['attrs']['term'] ) ) {
		$label = 'Post ' . sanitize_text_field( $block['attrs']['term'] );
	}

	if ( $processor->next_tag( 'UL' ) || $processor->next_tag( 'OL' ) ) {
		strap_html_processor_set_attributes(
			$processor,
			array(
				'role'       => 'list',
				'aria-label' => $label,
			)
		);
		return $processor->get_updated_html();
	}

	return $block_content;
}

/**
 * Add schema to video blocks.
 */
add_filter( 'render_block_core/video', 'strap_video_block_filter', 10, 2 );
function strap_video_block_filter( string $block_content, array $block ): string {
	$processor = strap_get_html_processor( $block_content );
	if ( ! $processor || ! $processor->next_tag( 'FIGURE' ) ) {
		return $block_content;
	}

	strap_html_processor_set_attributes(
		$processor,
		array(
			'itemscope' => true,
			'itemtype'  => 'https://schema.org/VideoObject',
		)
	);

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

	return $processor->get_updated_html();
}

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
