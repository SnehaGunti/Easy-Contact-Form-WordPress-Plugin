<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for getting started notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/Patterns_Fitness_Intro
 */
?>
<div id="patterns-fitness-gsn" class="updated notice-info patterns-fitness-gsn at-pos">
	<button class="patterns-fitness-gsn-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-fitness' ); ?>
	</button>
	<div class="patterns-fitness-gsn-container at-flx at-gap at-p">
		<img class="patterns-fitness-gsn-screenshot at-w" src="<?php echo esc_url( PATTERNS_FITNESS_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Fitness', 'patterns-fitness' ); ?>" />
		<div class="patterns-fitness-gsn-notice">
			<h2>
				<?php
				printf(
					/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
					esc_html__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer, please make sure you visit our %2$swelcome page%3$s.', 'patterns-fitness' ),
					'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>',
					'<a href="' . esc_url( menu_page_url( PATTERNS_FITNESS_THEME_NAME, false ) ) . '">',
					'</a>'
				);
				?>
			</h2>
			<?php
			$plugin_names = patterns_fitness_get_plugin_names();
			if ( $plugin_names ) {
				?>
				<p>
					<?php
					$plugin_count = count( explode( ', ', $plugin_names ) );
					printf(
						/* translators: %s: singular/plular . */
						esc_html__( 'Clicking the button below will install and activate the following %s:', 'patterns-fitness' ),
						$plugin_count > 1 ? esc_html__( 'plugins', 'patterns-fitness' ) : esc_html__( 'plugin', 'patterns-fitness' )
					);
					echo ' ';
					echo esc_html( $plugin_names );
					?>
				</p>
				<?php
			}
			?>
			<button class="patterns-fitness-btn-primary button button-primary button-hero patterns-fitness-install-plugins">
				<?php esc_html_e( 'Get started with Patterns Fitness', 'patterns-fitness' ); ?>
			</button>
		</div>
	</div>
</div>
