<?php
/**
 * Title: Card 5
 * Slug: patterns-fitness/card-5
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|80"}},"border":{"radius":"5px"}},"backgroundColor":"secondary","textColor":"default"} -->
<div class="wp-block-columns has-default-color has-secondary-background-color has-text-color has-background has-link-color"
    style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-radius:5px">
            <!-- wp:heading {"textAlign":"left","level":5,"align":"wide","fontSize":"large"} -->
            <h5 class="wp-block-heading alignwide has-text-align-left has-large-font-size"><?php esc_html_e( 'Beginners Plan', 'patterns-fitness' ); ?></h5>
            <!-- /wp:heading -->

            <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
            <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.6"}},"fontSize":"small"} -->
            <p class="has-text-align-left has-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'patterns-fitness' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
            <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"background":"#0000004f"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
            <div class="wp-block-group has-background"
                style="background-color:#0000004f;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"lineHeight":"0.7"}},"fontSize":"x-large"} -->
                <h4 class="wp-block-heading has-text-align-left has-x-large-font-size" style="line-height:0.7"><?php esc_html_e( '$99', 'patterns-fitness' ); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e( '/ Mo', 'patterns-fitness' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

  <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column">
    <!-- wp:list {"className":"is-style-checkmark-list"} -->
        <ul class="wp-block-list is-style-checkmark-list"><!-- wp:list-item -->
            <li><?php esc_html_e( 'Nutrition program', 'patterns-fitness' ); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php esc_html_e( 'Get 8x Lesson Per Month', 'patterns-fitness' ); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php esc_html_e( '10x Personal Training Session', 'patterns-fitness' ); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php esc_html_e( 'Group sessions with beginners', 'patterns-fitness' ); ?></li>
            <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
        <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
        <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"typography":{"textTransform":"uppercase"}}} -->
            <div class="wp-block-button is-style-fill" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Purchase Now', 'patterns-fitness' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->