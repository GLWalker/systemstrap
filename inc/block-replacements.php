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

if (!function_exists('strap_render_block_core_latest_posts')) {

    remove_action('init', 'register_block_core_latest_posts');

    add_action('init', 'strap_register_block_core_latest_posts');

    /**
     * ReRenders the `core/latest-posts` block on the server with addditional markup.
     * First the core block is removed
     *
     * @param array $attributes The block attributes.
     *
     * @return string The render.
     */

    function strap_render_block_core_latest_posts($attributes)
    {
        global $post, $block_core_latest_posts_excerpt_length;

        $args = array(
            'posts_per_page'      => $attributes['postsToShow'],
            'post_status'         => 'publish',
            'order'               => $attributes['order'],
            'orderby'             => $attributes['orderBy'],
            'ignore_sticky_posts' => true,
            'no_found_rows'       => true,
        );

        $block_core_latest_posts_excerpt_length = $attributes['excerptLength'];
        add_filter('excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20);

        if (!empty($attributes['categories'])) {
            $args['category__in'] = array_column($attributes['categories'], 'id');
        }
        if (isset($attributes['selectedAuthor'])) {
            $args['author'] = $attributes['selectedAuthor'];
        }

        $query        = new WP_Query();
        $recent_posts = $query->query($args);

        if (isset($attributes['displayFeaturedImage']) && $attributes['displayFeaturedImage']) {
            update_post_thumbnail_cache($query);
        }

        $list_items_markup = '';

        $counter = 1;

        foreach ($recent_posts as $post) {
            $post_link      = esc_url(get_permalink($post));
            $title          = get_the_title($post);
            $article_schema = 'post' === get_post_type($post) ? 'BlogPosting' : 'CreativeWork';

            if (!$title) {
                $title = __('(no title)', 'systemstrap');
            }

            $list_items_markup .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
            $list_items_markup .= '<meta itemprop="position" content="' . esc_attr((string) $counter) . '" />';
            $list_items_markup .= '<article itemprop="item" itemscope itemtype="https://schema.org/' . esc_attr($article_schema) . '">';
            $list_items_markup .= '<meta itemprop="mainEntityOfPage" content="' . esc_url($post_link) . '" />';
            $list_items_markup .= '<meta itemprop="headline" content="' . esc_attr($title) . '" />';

            if ($attributes['displayFeaturedImage'] && has_post_thumbnail($post)) {

                $image_style = '';
                if (isset($attributes['featuredImageSizeWidth'])) {
                    $width = absint($attributes['featuredImageSizeWidth']);
                    if ( $width > 0 ) {
                        $image_style .= sprintf('max-width:%dpx;', $width);
                    }
                }
                if (isset($attributes['featuredImageSizeHeight'])) {
                    $height = absint($attributes['featuredImageSizeHeight']);
                    if ( $height > 0 ) {
                        $image_style .= sprintf('max-height:%dpx;', $height);
                    }
                }

                $image_classes = 'wp-block-latest-posts__featured-image';
                if (isset($attributes['featuredImageAlign'])) {
                    $image_classes .= ' align' . $attributes['featuredImageAlign'];
                }

                $featured_image = get_the_post_thumbnail(
                    $post,
                    $attributes['featuredImageSizeSlug'],
                    array(
                        // 'itemprop' => 'image',
                        'style' => esc_attr($image_style),
                    )
                );

                if ($attributes['addLinkToFeaturedImage']) {
                    $featured_image = sprintf(
                        '<a href="%1$s" aria-label="%2$s">%3$s</a>',
                        esc_url($post_link),
                        esc_attr($title),
                        $featured_image
                    );
                }

                $featured_image_url = get_the_post_thumbnail_url($post);

                $list_items_markup .= sprintf(
                    '<figure itemprop="image" itemscope itemtype="https://schema.org/ImageObject" class="%1$s"><meta itemprop="url" content="%2$s">%3$s</figure>',
                    esc_attr($image_classes),
                    esc_url($featured_image_url),
                    $featured_image
                );
            }

            $list_items_markup .= sprintf(
                '<a itemprop="url" class="wp-block-latest-posts__post-title" href="%1$s"><span class="title" itemprop="headline">%2$s</span></a>',
                esc_url($post_link),
                esc_html($title)
            );

            if (isset($attributes['displayAuthor']) && $attributes['displayAuthor']) {
                $author_display_name = get_the_author_meta('display_name', $post->post_author);

                if (!empty($author_display_name)) {
                    $list_items_markup .= sprintf(
                        '<div class="wp-block-latest-posts__post-author author vcard" itemprop="author" itemtype="https://schema.org/Person" itemscope><span class="byline">%1$s</span> <span class="author-name" itemprop="name">%2$s</span></div>',
                        esc_html__('by', 'systemstrap'),
                        esc_html($author_display_name)
                    );
                }
            }

            if (isset($attributes['displayPostDate']) && $attributes['displayPostDate']) {
                $list_items_markup .= sprintf(
                    '<time itemprop="datePublished" datetime="%1$s" class="wp-block-latest-posts__post-date">%2$s</time>',
                    esc_attr(get_the_date('c', $post)),
                    esc_html(get_the_date('', $post))
                );
            }

            if (
                isset($attributes['displayPostContent']) && $attributes['displayPostContent']
                && isset($attributes['displayPostContentRadio']) && 'excerpt' === $attributes['displayPostContentRadio']
            ) {

                $trimmed_excerpt = get_the_excerpt($post);

                /*
			 * Adds a "Read more" link with screen reader text.
			 * [&hellip;] is the default excerpt ending from wp_trim_excerpt() in Core.
			 */
                if (str_ends_with($trimmed_excerpt, ' [&hellip;]')) {
                    /** This filter is documented in wp-includes/formatting.php */
                    $excerpt_length = (int) apply_filters('excerpt_length', $block_core_latest_posts_excerpt_length);
                    if ($excerpt_length <= $block_core_latest_posts_excerpt_length) {
                        $trimmed_excerpt  = substr($trimmed_excerpt, 0, -11);
                        $trimmed_excerpt .= sprintf(
                            /* translators: 1: A URL to a post, 2: Hidden accessibility text: Post title */
                            __('… <a class="wp-block-latest-posts__read-more" href="%1$s" rel="noopener noreferrer">Read more<span class="screen-reader-text">: %2$s</span></a>', 'systemstrap'),
                            esc_url($post_link),
                            esc_html($title)
                        );
                    }
                }

                if (post_password_required($post)) {
                    $trimmed_excerpt = __('This content is password protected.', 'systemstrap');
                }

                $list_items_markup .= sprintf(
                    '<div class="wp-block-latest-posts__post-excerpt" itemprop="description">%1$s</div>',
                    wp_kses_post($trimmed_excerpt)
                );
            }

            if (
                isset($attributes['displayPostContent']) && $attributes['displayPostContent']
                && isset($attributes['displayPostContentRadio']) && 'full_post' === $attributes['displayPostContentRadio']
            ) {

                $post_content = html_entity_decode($post->post_content, ENT_QUOTES, get_option('blog_charset'));

                if (post_password_required($post)) {
                    $post_content = __('This content is password protected.', 'systemstrap');
                }

                $list_items_markup .= sprintf(
                    '<div class="wp-block-latest-posts__post-full-content" itemprop="articleBody">%1$s</div>',
                    wp_kses_post($post_content)
                );
            }

            $list_items_markup .= "</article></li>\n";
            $counter++;
        }

        remove_filter('excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20);

        $classes = array('wp-block-latest-posts__list');
        if (isset($attributes['postLayout']) && 'grid' === $attributes['postLayout']) {
            $classes[] = 'is-grid';
        }
        if (isset($attributes['columns']) && 'grid' === $attributes['postLayout']) {
            $classes[] = 'columns-' . $attributes['columns'];
        }
        if (isset($attributes['displayPostDate']) && $attributes['displayPostDate']) {
            $classes[] = 'has-dates';
        }
        if (isset($attributes['displayAuthor']) && $attributes['displayAuthor']) {
            $classes[] = 'has-author';
        }
        if (isset($attributes['style']['elements']['link']['color']['text'])) {
            $classes[] = 'has-link-color';
        }

        $wrapper_attributes = get_block_wrapper_attributes(array('class' => implode(' ', $classes)));

        return sprintf(
            '<ul role="list" itemscope itemtype="https://schema.org/ItemList" itemListOrder="https://schema.org/ItemListOrderAscending" %1$s>%2$s</ul>',
            $wrapper_attributes,
            $list_items_markup
        );
    }

    /**
     * Registers the `core/latest-posts` block on the server.
     */
    function strap_register_block_core_latest_posts()
    {
        register_block_type_from_metadata(
            ABSPATH . WPINC . '/blocks/latest-posts',
            array(
                'render_callback' => 'strap_render_block_core_latest_posts',
            )
        );
    }
}

if (!function_exists('strap_render_block_core_post_template')) {

    remove_action('init', 'register_block_core_post_template');

    add_action('init', 'strap_register_block_core_post_template');

    /**
     * ReRenders the `core/post-template` block on the server with addditional markup.
     * First the core block is removed
     *
     * @param array $attributes The block attributes.
     *
     * @return string The render.
     */

    function strap_render_block_core_post_template($attributes, $content, $block)
    {
        $page_key            = isset($block->context['queryId']) ? 'query-' . $block->context['queryId'] . '-page' : 'query-page';
        $enhanced_pagination = isset($block->context['enhancedPagination']) && $block->context['enhancedPagination'];
        $page                = empty($_GET[$page_key]) ? 1 : absint(wp_unslash($_GET[$page_key]));

        // Use global query if needed.
        $use_global_query = (isset($block->context['query']['inherit']) && $block->context['query']['inherit']);
        if ($use_global_query) {
            global $wp_query;

            /*
		 * If already in the main query loop, duplicate the query instance to not tamper with the main instance.
		 * Since this is a nested query, it should start at the beginning, therefore rewind posts.
		 * Otherwise, the main query loop has not started yet and this block is responsible for doing so.
		 */
            if (in_the_loop()) {
                $query = clone $wp_query;
                $query->rewind_posts();
            } else {
                $query = $wp_query;
            }
        } else {
            $query_args = build_query_vars_from_query_block($block, $page);
            $query      = new WP_Query($query_args);
        }

        if (! $query->have_posts()) {
            return '';
        }

        if (block_core_post_template_uses_featured_image($block->inner_blocks)) {
            update_post_thumbnail_cache($query);
        }

        $classnames = '';
        if (isset($block->context['displayLayout']) && isset($block->context['query'])) {
            if (isset($block->context['displayLayout']['type']) && 'flex' === $block->context['displayLayout']['type']) {
                $classnames = "is-flex-container columns-{$block->context['displayLayout']['columns']}";
            }
        }
        if (isset($attributes['style']['elements']['link']['color']['text'])) {
            $classnames .= ' has-link-color';
        }

        // Ensure backwards compatibility by flagging the number of columns via classname when using grid layout.
        if (isset($attributes['layout']['type']) && 'grid' === $attributes['layout']['type'] && ! empty($attributes['layout']['columnCount'])) {
            $classnames .= ' ' . sanitize_title('columns-' . $attributes['layout']['columnCount']);
        }

        $wrapper_attributes = get_block_wrapper_attributes(array('class' => trim($classnames)));

        $content = '';
        $counter = 1;
        while ($query->have_posts()) {
            $query->the_post();

            // Get an instance of the current Post Template block.
            $block_instance = $block->parsed_block;

            // Set the block name to one that does not correspond to an existing registered block.
            // This ensures that for the inner instances of the Post Template block, we do not render any block supports.
            $block_instance['blockName'] = 'core/null';

            $post_id              = get_the_ID();
            $post_type            = get_post_type();

            $filter_block_context = static function ($context) use ($post_id, $post_type) {
                $context['postType'] = $post_type;
                $context['postId']   = $post_id;
                return $context;
            };

            $post_link      = esc_url(get_permalink($post_id));
            $title          = get_the_title($post_id);
            $article_schema = 'post' === $post_type ? 'BlogPosting' : 'CreativeWork';

            if (!$title) {
                $title = __('(no title)', 'systemstrap');
            }

            // Use an early priority to so that other 'render_block_context' filters have access to the values.
            add_filter('render_block_context', $filter_block_context, 1);
            // Render the inner blocks of the Post Template block with `dynamic` set to `false` to prevent calling
            // `render_callback` and ensure that no wrapper markup is included.
            $block_content = (new WP_Block($block_instance))->render(array('dynamic' => false));
            remove_filter('render_block_context', $filter_block_context, 1);

            // Wrap the render inner blocks in a `li` element with the appropriate post classes.
            $post_classes = implode(' ', get_post_class('wp-block-post'));

            $inner_block_directives = $enhanced_pagination ? ' data-wp-key="post-template-item-' . $post_id . '"' : '';

            $content .= '<li' . $inner_block_directives . ' itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="' . esc_attr($post_classes) . '">';
            $content .= '<meta itemprop="position" content="' . esc_attr((string) $counter) . '" />';
            $content .= '<article class="h-100" itemprop="item" itemscope itemtype="https://schema.org/' . esc_attr($article_schema) . '">';
            $content .= '<meta itemprop="headline" content="' . esc_attr($title) . '" />';
            $content .= '<meta itemprop="mainEntityOfPage" content="' . esc_url($post_link) . '" />';
            $content .= $block_content . '</article></li>';

            $counter++;
        }

        /*
	 * Use this function to restore the context of the template tags
	 * from a secondary query loop back to the main query loop.
	 * Since we use two custom loops, it's safest to always restore.
	*/
        wp_reset_postdata();

        return sprintf(
            '<ul role="list" itemscope itemtype="https://schema.org/ItemList" itemListOrder="https://schema.org/ItemListOrderAscending" %1$s>%2$s</ul>',
            $wrapper_attributes,
            $content
        );
    }
    /**
     * Registers the `core/post-template` block on the server.
     */
    function strap_register_block_core_post_template()
    {
        register_block_type_from_metadata(
            ABSPATH . WPINC . '/blocks/post-template',
            array(
                'render_callback' => 'strap_render_block_core_post_template',
            )
        );
    }
}

if (!function_exists('strap_render_block_core_latest_comments')) {
    remove_action('init', 'register_block_core_latest_comments');
    add_action('init', 'strap_register_block_core_latest_comments');

    function strap_render_block_core_latest_comments($attributes)
    {
        if ( isset( $attributes['displayExcerpt'] ) ) {
            $display_content = $attributes['displayExcerpt'] ? 'excerpt' : 'none';
        } else {
            $display_content = $attributes['displayContent'] ?? 'excerpt';
        }

        $comments = get_comments(
            apply_filters(
                'widget_comments_args',
                array(
                    'number'      => $attributes['commentsToShow'] ?? 5,
                    'status'      => 'approve',
                    'post_status' => 'publish',
                ),
                array()
            )
        );

        $display_avatar  = $attributes['displayAvatar'] ?? true;
        $display_date    = $attributes['displayDate'] ?? true;

        $list_items_markup = '';
        if ( ! empty( $comments ) ) {
            $post_ids = array_unique( wp_list_pluck( $comments, 'comment_post_ID' ) );
            _prime_post_caches( $post_ids, strpos( get_option( 'permalink_structure' ), '%category%' ), false );

            $counter = 1;
            foreach ( $comments as $comment ) {
                $comment_author_url = get_comment_author_url( $comment );
                $comment_author     = get_comment_author( $comment );
                $comment_link       = get_comment_link( $comment );
                $post_title         = get_the_title( $comment->comment_post_ID );

                if ( empty( $post_title ) ) {
                    $post_title = __('(no title)', 'systemstrap');
                }

                if ( empty( $comment_author_url ) && ! empty( $comment->user_id ) ) {
                    $comment_author_url = get_author_posts_url( $comment->user_id );
                }

                $list_items_markup .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
                $list_items_markup .= '<meta itemprop="position" content="' . esc_attr((string) $counter) . '" />';
                $list_items_markup .= '<article itemprop="item" itemscope itemtype="https://schema.org/Comment">';

                if ( $display_avatar ) {
                    $avatar = get_avatar( $comment, 40, '', $comment_author, array( 'class' => 'wp-block-latest-comments__comment-avatar' ) );
                    if ( $avatar ) {
                        $list_items_markup .= sprintf(
                            '<div class="wp-block-latest-comments__comment-avatar-wrapper">%1$s</div>',
                            $avatar
                        );
                    }
                }

                $list_items_markup .= '<div class="wp-block-latest-comments__comment-content-wrapper">';
                $list_items_markup .= '<div class="wp-block-latest-comments__comment-meta">';

                // Author Row Wrapper
                $list_items_markup .= '<div class="wp-block-latest-comments__comment-author-row">';
                $list_items_markup .= '<span class="wp-block-latest-comments__comment-author-person" itemprop="author" itemscope itemtype="https://schema.org/Person">';
                if ( $comment_author_url ) {
                    $list_items_markup .= sprintf(
                        '<a class="wp-block-latest-comments__comment-author" href="%1$s" itemprop="url"><span itemprop="name">%2$s</span></a>',
                        esc_url( $comment_author_url ),
                        esc_html( $comment_author )
                    );
                } else {
                    $list_items_markup .= sprintf(
                        '<span class="wp-block-latest-comments__comment-author"><span itemprop="name">%s</span></span>',
                        esc_html( $comment_author )
                    );
                }
                $list_items_markup .= '</span>';

                // "on Post Title"
                $list_items_markup .= '<span class="wp-block-latest-comments__comment-on"> ' . esc_html__( 'on', 'systemstrap' ) . ' </span>';
                $list_items_markup .= sprintf(
                    '<a class="wp-block-latest-comments__comment-link" href="%1$s" itemprop="url">%2$s</a>',
                    esc_url( $comment_link ),
                    esc_html( $post_title )
                );
                $list_items_markup .= '</div>'; // End Author Row

                // Date (now below author row)
                if ( $display_date ) {
                    $list_items_markup .= sprintf(
                        '<time itemprop="dateCreated" datetime="%1$s" class="wp-block-latest-comments__comment-date">%2$s</time>',
                        esc_attr( get_comment_date( 'c', $comment ) ),
                        esc_html( get_comment_date( '', $comment ) )
                    );
                }

                $list_items_markup .= '</div>'; // End meta

                if ( 'full' === $display_content ) {
                    $comment_text = get_comment_text( $comment );
                    if ( ! empty( $comment_text ) ) {
                        $list_items_markup .= sprintf(
                            '<div class="wp-block-latest-comments__comment-excerpt" itemprop="text">%1$s</div>',
                            wpautop( wp_kses_post( $comment_text ) )
                        );
                    }
                } elseif ( 'excerpt' === $display_content ) {
                    $excerpt = get_comment_excerpt( $comment );
                    if ( empty( $excerpt ) ) {
                        $excerpt = wp_trim_words( $comment->comment_content, 20 );
                    }
                    if ( ! empty( $excerpt ) ) {
                        $list_items_markup .= sprintf(
                            '<div class="wp-block-latest-comments__comment-excerpt" itemprop="text"><p>%1$s</p></div>',
                            esc_html( $excerpt )
                        );
                    }
                }

                $list_items_markup .= '</div>'; // End content wrapper
                $list_items_markup .= '</article></li>';
                $counter++;
            }
        }

        $classes = array('wp-block-latest-comments__list');
        if ( $display_avatar ) {
            $classes[] = 'has-avatars';
        }
        if ( $display_date ) {
            $classes[] = 'has-dates';
        }
        if ( 'none' !== $display_content ) {
            $classes[] = 'has-excerpts';
        }
        if ( empty( $comments ) ) {
            $classes[] = 'no-comments';
        }
        $wrapper_attributes = get_block_wrapper_attributes(array('class' => implode(' ', $classes)));

        if ( empty( $comments ) ) {
            return sprintf(
                '<div %1$s>%2$s</div>',
                $wrapper_attributes,
                esc_html__( 'No comments to show.', 'systemstrap' )
            );
        }

        return sprintf(
            '<ul role="list" itemscope itemtype="https://schema.org/ItemList" %1$s>%2$s</ul>',
            $wrapper_attributes,
            $list_items_markup
        );
    }

    function strap_register_block_core_latest_comments()
    {
        register_block_type_from_metadata(
            ABSPATH . WPINC . '/blocks/latest-comments',
            array(
                'render_callback' => 'strap_render_block_core_latest_comments',
            )
        );
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

            // Look for (123) inside list items and replace with badge span.
            $block_content = preg_replace(
                '/\(\s*(\d+)\s*\)/',
                '<span class="system-badge">$1</span>',
                $block_content
            );
        }

        if ( 'core/terms-query' === $block['blockName'] ) {
            $block_content = preg_replace(
                '/(<(?:div|p)\b[^>]*class="[^"]*wp-block-term-count[^"]*"[^>]*>)\(\s*(\d+)\s*\)(<\/(?:div|p)>)/',
                '<span class="system-badge">$2</span>',
                $block_content
            );
        }

        return $block_content;
    }
    add_filter( 'render_block', 'strap_render_block_widget_badges', 20, 2 );
}
