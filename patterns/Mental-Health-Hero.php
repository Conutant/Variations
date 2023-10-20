<?php
/**
 * Title: Mental Health Hero
 * Slug: variations/mental-health-hero
 * Description: Add a hero section
 * Categories: featured, banner
 * Keywords: hero, hero section
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignwide" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:heading {"textAlign":"center","align":"full","style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"700"},"color":{"text":"#f9af36"}}} -->
<h2 class="wp-block-heading alignfull has-text-align-center has-text-color" style="color:#f9af36;font-size:3rem;font-style:normal;font-weight:700"><?php printf( esc_html__( '%s', 'variations' ), __( 'Warm Welcome to Healing Souls', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9af36"},"elements":{"link":{"color":{"text":"#f9af36"}}},"typography":{"fontSize":"1.1rem"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#f9af36;font-size:1.1rem"><a href="#"><?php printf( esc_html__( '%s', 'variations' ), __( 'BOOK A CLASS', 'variations' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mental-health/hero.jpg","id":487,"dimRatio":0,"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-487" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mental-health/hero.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->