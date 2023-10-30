<?php
/**
 * Title: Style Header
 * Slug: variations/style-header
 * Description: Header with Site title, navigation and button
 * Categories: header
 * Keywords: header, nav, site title
 * Block Types: core/template-part/header
 */

?>

<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"left":"1rem","right":"1rem","top":"2rem","bottom":"2rem"},"margin":{"top":"0","bottom":"0"}},"color":{"text":"#1f1f1f"},"typography":{"fontSize":"2.59rem","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-text-color" style="color:#1f1f1f;margin-top:0;margin-bottom:0;padding-top:2rem;padding-right:1rem;padding-bottom:2rem;padding-left:1rem;font-size:2.59rem;font-style:normal;font-weight:400;line-height:1.5"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"full","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem","left":"1rem","right":"1rem"},"blockGap":{"top":"1rem","left":"0rem"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center is-not-stacked-on-mobile" style="padding-top:0rem;padding-right:1rem;padding-bottom:0rem;padding-left:1rem"><!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%"><!-- wp:group {"style":{"typography":{"lineHeight":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="line-height:0"><!-- wp:site-title {"level":2,"style":{"color":{"text":"#525060"},"typography":{"fontSize":"2rem","textTransform":"uppercase"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"customTextColor":"#525060","icon":"menu","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"1rem","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5","textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"1.5rem"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","justifyContent":"right","contentSize":""}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"300px","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap","orientation":"horizontal"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px","width":"0px","style":"none"},"typography":{"textTransform":"none","fontSize":"1.1rem","lineHeight":"1.5","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.2rem","bottom":"0.2rem"}},"color":{"text":"#1f1f1f"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:1.1rem;font-style:normal;font-weight:600;line-height:1.5;text-transform:none"><a class="wp-block-button__link has-text-color wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;color:#1f1f1f;padding-top:0.2rem;padding-right:1rem;padding-bottom:0.2rem;padding-left:1rem"><img class="wp-image-577" style="width: 28px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/fashion-shopping-bag.svg" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->