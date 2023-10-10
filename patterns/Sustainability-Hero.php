<?php
/**
 * Title: Sustainability Hero
 * Slug: variations/sustainability-hero
 * Description: Add a hero section
 * Categories: featured, banner
 * Keywords: hero, hero section
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banners/sustainability-hero.jpg","id":185,"dimRatio":0,"overlayColor":"contrast","minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"layout":{"type":"constrained","contentSize":"px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:3rem;padding-bottom:3rem"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-185" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banners/sustainability-hero.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"700px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="min-height:700px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"5.9rem","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"1.1rem"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color" style="margin-bottom:1.1rem;font-size:5.9rem;font-style:normal;font-weight:400;line-height:1.1"><?php printf( esc_html__( '%s', 'variations' ), __( 'Dare To Be Innovative<br>Care About Sustainability', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"1.5rem"},"color":{"text":"#fffffd"}}} -->
<p class="has-text-align-left has-text-color" style="color:#fffffd;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:1.5rem;font-style:normal;font-weight:400"><?php printf( esc_html__( '%s', 'variations' ), __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"0","margin":{"top":"2.2rem","bottom":"0rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2.2rem;margin-bottom:0rem"><!-- wp:button {"textColor":"base","style":{"spacing":{"padding":{"left":"5.4rem","right":"5.4rem","top":"1rem","bottom":"1rem"}},"color":{"background":"#ed6907"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.11rem"},"border":{"radius":"0px","color":"#ed6907","width":"1px"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:1.11rem;font-style:normal;font-weight:500"><a class="wp-block-button__link has-base-color has-text-color has-background has-border-color wp-element-button" style="border-color:#ed6907;border-width:1px;border-radius:0px;background-color:#ed6907;padding-top:1rem;padding-right:5.4rem;padding-bottom:1rem;padding-left:5.4rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'LEARN MORE', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->