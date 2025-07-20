<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme reivew notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/Patterns_Fitness_Intro
 */

global $current_user;
?>
<div id='patterns-fitness-review-notice' class="notice updated patterns-fitness-review-notice at-p at-pos">
	<button class="patterns-fitness-rn-permanent-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-fitness' ); ?>
	</button>
	<p>
		<?php
		printf(
		/* Translators: %1$s current user display name. */
			esc_html__(
				'Howdy, %1$s! It seems that you have been using this theme for more than 15 days. We hope you are happy with everything that the theme has to offer. If you can spare a minute, please help us by leaving a review on WordPress.org. By spreading the love, we can continue to develop new amazing features in the future!',
				'patterns-fitness'
			),
			'<strong>' . esc_html( $current_user->display_name ) . '</strong>'
		);
		?>
	</p>

	<div class="links">
		<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-fitness" class="patterns-fitness-rn-temporary-close patterns-fitness-btn-primary button-primary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-thumbs-up"></span>
			<span><?php esc_html_e( 'Sure', 'patterns-fitness' ); ?></span>
		</a>

		<button class="patterns-fitness-rn-temporary-close patterns-fitness-btn-secondary button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-calendar"></span>
			<span><?php esc_html_e( 'Maybe later', 'patterns-fitness' ); ?></span>
		</button>

		<button class="patterns-fitness-rn-permanent-close patterns-fitness-btn-default button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-smiley"></span>
			<span><?php esc_html_e( 'I already did', 'patterns-fitness' ); ?></span>
		</button>

		<a href="<?php echo esc_url( 'https://patternswp.com/full-site-editing-fse-themes/patterns-fitness' ); ?>" class="patterns-fitness-rn-temporary-close button-secondary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-edit"></span>
			<span><?php esc_html_e( 'Got theme support question?', 'patterns-fitness' ); ?></span>
		</a>
	</div>
</div>
