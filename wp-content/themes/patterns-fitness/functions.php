<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Fitness functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Fitness
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_FITNESS_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_FITNESS_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_FITNESS_VERSION', '1.0.0' );
define( 'PATTERNS_FITNESS_THEME_NAME', 'patterns-fitness' );
define( 'PATTERNS_FITNESS_OPTION_NAME', 'patterns-fitness' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_FITNESS_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_fitness_run() {
	new Patterns_Fitness();
}
patterns_fitness_run();
