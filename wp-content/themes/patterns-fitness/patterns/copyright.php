<?php
/**
 * Title: Copyright
 * Slug: patterns-fitness/copyright
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dynamic copyright text
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-quaternary-color has-text-color has-link-color has-x-small-font-size"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"patterns-fitness/copyright","args":{"key":"copyright"}}}},"placeholder":"<?php esc_attr_e( 'Dynamic copyright text', 'patterns-fitness' ); ?>"} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph  -->
<p><?php esc_html_e( '. All Rights Reserved', 'patterns-fitness' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
