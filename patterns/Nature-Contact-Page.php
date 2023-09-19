<?php
/**
 * Title: Nature Contact Page
 * Slug: variations/nature-contact
 * Description: Add a Contact Page template
 * Categories: contactpage
 * Keywords: contact page, contact us, contact
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( 'https://markomaksym.com.ua/variations/images/about/About-banner-1.jpg' ); ?>","id":270,"dimRatio":0,"focalPoint":{"x":0.5,"y":1},"minHeight":500,"minHeightUnit":"px","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-270" alt="" src="<?php echo esc_url( 'https://markomaksym.com.ua/variations/images/about/About-banner-1.jpg' ); ?>" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-title {"style":{"color":{"text":"#2c541d"},"typography":{"fontSize":"6rem"}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","wideSize":"900px","contentSize":"900px"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0;flex-basis:33.33%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php printf( esc_html__( '%s', 'variations' ), __( 'Contact', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:media-text {"mediaId":333,"mediaType":"image","mediaWidth":15,"isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} -->
<div class="wp-block-media-text has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:15% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( 'https://markomaksym.com.ua/variations/images/contact/phone-solid.png' ); ?>" alt="" class="wp-image-333 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…"} -->
<p>(310) 736-8445</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaId":334,"mediaType":"image","mediaWidth":15,"isStackedOnMobile":false} -->
<div class="wp-block-media-text" style="grid-template-columns:15% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( 'https://markomaksym.com.ua/variations/images/contact/envelope-solid.png' ); ?>" alt="" class="wp-image-334 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","fontSize":"small"} -->
<p class="has-small-font-size"><?php printf( esc_html__( '%s', 'variations' ), __( 'example@gmail.com', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaId":335,"mediaType":"image","mediaWidth":15,"isStackedOnMobile":false} -->
<div class="wp-block-media-text" style="grid-template-columns:15% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( 'https://markomaksym.com.ua/variations/images/contact/location-pin-solid.png' ); ?>" alt="" class="wp-image-335 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","fontSize":"small"} -->
<p class="has-small-font-size"><?php printf( esc_html__( '%s', 'variations' ), __( '2727 Beach Rd.<br>Malibu, CA 90264', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p><strong><?php printf( esc_html__( '%s', 'variations' ), __( 'Follow Us:', 'variations' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","customIconBackgroundColor":"#74a84a","iconBackgroundColorValue":"#74a84a","style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"wordpress"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php printf( esc_html__( '%s', 'variations' ), __( 'Let\'s Get in Touch', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p><?php printf( esc_html__( '%s', 'variations' ), __( 'This is where you put in your contact form.  You can download a plugin like contact form 7 then insert the shortcode.', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->