<?php
/**
 * Title: Header Style 3
 * Slug: variations/header-style3
 * Description: Header with slogan, button, site title and navigation
 * Categories: header
 * Keywords: header, nav, site title
 * Block Types: core/template-part/header
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|15","bottom":"var:preset|spacing|15"}}},"backgroundColor":"tertiary","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-tertiary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--15);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--15);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php printf( esc_html__( '%s', 'variations' ), __( 'Got any book recommendations?', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"contrast","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button"><?php printf( esc_html__( '%s', 'variations' ), __( 'Get In Touch', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"secondary","textColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"fontSize":"large"} /-->

<!-- wp:navigation {"textColor":"base","overlayBackgroundColor":"secondary","overlayTextColor":"base","layout":{"type":"flex","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"20px"}},"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->