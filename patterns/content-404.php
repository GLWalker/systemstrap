<?php

/**
 * Title: Content 404
 * Slug: systemstrap/content-404
 * Inserter: no
 */
?>
<!-- wp:group { "metadata":{"name":"<?php esc_attr_e('404 Content Pattern', 'systemstrap'); ?>"},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"> <!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
    <header class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> <!-- wp:heading {"textAlign":"center","level":1} -->
        <h1 class="wp-block-heading has-text-align-center "><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-bs-primary-color"><em>404:</em></mark> Page Not Found</h1> <!-- /wp:heading -->
    </header> <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> <!-- wp:media-text {"align":"","mediaLink":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/background-2560x1400.webp","mediaType":"image","imageFill":true} -->
        <div class="wp-block-media-text is-stacked-on-mobile is-image-fill">
            <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/background-2560x1400.webp);background-position:50% 50%"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/background-2560x1400.webp" alt="Not Found" /></figure>
            <div class="wp-block-media-text__content"> <!-- wp:heading {"level":2} -->
                <h2 class="wp-block-heading">Well this is puzzling, try searching or browsing the archives below.</h2> <!-- /wp:heading --> <!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search"} /--> <!-- wp:archives {"showPostCounts":true,"type":"yearly","className":"is-style-system-list"} /-->
            </div>
        </div> <!-- /wp:media-text -->
    </div> <!-- /wp:group -->

</div> <!-- /wp:group -->