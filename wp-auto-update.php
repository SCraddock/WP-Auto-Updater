<?php
/**
 * Plugin Name: WP Auto Update
 * Description: Little Plugin to enable auto updates for plugins and themes, incase users don't.
 * Author:      Sam Craddock
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Basic security, prevents file from being loaded directly.
defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );

function mu_orbital9147820371_auto_updates() {

	add_filter( 'allow_dev_auto_core_updates', '__return_true' );           // Enable development updates 
	add_filter( 'allow_minor_auto_core_updates', '__return_true' );         // Enable minor updates
	add_filter( 'allow_major_auto_core_updates', '__return_true' );         // Enable major updates

	/* Auto Updates for all plugins */
	add_filter( 'auto_update_plugin', '__return_true' );

	/* Auto Updates for all Themes */
	add_filter( 'auto_update_theme', '__return_false' );

}


add_action( 'muplugins_loaded', 'mu_orbital9147820371_auto_updates' );


