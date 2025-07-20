<?php
/**
 * Title: Navigation Menu
 * Slug: patterns-fitness/navigation-menu
 * Description: A pattern for displaying the site menu.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:navigation {"align":"wide","style":{"typography":{"textTransform":"uppercase","fontSize":"12px","letterSpacing":"1px","fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} -->
    <!-- wp:home-link {"label":"<?php echo esc_html_x( 'Home', 'label', 'patterns-fitness' ); ?>"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-fitness' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'patterns-fitness' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-fitness' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-fitness' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->
