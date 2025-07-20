<?php
/**
 * Title: No Search Result
 * Slug: patterns-fitness/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-fitness' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-fitness' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-fitness' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'patterns-fitness' ); ?>","buttonUseIcon":true} /-->
