<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-fitness/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Hero content"},"align":"wide","layout":{"type":"constrained","contentSize":"","justifyContent":"center","wideSize":""}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"x-small"} -->
            <p class="has-text-align-center has-x-small-font-size"
                style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Find Your Energy', 'patterns-fitness' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"700"}},"fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"
                style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Energize Your Life with Our Fitness Center', 'patterns-fitness' ); ?>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:spacer {"height":"var:preset|spacing|10"} -->
            <div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"fontSize":"medium"} -->
            <p class="has-text-align-center has-medium-font-size" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><?php esc_html_e( 'We offer as well hardcore strength machines, curve treadmills, boxing studio, TRX, and spinning.', 'patterns-fitness' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
            <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-fill","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}}} -->
                <div class="wp-block-button is-style-fill" style="letter-spacing:1px;text-transform:uppercase"><a
                        class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore More', 'patterns-fitness' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
<!-- /wp:group -->