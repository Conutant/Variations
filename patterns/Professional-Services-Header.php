<?php
/**
 * Title: Professional Services Header 
 * Slug: variations/professional-services-header
 * Description: Header with logo, navigation and button
 * Categories: header
 * Keywords: header, nav, site logo
 * Block Types: core/template-part/header
 */

?>

<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"left":"1rem","right":"1rem"},"margin":{"top":"0","bottom":"0"}},"color":{"text":"#1f1f1f"},"typography":{"fontSize":"2.6rem","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-text-color" style="color:#1f1f1f;margin-top:0;margin-bottom:0;padding-right:1rem;padding-left:1rem;font-size:2.6rem;font-style:normal;font-weight:400;line-height:1.5"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"3.13rem","bottom":"1rem","left":"3.25rem","right":"3.25rem"},"blockGap":{"top":"1rem","left":"1.62rem"}}}} -->
<div class="wp-block-columns" style="padding-top:3.13rem;padding-right:3.25rem;padding-bottom:1rem;padding-left:3.25rem"><!-- wp:column {"verticalAlignment":"center","width":"85%","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:85%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":96,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:navigation {"ref":374,"customTextColor":"#1f1f1f","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"1.25rem","fontStyle":"normal","fontWeight":"400","lineHeight":"1.8"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"1.5rem"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"205px","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","justifyContent":"center","contentSize":""}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:205px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"179px"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap","orientation":"horizontal"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"border":{"radius":"0px","color":"#cccccc","width":"1px"},"typography":{"textTransform":"none","fontSize":"1.4rem","lineHeight":"1.5","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"0px","right":"0px","top":"1.1rem","bottom":"1.1rem"}},"color":{"text":"#1f1f1f"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline" style="font-size:1.4rem;font-style:normal;font-weight:600;line-height:1.5;text-transform:none"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" style="border-color:#cccccc;border-width:1px;border-radius:0px;color:#1f1f1f;padding-top:1.1rem;padding-right:0px;padding-bottom:1.1rem;padding-left:0px"><?php printf( esc_html__( '%s', 'variations' ), __( 'Contact Us', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->