<?php
/**
 * Title:404
 * Slug: patterns-fitness/hidden-404
 * Inserter: no
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>


<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg","dimRatio":80,"overlayColor":"base","isUserOverlayColor":true,"minHeight":70,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group">
    
    
<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"xx-large"} -->
<h1 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Ooops!', 'patterns-fitness' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'This page could not be found.', 'patterns-fitness' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'We can\'t find the page you\'re looking for. Check out our Help Center or head back to home', 'patterns-fitness' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Help Center', 'patterns-fitness' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"accent","textColor":"default","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-default-color has-accent-background-color has-text-color has-background wp-element-button"href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'patterns-fitness' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</main>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
