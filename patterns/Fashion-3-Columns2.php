<?php
/**
 * Title: Fashion 3 Columns 2
 * Slug: variations/fashion-3-columns2
 * Description: Add a Fashion 3 Columns section
 * Categories: text, column
 * Keywords: columns, category, social
 */

?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"4rem","left":"1rem","right":"1rem"}},"color":{"background":"#f6f3ee"}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<section class="wp-block-group alignfull has-background" style="background-color:#f6f3ee;padding-top:5rem;padding-right:1rem;padding-bottom:4rem;padding-left:1rem"><!-- wp:heading {"textAlign":"center","level":4,"style":{"color":{"text":"#525060"},"typography":{"textTransform":"uppercase","fontSize":"2rem","fontStyle":"normal","fontWeight":"400","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color" style="color:#525060;margin-bottom:2rem;font-size:2rem;font-style:normal;font-weight:400;line-height:1.2;text-transform:uppercase"><?php printf( esc_html__( '%s', 'variations' ), __( 'Follow Us on Instagram', 'variations' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2.5rem","left":"0rem"},"padding":{"right":"3%","left":"3%"}}}} -->
<div class="wp-block-columns" style="padding-right:3%;padding-left:3%"><!-- wp:column {"width":"","layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":627,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion/fashion-insta-01.jpg" alt="" class="wp-image-627" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":628,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion/fashion-insta-02.jpg" alt="" class="wp-image-628" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":629,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion/fashion-insta-03.jpg" alt="" class="wp-image-629" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->