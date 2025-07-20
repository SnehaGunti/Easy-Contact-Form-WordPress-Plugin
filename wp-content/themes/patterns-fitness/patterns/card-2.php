<?php
/**
 * Title: Card 2
 * Slug: patterns-fitness/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"overlayColor":"secondary","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"heading":{"color":{"text":"var:preset|color|default"}}},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;line-height:1.4;text-transform:uppercase"><?php esc_html_e( 'Body Shape', 'patterns-fitness' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-large-font-size" style="line-height:1"><?php esc_html_e( 'Crossfit', 'patterns-fitness' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
<p class="has-text-align-left has-default-color has-text-color has-link-color has-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem', 'patterns-fitness' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.7","fontStyle":"normal","fontWeight":"700","fontSize":"13px","textTransform":"uppercase","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default"} -->
<p class="has-text-align-left pwp-txt-dec-non has-default-color has-text-color has-link-color" style="margin-bottom:0px;font-size:13px;font-style:normal;font-weight:700;letter-spacing:1px;line-height:1.7;text-transform:uppercase"><a href="#"><?php esc_html_e( 'Read More', 'patterns-fitness' ); ?></a></p>
<!-- /wp:paragraph -->

 <!-- wp:image {"width":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-7.png" style="object-fit:contain;width:16px"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
