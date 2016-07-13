<?php

/*
Plugin Name: Eazy HTTP Headers
Plugin URI: http://robjscott.com/wordpress/plugins/eazy-http-headers
Description:  Provides settings to activate two functions built into WordPress, send_frame_options_header() & send_nosniff_header(), allowing you to control HTTP Headers for X-Frame-Options & X-Content-Type-Options. 
Version: 1.0.0
Author: Rob Scott, LLC
Author URI: http://robjscott.com
Text Domain: ez-http-headers
License: GPLv2 or any later version
License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

//add settings
require_once(plugin_dir_path(__FILE__).'eazy-http-headers-settings.php');
//add action
require_once(plugin_dir_path(__FILE__).'eazy-http-headers-action.php');