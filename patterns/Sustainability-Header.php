<?php
/**
 * Title: Sustainability Header 
 * Slug: variations/sustainability-header
 * Description: Header with navigation, logo and button
 * Categories: header
 * Keywords: header, nav, site logo
 * Block Types: core/template-part/header
 */

?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"color":{"text":"#fffffd"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-text-color" style="color:#fffffd;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:0px"><!-- wp:group {"layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":167,"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"1.3rem"}}} /-->

<!-- wp:site-logo {"width":126} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"style":{"border":{"radius":"0px","color":"#fffffd","width":"1px"},"typography":{"textTransform":"none","fontSize":"1.3rem"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1rem","bottom":"1rem"}}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:1.3rem;text-transform:none"><a class="wp-block-button__link has-border-color wp-element-button" style="border-color:#fffffd;border-width:1px;border-radius:0px;padding-top:1rem;padding-right:2.5rem;padding-bottom:1rem;padding-left:2.5rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Book a Consultation', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->