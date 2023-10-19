<?php
/**
 * Title: Fashion 2 Columns
 * Slug: variations/fashion-2-columns
 * Description: Add a Fashion 2 Columns section
 * Categories: text, column
 * Keywords: columns, categories
 */

?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"5.01rem","bottom":"5.01rem","left":"1rem","right":"1rem"},"margin":{"top":"0px"}},"color":{"text":"#3e3e3e"},"typography":{"fontSize":"1.13rem","fontStyle":"normal","fontWeight":"400","lineHeight":"1.4"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-group alignfull has-text-color" style="color:#3e3e3e;margin-top:0px;padding-top:5.01rem;padding-right:1rem;padding-bottom:5.01rem;padding-left:1rem;font-size:1.13rem;font-style:normal;font-weight:400;line-height:1.4"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"3rem","left":"2.5rem"},"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:0px"><!-- wp:column {"width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"align":"center","id":594,"width":"580px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion/fashion-new.jpg" alt="" class="wp-image-594" style="width:580px"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"color":{"text":"#525060"},"spacing":{"margin":{"top":"1.5rem"}}}} -->
<h5 class="wp-block-heading has-text-align-center has-text-color" style="color:#525060;margin-top:1.5rem;font-size:1.5rem;font-style:normal;font-weight:400;text-transform:uppercase"><?php printf( esc_html__( '%s', 'variations' ), __( 'New', 'variations' ) ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem"},"color":{"text":"#525060"},"spacing":{"margin":{"top":"1rem","bottom":"0px"}}}} -->
<p class="has-text-align-center has-text-color" style="color:#525060;margin-top:1rem;margin-bottom:0px;font-size:1.1rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Spring summer collection', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"align":"center","id":595,"width":"580px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion/fashion-unique.jpg" alt="" class="wp-image-595" style="width:580px"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"color":{"text":"#525060"},"spacing":{"margin":{"top":"1.5rem"}}}} -->
<h5 class="wp-block-heading has-text-align-center has-text-color" style="color:#525060;margin-top:1.5rem;font-size:1.5rem;font-style:normal;font-weight:400;text-transform:uppercase"><?php printf( esc_html__( '%s', 'variations' ), __( 'unique', 'variations' ) ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem"},"color":{"text":"#525060"},"spacing":{"margin":{"top":"1rem","bottom":"0px"}}}} -->
<p class="has-text-align-center has-text-color" style="color:#525060;margin-top:1rem;margin-bottom:0px;font-size:1.1rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'For every occasion to make you unique', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->