<?php
/**
 * Title: Header Absolute
 * Slug: patterns-fitness/header-absolute
 * Categories: header
 * Block Types: core/template-part/header
 * Description: A pattern for displaying the site header with an absolute positioning.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"className":"patterns-fitness-header at-pos at-z-idx","style":{"spacing":{"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default","fontSize":"x-small","layout":{"type":"constrained"}} -->
<div class="wp-block-group patterns-fitness-header at-pos at-z-idx has-default-color has-text-color has-link-color has-x-small-font-size">

	<!-- wp:template-part {"slug":"primary-header","align":"full"} /-->

</div>
<!-- /wp:group -->