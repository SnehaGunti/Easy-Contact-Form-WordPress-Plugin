<?php
/**
 * Title: Section Title 1
 * Slug: patterns-fitness/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'welcome to PatternsWP', 'patterns-fitness' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'We Can Give A Shape Of Your Body Here!', 'patterns-fitness' ); ?></h2>
<!-- /wp:heading -->
 
 <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis ', 'patterns-fitness' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
