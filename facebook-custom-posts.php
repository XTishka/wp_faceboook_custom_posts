<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/XTishka
 * @since             1.0.0
 * @package           Facebook_Custom_Posts
 *
 * @wordpress-plugin
 * Plugin Name:       Custom post to Facebook
 * Plugin URI:        https://github.com/XTishka/wp_custom_posts_to_facebook
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Takhir Berdyiev
 * Author URI:        https://github.com/XTishka
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       facebook-custom-posts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FACEBOOK_CUSTOM_POSTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-facebook-custom-posts-activator.php
 */
function activate_facebook_custom_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-facebook-custom-posts-activator.php';
	Facebook_Custom_Posts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-facebook-custom-posts-deactivator.php
 */
function deactivate_facebook_custom_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-facebook-custom-posts-deactivator.php';
	Facebook_Custom_Posts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_facebook_custom_posts' );
register_deactivation_hook( __FILE__, 'deactivate_facebook_custom_posts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-facebook-custom-posts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_facebook_custom_posts() {

	$plugin = new Facebook_Custom_Posts();
	$plugin->run();

}
run_facebook_custom_posts();
