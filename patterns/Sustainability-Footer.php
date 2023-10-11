<?php
/**
 * Title: Sustainability Footer
 * Slug: variations/sustainability-footer
 * Description: Add a Footer With Logo, Columns and Copyright
 * Categories: footer, column
 * Keywords: footer
 * Block Types: core/template-part/footer
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3rem","left":"1rem","right":"1rem","top":"7rem"}},"color":{"background":"#ffecde"},"elements":{"link":{"color":{"text":"#202020"}}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-background has-link-color" style="background-color:#ffecde;padding-top:7rem;padding-right:1rem;padding-bottom:3rem;padding-left:1rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":343,"width":132,"height":40,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/sustainability-logo-default-footer-2x.png" alt="" class="wp-image-343" style="object-fit:cover;width:132px;height:40px" width="132" height="40"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"5rem","top":"4rem"},"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-top:4rem;padding-bottom:5rem"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","contentSize":"187px"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#343434"},"typography":{"fontSize":"2.2rem","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}}} -->
<h6 class="wp-block-heading has-text-align-center has-text-color" style="color:#343434;font-size:2.2rem;font-style:normal;font-weight:500;text-transform:capitalize"><?php printf( esc_html__( '%s', 'variations' ), __( 'Location', 'variations' ) ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#202020"},"typography":{"fontSize":"1.25rem"},"spacing":{"margin":{"top":"1.5em"}}}} -->
<p class="has-text-align-center has-text-color" style="color:#202020;margin-top:1.5em;font-size:1.25rem"><?php printf( esc_html__( '%s', 'variations' ), __( '123 Demo Street,<br>Brooklyn, NY 12345', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","contentSize":"187px"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#343434"},"typography":{"fontSize":"2.2rem","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}}} -->
<h6 class="wp-block-heading has-text-align-center has-text-color" style="color:#343434;font-size:2.2rem;font-style:normal;font-weight:500;text-transform:capitalize"><?php printf( esc_html__( '%s', 'variations' ), __( 'Contact', 'variations' ) ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#202020"},"typography":{"fontSize":"1.25rem","textDecoration":"none"},"spacing":{"margin":{"top":"1.25rem"}}}} -->
<p class="has-text-align-center has-text-color" style="color:#202020;margin-top:1.25rem;font-size:1.25rem;text-decoration:none"><a href="tel:" data-type="tel" data-id="tel:"><?php printf( esc_html__( '%s', 'variations' ), __( '(555) 555-5555', 'variations' ) ); ?></a><br><a href="mailto:#"><?php printf( esc_html__( '%s', 'variations' ), __( '1email@example.com', 'variations' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","contentSize":"139px"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#343434"},"typography":{"fontSize":"2.2rem","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}}} -->
<h6 class="wp-block-heading has-text-align-center has-text-color" style="color:#343434;font-size:2.2rem;font-style:normal;font-weight:500;text-transform:capitalize"><?php printf( esc_html__( '%s', 'variations' ), __( 'Follow', 'variations' ) ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#202020"},"typography":{"fontSize":"1.25rem","textDecoration":"none"},"spacing":{"margin":{"top":"1rem"}},"elements":{"link":{"color":{"text":"#ed6907"}}}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#202020;margin-top:1rem;font-size:1.25rem;text-decoration:none"><a href="#"><?php printf( esc_html__( '%s', 'variations' ), __( 'Instagram', 'variations' ) ); ?></a><br><a href="#"><?php printf( esc_html__( '%s', 'variations' ), __( 'Facebook', 'variations' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#202020"}}} -->
<p class="has-text-align-center has-text-color" style="color:#202020;font-size:1.25rem"><?php printf( esc_html__( '%s', 'variations' ), __( '© 2023 Company. All rights reserved.', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->