<?php
/**
 * Title: Mental Health Text Button
 * Slug: variations/mental-health-text-button
 * Description: Add a Text Button section
 * Categories: text
 * Keywords: text, button
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5.1rem","bottom":"5.1rem","left":"1rem","right":"1rem"},"margin":{"top":"0","bottom":"0"},"blockGap":"0rem"},"color":{"background":"#fffffd"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fffffd;margin-top:0;margin-bottom:0;padding-top:5.1rem;padding-right:1rem;padding-bottom:5.1rem;padding-left:1rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3.2rem","fontStyle":"normal","fontWeight":"700"},"color":{"text":"#f9af36"}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#f9af36;font-size:3.2rem;font-style:normal;font-weight:700"><?php printf( esc_html__( '%s', 'variations' ), __( 'Our Philosophy', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.3rem"},"spacing":{"margin":{"top":"2rem"}}}} -->
<p class="has-text-align-center" style="margin-top:2rem;font-size:1.3rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum maximus orci, auctor interdum libero feugiat at. Pellentesque vehicula pellentsque sem eget fermentum. Curabitur dolor massa, posuere at facilisis eget, gravida vel erat. Integer ante massa, mollis<br>in lacus in, venenatis suscipit nulla. Quisque facilisis libero a pharetra laoreet.<br>Curabitur mi felis, consectetur in sollicitudin quis, hendrerit sit amet ipsum. Sed interdum fringilla interdum.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button {"style":{"color":{"background":"#f8a101","text":"#fffffd"},"border":{"width":"0px","style":"none","radius":"0px"},"spacing":{"padding":{"left":"2.2rem","right":"2.2rem"}},"typography":{"fontSize":"1.1rem"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:1.1rem"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;color:#fffffd;background-color:#f8a101;padding-right:2.2rem;padding-left:2.2rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'LEARN MORE', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->