<?php
/**
 * Title: Core Block Showcase
 * Slug: systemstrap/core-block-showcase
 * Categories: featured, systemstrap
 * Description: A large WordPress-native showcase of default Core blocks, organized as complete editable units.
 * Keywords: blocks, showcase, typography, media, widgets, query
 */
?>
<!-- wp:group {"metadata":{"name":"Core Block Showcase"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">

	<!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<header class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":1,"fontSize":"display-5"} -->
		<h1 class="wp-block-heading has-display-5-font-size">SystemStrap Core Block Showcase</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size">A practical tour of default WordPress blocks, arranged as complete editable units rather than a pile of disconnected controls.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>Use this pattern to inspect typography, colors, spacing, media, widgets, queries, comments, navigation, and layout behavior across the active SystemStrap style variation.</p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
			<!-- wp:navigation-link {"label":"Overview","url":"#overview","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Typography","url":"#typography","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Buttons","url":"#buttons","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Media","url":"#media","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Layout","url":"#layout","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Widgets","url":"#widgets","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Queries","url":"#queries","kind":"custom"} /-->
			<!-- wp:navigation-submenu {"label":"More","url":"#more","kind":"custom"} -->
				<!-- wp:navigation-link {"label":"Tables","url":"#tables","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Details","url":"#details","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Comments","url":"#comments","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
			<!-- /wp:navigation-submenu -->
		<!-- /wp:navigation -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"anchor":"overview","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="overview" class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Overview</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">WordPress first</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Every section uses Core blocks in combinations that make sense to an editor. Blocks that belong together stay together.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Variation ready</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Switch Global Styles to test how the same content responds to different palettes, font stacks, borders, shadows, and spacing choices.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Safe to edit</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Duplicate rows, apply SystemStrap block styles, replace media, or remove sections that are not relevant to a particular demonstration site.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"anchor":"typography","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="typography" class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Typography and Writing</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>This section provides a complete writing sample with headings, paragraphs, inline formatting, lists, quotations, code, verse, and footnotes. It is the quickest place to judge whether a style variation can carry real editorial content.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":1} -->
				<h1 class="wp-block-heading">Heading One</h1>
				<!-- /wp:heading -->
				<!-- wp:heading -->
				<h2 class="wp-block-heading">Heading Two</h2>
				<!-- /wp:heading -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Heading Three</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Heading Four</h4>
				<!-- /wp:heading -->
				<!-- wp:heading {"level":5} -->
				<h5 class="wp-block-heading">Heading Five</h5>
				<!-- /wp:heading -->
				<!-- wp:heading {"level":6} -->
				<h6 class="wp-block-heading">Heading Six</h6>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">A comfortable reading sample</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"dropCap":true} -->
		<p class="has-drop-cap">Good typography does not announce every decision. It gives the reader a clear entrance, a steady path through the page, and enough variation to understand where one idea ends and the next begins.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>This paragraph contains <strong>strong text</strong>, <em>emphasized text</em>, <s>deleted text</s>, <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-warning-color">highlighted text</mark>, <code>inline_code()</code>, and a <a href="#buttons">working anchor link</a>. These details should remain readable without disturbing the paragraph rhythm.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Unordered list</h4>
				<!-- /wp:heading -->
				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li>Clear hierarchy</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Comfortable line length</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Predictable spacing
						<!-- wp:list -->
						<ul class="wp-block-list">
							<!-- wp:list-item --><li>Nested items remain distinct</li><!-- /wp:list-item -->
							<!-- wp:list-item --><li>Markers align consistently</li><!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Ordered list</h4>
				<!-- /wp:heading -->
				<!-- wp:list {"ordered":true} -->
				<ol class="wp-block-list">
					<!-- wp:list-item --><li>Start with semantic content.</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Apply the smallest useful style.</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Test it at narrow and wide viewports.</li><!-- /wp:list-item -->
				</ol>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:quote -->
		<blockquote class="wp-block-quote"><!-- wp:paragraph -->
		<p>A theme should support the story without standing in front of it.</p>
		<!-- /wp:paragraph --><cite>SystemStrap design principle</cite></blockquote>
		<!-- /wp:quote -->

		<!-- wp:pullquote -->
		<figure class="wp-block-pullquote"><blockquote><p>Default blocks. Endless possibilities.</p><cite>SystemStrap</cite></blockquote></figure>
		<!-- /wp:pullquote -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Preformatted</h4>
				<!-- /wp:heading -->
				<!-- wp:preformatted -->
				<pre class="wp-block-preformatted">The editor preserves
    spacing and line breaks
        exactly as written.</pre>
				<!-- /wp:preformatted -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Code</h4>
				<!-- /wp:heading -->
				<!-- wp:code -->
				<pre class="wp-block-code"><code>add_action( 'after_setup_theme', 'systemstrap_setup' );</code></pre>
				<!-- /wp:code -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:verse -->
		<pre class="wp-block-verse">Build with the blocks that WordPress provides;
extend only where the project decides.</pre>
		<!-- /wp:verse -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">Small text is useful for captions, notes, legal copy, and metadata. It should remain readable and should not become an excuse to hide important information.</p>
		<!-- /wp:paragraph -->

		<!-- wp:footnotes -->
		<ol class="wp-block-footnotes"><li id="footnote-1">Footnotes provide supporting context without interrupting the main reading flow. <a href="#overview">Return to overview</a>.</li></ol>
		<!-- /wp:footnotes -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"anchor":"buttons","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="buttons" class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Buttons and Navigation</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>The first row uses the semantic colors supplied by the active style variation. Duplicate the row to test SystemStrap button styles without rebuilding the content.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","style":{"color":{"text":"var(--wp--preset--color--primary-text)"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-text-color has-background wp-element-button" href="#buttons" style="color:var(--wp--preset--color--primary-text)">Primary</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"secondary","style":{"color":{"text":"var(--wp--preset--color--secondary-text)"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-secondary-background-color has-text-color has-background wp-element-button" href="#buttons" style="color:var(--wp--preset--color--secondary-text)">Secondary</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"success","style":{"color":{"text":"var(--wp--preset--color--success-text)"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-success-background-color has-text-color has-background wp-element-button" href="#buttons" style="color:var(--wp--preset--color--success-text)">Success</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"info","style":{"color":{"text":"var(--wp--preset--color--info-text)"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-info-background-color has-text-color has-background wp-element-button" href="#buttons" style="color:var(--wp--preset--color--info-text)">Info</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"warning","style":{"color":{"text":"var(--wp--preset--color--warning-text)"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-warning-background-color has-text-color has-background wp-element-button" href="#buttons" style="color:var(--wp--preset--color--warning-text)">Warning</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"danger","style":{"color":{"text":"var(--wp--preset--color--danger-text)"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-danger-background-color has-text-color has-background wp-element-button" href="#buttons" style="color:var(--wp--preset--color--danger-text)">Danger</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"light","style":{"color":{"text":"var(--wp--preset--color--light-text)"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-light-background-color has-text-color has-background wp-element-button" href="#buttons" style="color:var(--wp--preset--color--light-text)">Light</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"dark","style":{"color":{"text":"var(--wp--preset--color--dark-text)"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-dark-background-color has-text-color has-background wp-element-button" href="#buttons" style="color:var(--wp--preset--color--dark-text)">Dark</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Navigation dropdown</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>This separate Navigation block contains one submenu so it can receive a button-style variation without changing the primary showcase navigation.</p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"left"}} -->
			<!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
				<!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
			<!-- /wp:navigation-submenu -->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"anchor":"media","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="media" class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Media</h2>
		<!-- /wp:heading -->

		<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/hero-1280x720.webp" alt="A wide demonstration image"/><figcaption class="wp-element-caption">Image block with a caption and no link.</figcaption></figure>
		<!-- /wp:image -->

		<!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"large"} -->
		<figure class="wp-block-gallery has-nested-images columns-3 is-cropped">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/blog-1200x800.webp" alt="Editorial demonstration image"/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/banner-1200x400.webp" alt="Banner demonstration image"/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/thumbnail-300x300.webp" alt="Square demonstration image"/></figure>
			<!-- /wp:image -->
		</figure>
		<!-- /wp:gallery -->

		<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/background-2560x1400.webp","dimRatio":60,"overlayColor":"primary","minHeight":420,"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover alignwide" style="min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/background-2560x1400.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			<!-- wp:heading {"textAlign":"center","level":3,"textColor":"base"} -->
			<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color">Cover blocks combine media and content</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"base"} -->
			<p class="has-text-align-center has-base-color has-text-color">Use a complete message with a heading, supporting copy, and a clear action.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="#layout">Explore layout blocks</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div></div>
		<!-- /wp:cover -->

		<!-- wp:media-text {"mediaPosition":"left","mediaType":"image","mediaUrl":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/female-360x480.webp","mediaWidth":35,"verticalAlignment":"center"} -->
		<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:35% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/female-360x480.webp" alt="Portrait demonstration image"/></figure><div class="wp-block-media-text__content">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Media and text belong together</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>This block is useful for profiles, services, case studies, product introductions, and any story where an image needs a clear relationship to supporting content.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#widgets">Continue to widgets</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div></div>
		<!-- /wp:media-text -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Audio</h3>
				<!-- /wp:heading -->
				<!-- wp:audio -->
				<figure class="wp-block-audio"><audio controls src=""></audio><figcaption class="wp-element-caption">Select an audio file to test the player.</figcaption></figure>
				<!-- /wp:audio -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Video</h3>
				<!-- /wp:heading -->
				<!-- wp:video -->
				<figure class="wp-block-video"><video controls poster="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/hero-1280x720.webp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/media/pexels-digital-projection-of-abstract-geometrical-lines-3129671.mp4"></video><figcaption class="wp-element-caption">Video block with a local theme asset.</figcaption></figure>
				<!-- /wp:video -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:file {"href":"<?php echo esc_url( get_template_directory_uri() ); ?>/readme.txt","displayPreview":false} -->
		<div class="wp-block-file"><a id="wp-block-file--media-showcase" href="<?php echo esc_url( get_template_directory_uri() ); ?>/readme.txt">SystemStrap readme.txt</a><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/readme.txt" class="wp-block-file__button wp-element-button" download>Download</a></div>
		<!-- /wp:file -->

		<!-- wp:embed {"url":"https://www.youtube.com/watch?v=JHHEVn4tQbI","type":"video","providerNameSlug":"youtube","responsive":true} -->
		<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube"><div class="wp-block-embed__wrapper">
		https://www.youtube.com/watch?v=JHHEVn4tQbI
		</div></figure>
		<!-- /wp:embed -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"anchor":"layout","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="layout" class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Layout and Design</h2>
		<!-- /wp:heading -->

		<!-- wp:group {"backgroundColor":"secondary-bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-secondary-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">A complete Group section</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Groups provide a dependable surface for related content. This one includes padding, a background, constrained inner content, and a button row.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#tables">View the table</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Column one</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>A balanced column for supporting information, features, services, or compact editorial content.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Column two</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Columns should collapse predictably and preserve readable spacing at narrow viewports.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Column three</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>The content remains ordinary WordPress blocks, so editors can rearrange or replace each part.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph --><p><strong>Row layout:</strong> items share one horizontal lane.</p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><a href="#overview">Back to overview</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"32px"} -->
		<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:separator {"className":"is-style-dots"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"anchor":"tables","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="tables" class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Tables</h2>
		<!-- /wp:heading -->

		<!-- wp:table {"hasFixedLayout":true} -->
		<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>Block family</th><th>Primary use</th><th>Editor context</th><th>Status</th></tr></thead><tbody><tr><td>Text</td><td>Writing and hierarchy</td><td>Posts and pages</td><td>Ready</td></tr><tr><td>Media</td><td>Images, audio, and video</td><td>Posts, pages, templates</td><td>Ready</td></tr><tr><td>Design</td><td>Layout and visual structure</td><td>All editors</td><td>Ready</td></tr><tr><td>Theme</td><td>Dynamic site content</td><td>Site Editor and queries</td><td>Contextual</td></tr></tbody><tfoot><tr><td colspan="4">Core blocks remain editable and portable across style variations.</td></tr></tfoot></table><figcaption class="wp-element-caption">A complete table with header, body, footer, and caption.</figcaption></figure>
		<!-- /wp:table -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"anchor":"details","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="details" class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Details and Accordion</h2>
		<!-- /wp:heading -->

		<!-- wp:details -->
		<details class="wp-block-details"><summary>What makes a useful block showcase?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
		<p>A useful showcase uses realistic content, preserves complete component relationships, and gives editors enough material to judge typography, spacing, interaction, and responsive behavior.</p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:accordion -->
		<div class="wp-block-accordion">
			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle" aria-expanded="false"><span class="wp-block-accordion-heading__toggle-title">How should style variations be tested?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
				<!-- /wp:accordion-heading -->
				<!-- wp:accordion-panel -->
				<div class="wp-block-accordion-panel"><!-- wp:paragraph -->
				<p>Test the same content under every variation so color, type, border, and spacing differences can be compared without changing the underlying page.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->
			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle" aria-expanded="false"><span class="wp-block-accordion-heading__toggle-title">Why keep each unit complete?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
				<!-- /wp:accordion-heading -->
				<!-- wp:accordion-panel -->
				<div class="wp-block-accordion-panel"><!-- wp:paragraph -->
				<p>Parent and child blocks often share layout, context, and interaction behavior. Testing them together reveals problems that isolated child blocks cannot show.</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->
		</div>
		<!-- /wp:accordion -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"anchor":"widgets","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="widgets" class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Widgets</h2>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search this site","showLabel":true,"placeholder":"Search posts and pages…","buttonText":"Search","buttonUseIcon":false} /-->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Archives</h3><!-- /wp:heading -->
				<!-- wp:archives {"showPostCounts":true} /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Terms</h3><!-- /wp:heading -->
				<!-- wp:categories {"showPostCounts":true,"showHierarchy":true} /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Tag cloud</h3><!-- /wp:heading -->
				<!-- wp:tag-cloud {"numberOfTags":15,"showTagCounts":true} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Latest posts</h3><!-- /wp:heading -->
				<!-- wp:latest-posts {"postsToShow":5,"displayPostDate":true,"displayAuthor":true,"displayPostContent":true,"excerptLength":18} /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Latest comments</h3><!-- /wp:heading -->
				<!-- wp:latest-comments {"commentsToShow":5,"displayAvatar":true,"displayDate":true,"displayExcerpt":true} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Calendar</h3><!-- /wp:heading -->
				<!-- wp:calendar /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">RSS feed</h3><!-- /wp:heading -->
				<!-- wp:rss {"feedURL":"https://wordpress.org/news/feed/","itemsToShow":4,"displayExcerpt":true,"displayDate":true,"displayAuthor":false} /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Account and social</h3><!-- /wp:heading -->
				<!-- wp:loginout {"displayLoginAsForm":false} /-->
				<!-- wp:social-links {"showLabels":true,"className":"is-style-logos-only"} -->
				<ul class="wp-block-social-links has-visible-labels is-style-logos-only">
					<!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /-->
					<!-- wp:social-link {"url":"https://github.com/","service":"github"} /-->
					<!-- wp:social-link {"url":"mailto:hello@example.com","service":"mail"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:shortcode -->
		[example_shortcode]
		<!-- /wp:shortcode -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"anchor":"queries","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="queries" class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Query Loop</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>This unit renders live post data from the current site. Featured images, titles, dates, terms, excerpts, read-more links, empty results, and pagination remain in their proper Query Loop context.</p>
		<!-- /wp:paragraph -->

		<!-- wp:query {"queryId":71,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
					<!-- wp:post-title {"isLink":true,"level":3} /-->
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-date /-->
						<!-- wp:post-terms {"term":"category"} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:post-excerpt {"moreText":"Continue reading"} /-->
					<!-- wp:read-more {"content":"Read the full post"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:paragraph -->
				<p>No posts matched this query. Publish a post or adjust the Query Loop settings.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->

			<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous {"label":"Previous"} /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next {"label":"Next"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"anchor":"comments","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div id="comments" class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Comments</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>The Comments block is context-sensitive. On a post with comments enabled, this complete unit displays its title, comment template, pagination, and reply form together.</p>
		<!-- /wp:paragraph -->

		<!-- wp:comments -->
		<div class="wp-block-comments">
			<!-- wp:comments-title {"level":3} /-->
			<!-- wp:comment-template -->
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"48px"} -->
					<div class="wp-block-column" style="flex-basis:48px"><!-- wp:avatar {"size":48} /--></div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:comment-author-name /-->
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-date /-->
							<!-- wp:comment-edit-link /-->
						</div>
						<!-- /wp:group -->
						<!-- wp:comment-content /-->
						<!-- wp:comment-reply-link /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			<!-- /wp:comment-template -->
			<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:comments-pagination-previous /-->
				<!-- wp:comments-pagination-numbers /-->
				<!-- wp:comments-pagination-next /-->
			<!-- /wp:comments-pagination -->
			<!-- wp:post-comments-form /-->
		</div>
		<!-- /wp:comments -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"anchor":"more","align":"wide","backgroundColor":"tertiary-bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
	<div id="more" class="wp-block-group alignwide has-tertiary-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Continue building</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>This pattern intentionally stops at Core behavior. Duplicate any complete unit, apply SystemStrap styles, and use the result as a variation test bed or documentation page.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#overview">Back to top</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
