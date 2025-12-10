<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       https://www.chiptuningreseller.com
 * @since      1.0.0
 *
 * @package    Ctr
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

if ( ! defined( 'CTR_OPT_PREFIX' ) ) {
	define('CTR_OPT_PREFIX', 'ctr_');
}

if ( ! defined( 'CTR_PLUGIN_FILE' ) ) {
	define( 'CTR_PLUGIN_FILE', __FILE__ );
}

/**
 * Helpers Class
 */
require_once dirname( CTR_PLUGIN_FILE ) . '/includes/class-ctr-helpers.php';
require_once dirname( CTR_PLUGIN_FILE ) . '/includes/ctr-core-functions.php';
$uninstall = false;
$ctr_upload_dir = wp_upload_dir()['basedir'] . '/ctr';


// Clear upload directory
if (is_dir($ctr_upload_dir)) {
	$ctrHelpers = new Ctr_Helpers();
	if($ctrHelpers->deleteDirectory($ctr_upload_dir)) {
		$uninstall = true;
	}
}

// Clear all the options in the DB
ctr_uninstall();

// Flush rewrite rules
flush_rewrite_rules();

// Delete the whole CTR database entry
global $wpdb;
$uninstall = $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}chiptuningreseller" );

return $uninstall;