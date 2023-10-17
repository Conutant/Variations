<?php
/**
 * Title: Consulting 3 Columns
 * Slug: variations/consulting-3-columns
 * Description: Add a Consulting 3 Columns section
 * Categories: text, column
 * Keywords: columns, services
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="min-height:0px;margin-top:0px;margin-bottom:0px;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns {"style":{"color":{"text":"#141414"},"spacing":{"padding":{"top":"4rem","bottom":"6rem","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"1rem","left":"1rem"}}},"fontFamily":"inter"} -->
<div class="wp-block-columns has-text-color has-inter-font-family" style="color:#141414;margin-top:0px;margin-bottom:0px;padding-top:4rem;padding-right:0px;padding-bottom:6rem;padding-left:0px"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"right":"1rem","top":"2rem","bottom":"0rem","left":"0px"},"blockGap":"2rem"}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-right:1rem;padding-bottom:0rem;padding-left:0px;flex-basis:30%"><!-- wp:heading {"style":{"typography":{"fontSize":"2.3rem"}}} -->
<h2 class="wp-block-heading" style="font-size:2.3rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'All you need to keep your business booming', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.01rem"}}} -->
<p style="font-size:1.01rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Consultz is a leading consulting firm dedicated to helping businesses achieve their goals and navigate complex challenges. With a team of seasoned experts and a data-driven approach', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"3rem","bottom":"0px"}}}} -->
<div class="wp-block-buttons" style="margin-top:3rem;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"left":"2.2rem","right":"2.2rem","top":"0.8rem","bottom":"0.8rem"}},"color":{"background":"#000001","text":"#fffffd"},"typography":{"fontSize":"1.1rem"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:1.1rem"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;color:#fffffd;background-color:#000001;padding-top:0.8rem;padding-right:2.2rem;padding-bottom:0.8rem;padding-left:2.2rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'All Services', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"2rem","bottom":"0rem","left":"0px","right":"0px"},"blockGap":"0px"}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-right:0px;padding-bottom:0rem;padding-left:0px;flex-basis:40%"><!-- wp:image {"align":"center","id":144,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/consulting-second-section.jpg" alt="" class="wp-image-144" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"2em","bottom":"0px","left":"1rem","right":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:2em;padding-right:0px;padding-bottom:0px;padding-left:1rem;flex-basis:30%"><!-- wp:heading {"level":5,"style":{"color":{"text":"#141414"},"typography":{"textTransform":"none","fontSize":"1.1rem"}}} -->
<h5 class="wp-block-heading has-text-color" style="color:#141414;font-size:1.1rem;text-transform:none"><strong><?php printf( esc_html__( '%s', 'variations' ), __( 'Empowering Businesses through Strategic Consulting', 'variations' ) ); ?></strong></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#141414"},"typography":{"fontSize":"1.01rem"}}} -->
<p class="has-text-color" style="color:#141414;font-size:1.01rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Management Consulting<br><br>Strategy Consulting<br><br>IT Consulting', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"color":{"background":"#d0cbc2"},"spacing":{"margin":{"top":"1rem","bottom":"1rem"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:1rem;margin-bottom:1rem;background-color:#d0cbc2;color:#d0cbc2"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.01rem"}}} -->
<p style="font-size:1.01rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Online marketing<br><br>Marketing and Sales Analysis<br><br>Operations Consulting', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->