<?php
/**
 * Title: Nature Call To Action
 * Slug: variations/nature-call-to-action
 * Description: Add a Call to action section
 * Categories: featured
 * Keywords: Call to action
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/call-to-action/Call-to-action.jpg","id":198,"dimRatio":0,"isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-198" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/call-to-action/Call-to-action.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"2.01rem","left":"2.01rem","top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:2.01rem;padding-bottom:0;padding-left:2.01rem"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"2.26rem"},"color":{"text":"#2c541d"}}} -->
<h2 class="wp-block-heading has-text-color" style="color:#2c541d;font-size:2.26rem;font-style:normal;font-weight:500"><?php echo esc_html_x( 'Talk To Us', 'sample content for call to action heading', 'variations' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Have any questions? We are always open to talk about your business, new projects, creative opportunities and how we can help you.', 'sample content for call to action', 'variations' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","style":{"spacing":{"padding":{"left":"50px","right":"50px","top":"9px","bottom":"9px"}},"color":{"background":"#74a84a"},"typography":{"fontSize":"1.13rem"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:1.13rem"><a class="wp-block-button__link has-base-color has-text-color has-background wp-element-button" style="background-color:#74a84a;padding-top:9px;padding-right:50px;padding-bottom:9px;padding-left:50px"><?php echo esc_html_x( 'Get In Touch', 'sample content for call to action button', 'variations' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->