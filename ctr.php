<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.chiptuningreseller.com
 * @since             1.0.0
 * @package           Ctr
 *
 * @wordpress-plugin
 * Plugin Name:       ChiptuningReseller V6
 * Plugin URI:        https://www.chiptuningreseller.com
 * Description:       Show vehicles with chiptuning gains in your website. Powered by the ChiptuningReseller platform.
 * Version:           6.4.7
 * Author:            M Bos
 * Author URI:        https://www.chiptuningreseller.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ctr
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
defined( 'WPINC' ) || exit;
defined( 'ABSPATH' ) || exit;

/** Require the Plugin Update Checker from Yhanis  */
require 'plugin-update-checker/plugin-update-checker.php';

/*** Update Checker Settings **/
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://chiptuningreseller.com/plugin_update/v6/update.json',
	__FILE__,
	'chiptuningreseller'
);

if ( ! defined( 'CTR_PLUGIN_FILE' ) ) {
	define( 'CTR_PLUGIN_FILE', __FILE__ );
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CTR_VERSION', '6.4.7' );


if ( ! class_exists( 'ChiptuningReseller', false ) ) {
	include_once dirname( CTR_PLUGIN_FILE ) . '/includes/class-ctr.php';
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ctr-activator.php
 */
function activate_ctr() {
	require_once dirname( CTR_PLUGIN_FILE ) . '/includes/class-ctr-activator.php';
	Ctr_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ctr-deactivator.php
 */
function deactivate_ctr() {
	require_once dirname( CTR_PLUGIN_FILE ) . '/includes/class-ctr-deactivator.php';
	Ctr_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ctr' );
register_deactivation_hook( __FILE__, 'deactivate_ctr' );


/**
 * Returns the main instance of CTR.
 *
 * @since  1.0
 * @return CTR
 */
function CTR() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	return CTR::instance();
}


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ctr() {

	$plugin = new Ctr();
	$plugin->run();

}
run_ctr();
