<?php
/**
 * Title: Photography Image Text
 * Slug: variations/photography-image-text
 * Description: Add a Photography Image Text section
 * Categories: column
 * Keywords: image and text, image, text
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4.3rem","bottom":"4.3rem","left":"0","right":"0"},"blockGap":"1.7rem"},"dimensions":{"minHeight":"0px"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","wideSize":"1200px","contentSize":"1200px"}} -->
<div class="wp-block-group alignwide" style="border-style:none;border-width:0px;min-height:0px;padding-top:4.3rem;padding-right:0;padding-bottom:4.3rem;padding-left:0"><!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"right":"1rem","left":"1rem"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:1rem;padding-left:1rem;flex-basis:45%"><!-- wp:image {"align":"center","id":401,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photography/about.jpg" alt="" class="wp-image-401"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"1rem","left":"1rem"}}}} -->
<div class="wp-block-column" style="padding-right:1rem;padding-left:1rem"><!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem","left":"1rem","top":"1rem","bottom":"1rem"},"blockGap":"1.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"3.5rem"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:3.5rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'About Photographer', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php printf( esc_html__( '%s', 'variations' ), __( 'Duis pretium risus nec condimentum malesuada. Nunc euismod ex ante, nec vehicula ex rutrum vitae. Maecenas a gravida quam. Proin vulputate lacinia turpis eget mollis. Sed lacus odio, hendrerit tempus tincidunt non, lobortis sit amet arcu. Sed mi velit, elementum at gravida a, pretium vitae lacus. Donec libero purus, accumsan dignissim laoreet nec, rutrum eu quam. In pretium, ex eget iaculis iaculis, tortor arcu commodo ligula, et congue purus est nec magna.<br>Mauris nec ornare lacus. Vestibulum id eros suscipit, pharetra orci non, malesuada augue. Nam et semper massa. Integer a sapien ligula. Duis a velit eu lectus vehicula ultrices a at nulla. Phasellus convallis arcu lorem. Cras ullamcorper pretium consectetur.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"2.01rem","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:2.01rem;margin-bottom:0"><!-- wp:button {"style":{"spacing":{"padding":{"left":"3.2rem","right":"3.2rem","top":"0.8em","bottom":"0.8em"}},"color":{"background":"#fffffd","text":"#0e0e0e"},"typography":{"fontSize":"1.01em"},"border":{"radius":"30px","color":"#0e0e0e","width":"1px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:1.01em"><a class="wp-block-button__link has-text-color has-background has-border-color wp-element-button" style="border-color:#0e0e0e;border-width:1px;border-radius:30px;color:#0e0e0e;background-color:#fffffd;padding-top:0.8em;padding-right:3.2rem;padding-bottom:0.8em;padding-left:3.2rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'MORE ABOUT JENNIFER', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->