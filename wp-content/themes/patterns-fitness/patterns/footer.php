<?php
/**
 * Title: Footer
 * Slug: patterns-fitness/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

    <!-- wp:pattern {"slug":"patterns-fitness/featured-section-13"} /-->

    <!-- wp:group {"align":"full","backgroundColor":"secondary","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-secondary-background-color has-background">
        <!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"accent"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-top has-accent-background-color has-background"
            style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%">
                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"color":{"text":"#ffffff80"}},"fontSize":"x-small"} -->
                <h6 class="wp-block-heading has-text-color has-x-small-font-size"
                    style="color:#ffffff80;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Contact Us', 'patterns-fitness' ); ?></h6>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"large"} -->
                    <p class="pwp-txt-dec-non has-default-color has-text-color has-link-color has-large-font-size"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-fitness' ); ?>
                    </a></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
                    <p class="pwp-txt-dec-non has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-fitness' ); ?>
                        </a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"color":{"text":"#ffffff80"}},"fontSize":"x-small"} -->
                    <h6 class="wp-block-heading has-text-color has-x-small-font-size"
                        style="color:#ffffff80;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Follow Us', 'patterns-fitness' ); ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:25px">
                        <!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
                        <ul
                            class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
                            <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%">
                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"color":{"text":"#ffffff80"}},"fontSize":"x-small"} -->
                <h6 class="wp-block-heading has-text-color has-x-small-font-size"
                    style="color:#ffffff80;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Our Locations', 'patterns-fitness' ); ?></h6>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"default"} -->
                    <h5 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'New York', 'patterns-fitness' ); ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default","fontSize":"small"} -->
                    <p class="has-default-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-fitness' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"default"} -->
                    <h5 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Los Angeles', 'patterns-fitness' ); ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default","fontSize":"small"} -->
                    <p class="has-default-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-fitness' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%">
                <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"color":{"text":"#ffffff80"}},"fontSize":"x-small"} -->
                <h6 class="wp-block-heading has-text-color has-x-small-font-size"
                    style="color:#ffffff80;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Working Hours', 'patterns-fitness' ); ?></h6>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"default"} -->
                    <h5 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Monday - Friday', 'patterns-fitness' ); ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
                        <p class="has-default-color has-text-color has-link-color"><?php esc_html_e( 'Our doors are open', 'patterns-fitness' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
                        <p class="has-default-color has-text-color has-link-color"><?php esc_html_e( '07:00 - 22:00', 'patterns-fitness' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"default"} -->
                    <h5 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Weekends', 'patterns-fitness' ); ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
                        <p class="has-default-color has-text-color has-link-color"><?php esc_html_e( 'Our doors are open', 'patterns-fitness' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
                        <p class="has-default-color has-text-color has-link-color"><?php esc_html_e( '07:00 - 22:00', 'patterns-fitness' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->



<!-- wp:group {"align":"full","backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"
        style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"> 

    <!-- wp:navigation {"textColor":"quaternary","overlayMenu":"never","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Condition', 'patterns-fitness' ); ?>","url":"#"} /-->

        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'patterns-fitness' ); ?>","url":"#"} /-->

        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'patterns-fitness' ); ?>","url":"#"} /-->

        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Careers', 'patterns-fitness' ); ?>","url":"#"} /-->
    <!-- /wp:navigation -->

    <!-- wp:pattern {"slug":"patterns-fitness/copyright"} /--></div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-fitness/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
