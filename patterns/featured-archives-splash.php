<?php
/**
 * Title: Featured Archives Splash
 * Slug: systemstrap/featured-archives-splash
 * Categories: systemstrap, featured
 */
?>


<!-- wp:group {"metadata":{"name":"Featured Archives Splash"},"align":"full","className":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->

<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

 <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"display-5"} -->
 <h3 class="wp-block-heading has-text-align-center has-display-5-font-size">The <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-bs-primary-color">Largest</mark> Online Library </h3>
 <!-- /wp:heading -->

 <!-- wp:group {"className":"alert alert-primary wow animate__animated animate__pulse","layout":{"type":"default"}} -->
 <div class="wp-block-group alert alert-primary wow animate__animated animate__pulse"><!-- wp:paragraph -->
 <p><strong>Never miss out!</strong> The archives are always open so you can always catch up on any past entries.</p>
 <!-- /wp:paragraph -->
 </div>
 <!-- /wp:group -->

 <!-- wp:columns -->
 <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
 <div class="wp-block-column" style="flex-basis:66.66%">

 <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"img-fluid wow animate__animated animate__fadeInLeft is-style-"} -->
 <figure class="wp-block-image size-large img-fluid wow animate__animated animate__fadeInLeft is-style-"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/blog-1200x800.webp" alt="searching online" /></figure>
 <!-- /wp:image -->

 </div>
 <!-- /wp:column -->

 <!-- wp:column {"width":"33.33%"} -->
 <div class="wp-block-column" style="flex-basis:33.33%">
 <!-- wp:archives {"showPostCounts":true,"type":"yearly","className":"is-style-system-list"} /-->

 <!-- wp:search {"className":"animate__zoomIn animate__delay-1s is-layout-flex","label":"Search","showLabel":false,"placeholder":"Search Anything","buttonText":"Search","buttonUseIcon":true} /-->
 </div>
 <!-- /wp:column -->
 </div>
 <!-- /wp:columns -->

</div>
<!-- /wp:group -->
