<?php
/**
 * Title: Fashion Hero
 * Slug: variations/fashion-hero
 * Description: Add a hero section
 * Categories: featured, banner
 * Keywords: hero, hero section
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion/fashion-banner.jpg","id":573,"dimRatio":0,"overlayColor":"contrast","focalPoint":{"x":0.94,"y":0},"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"tagName":"section","align":"full","layout":{"type":"constrained","contentSize":"px"}} -->
<section class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-573" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion/fashion-banner.jpg" style="object-position:94% 0%" data-object-fit="cover" data-object-position="94% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"typography":{"fontSize":"1.1rem","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group" style="font-size:1.1rem;font-style:normal;font-weight:400;line-height:1.5"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"400"},"color":{"text":"#525060"}}} -->
<h6 class="wp-block-heading has-text-align-center has-text-color" style="color:#525060;font-size:3rem;font-style:normal;font-weight:400"><?php printf( esc_html__( '%s', 'variations' ), __( 'We are', 'variations' ) ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"4.7rem","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"color":{"text":"#525060"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#525060;margin-top:0px;margin-bottom:0px;font-size:4.7rem;font-style:normal;font-weight:400;text-transform:uppercase"><?php printf( esc_html__( '%s', 'variations' ), __( 'Create Style', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}},"typography":{"fontSize":"1.1rem","lineHeight":"1.5"}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:3rem;margin-bottom:3rem;font-size:1.1rem;line-height:1.5"><!-- wp:button {"style":{"spacing":{"padding":{"left":"3.5rem","right":"3.5rem","top":"0.9rem","bottom":"0.9rem"}},"color":{"background":"#696778","text":"#fffffd"},"typography":{"fontSize":"1.1rem","lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:1.1rem;font-style:normal;font-weight:400;line-height:1.1"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:0px;color:#fffffd;background-color:#696778;padding-top:0.9rem;padding-right:3.5rem;padding-bottom:0.9rem;padding-left:3.5rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'SHOP NOW', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"231px"} -->
<div style="height:231px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></section>
<!-- /wp:cover -->