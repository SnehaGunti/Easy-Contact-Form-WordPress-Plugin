<?php
/**
 * Title: Archive Page Header
 * Slug: patterns-fitness/list-archive-header
 * Categories: header
 * Block Types: core/template-part/list-archive-header
 * Description: Layout template for displaying the header of an archive page.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","hasParallax":true,"dimRatio":90,"overlayColor":"accent","minHeight":70,"minHeightUnit":"vh","contentPosition":"center center","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-90 has-background-dim"></span><div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg)"></div>
<div class="wp-block-cover__inner-container">
  <!-- wp:heading {"metadata":{"bindings":{"content":{"source":"patterns-fitness/archive-title","args":{"key":"archive-title"}}}}, "textAlign":"center","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-text-align-center has-default-color has-text-color has-xx-large-font-size" style="text-transform:capitalize"></h1>
			<!-- /wp:heading -->
</div>
</div>
<!-- /wp:cover -->
