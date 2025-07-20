<?php
/**
 * Title: Featured Section 13
 * Slug: patterns-fitness/featured-section-13
 * Categories: call-to-actions, contact
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">

    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
    <div class="wp-block-column is-vertically-aligned-center">
        
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"lineHeight":"1"}},"textColor":"default","fontSize":"x-large"} -->
    <h3 class="wp-block-heading has-text-align-left has-default-color has-text-color has-x-large-font-size" style="line-height:1"><?php esc_html_e( 'Claim Your Gym Membership Today!', 'patterns-fitness' ); ?></h3>
    <!-- /wp:heading -->

    <!-- wp:spacer {"height":"var:preset|spacing|10"} -->
    <div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"}},"textColor":"quaternary","fontSize":"small"} -->
    <p class="has-text-align-left has-quaternary-color has-text-color has-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis ', 'patterns-fitness' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-fill","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}}} -->
    <div class="wp-block-button is-style-fill" style="letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'Register Now', 'patterns-fitness' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-column is-vertically-aligned-center">
        
    <!-- wp:image {"width":"auto","height":"550px","aspectRatio":"3/4","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"patterns-fitness-image-style-1"} -->
    <figure class="wp-block-image size-full is-resized patterns-fitness-image-style-1">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-12.png" style="aspect-ratio:3/4;object-fit:contain;width:auto;height:550px"/></figure>
        <!-- /wp:image -->
    </div>
    
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

