<?php
/**
 * Title: Mental Health Footer
 * Slug: variations/mental-health-footer
 * Description: Add a Footer With Logo, navigation and Copyright
 * Categories: footer
 * Keywords: footer
 * Block Types: core/template-part/footer
 */

?>
<!-- wp:group {"style":{"color":{"background":"#fffbf0"},"spacing":{"padding":{"bottom":"2rem","right":"1rem","left":"1rem"}}},"layout":{"type":"constrained","contentSize":"1700px"}} -->
<div class="wp-block-group has-background" style="background-color:#fffbf0;padding-right:1rem;padding-bottom:2rem;padding-left:1rem"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:site-logo /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem"}}} -->
<p style="font-size:1.1rem"><?php printf( esc_html__( '%s', 'variations' ), __( '123 Demo Street<br>Copenhagen, Denmark', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem"}}} -->
<p style="font-size:1.1rem"><?php printf( esc_html__( '%s %s', 'variations' ), '<a href="tel:' . __( '5555555555', 'variations' ) . '">' . __( '(555) 555-5555', 'variations' ) . '</a><br>', '<a href="mailto:' . __( 'email@example.com', 'variations' ) . '">' . __( 'email@example.com', 'variations' ) . '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem"}}} -->
<p style="font-size:1.1rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Copyright © 2023 Antonino.<br>All rights reserved.', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->