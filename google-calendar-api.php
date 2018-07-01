<?php
/*
Plugin Name: Google Calendar API
Description: [Require Coding] Provide function to call Google Calendar API
Plugin URI: https://github.com/hrsetyono/google-calendar-api
Author: Henner Setyono
Author URI: http://github.com/hrsetyono
Version: 1.0.0
*/

// If this file is called directly, abort.
if( !defined( 'WPINC' ) ) { die; }
define( 'GCAL_API_VERSION', '1.0.0' );
define( 'GCAL_API_DIR', plugins_url( '', __FILE__ ) );


new GCal_API();
class GCal_API {
	function __construct() {
		register_activation_hook( __FILE__, array($this, 'activation_hook') );
		register_deactivation_hook( __FILE__, array($this, 'deactivation_hook') );

		$this->load();
	}

	/*
		Load the required dependencies for BOTH Admin and Public pages.
	*/
	function load() {
	}

	/*
	  The code that runs during plugin activation.
	*/
	function activation_hook() {

	}

	/*
	  The code that runs during plugin deactivation.
	*/
	function deactivation_hook() {

	}
}
