<?php
/**
 * Title: Header Default
 * Slug: variations/header-default
 * Description: Header with site title and navigation
 * Categories: header
 * Keywords: header, nav, site logo
 * Block Types: core/template-part/header
 * Inserter: true
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"contrast","contentPosition":"center center","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"base","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-base-color has-text-color" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:site-title {"level":0} /-->

<!-- wp:navigation {"ref":4,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->