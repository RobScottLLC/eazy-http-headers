<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

 // Add eazy http settings section to general options page
 function eazyHTTPhead_settings_init() {
  // Add the section
  add_settings_section(
    'eazy_http_settings',
    __('Eazy HTTP Headers Settings', 'ez-http-headers'),
    'eazy_http_settings_callback_function',
    'general'
  );
  
  // Add the fields
  add_settings_field(
    'eazyHTTPhead_checkbox_frame',
    __('X-Frame-Options', 'ez-http-headers'),
    'eazyHTTPhead_frame_callback',
    'general',
    'eazy_http_settings'
  );
  
  add_settings_field(
    'eazyHTTPhead_checkbox_nosniff',
    __('X-Content-Type-Options', 'ez-http-headers'),
    'eazyHTTPhead_nosniff_callback',
    'general',
    'eazy_http_settings'
  );

  // Register the settings
  register_setting( 'general', 'eazyHTTPhead_checkbox_frame' );
  register_setting( 'general', 'eazyHTTPhead_checkbox_nosniff' );  
 } 
 
 add_action( 'admin_init', 'eazyHTTPhead_settings_init' );
 
  
 // Settings section callback
 function eazy_http_settings_callback_function() {
  _e('<p>Check the box to apply the corresponding setting.</p>', 'ez-http-headers');
  //echo '<p>Check the box to apply the corresponding setting.</p>';
 }
 

 // Setting fields callback
 function eazyHTTPhead_frame_callback() {
  _e('<input name="eazyHTTPhead_checkbox_frame" id="eazyHTTPhead_checkbox_frame" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'eazyHTTPhead_checkbox_frame' ), false ) . ' /> "SAMEORIGIN"', 'ez-http-headers');
  //echo '<input name="eazyHTTPhead_checkbox_frame" id="eazyHTTPhead_checkbox_frame" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'eazyHTTPhead_checkbox_frame' ), false ) . ' /> "SAMEORIGIN"';
 }

function eazyHTTPhead_nosniff_callback() {
  _e('<input name="eazyHTTPhead_checkbox_nosniff" id="eazyHTTPhead_checkbox_nosniff" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'eazyHTTPhead_checkbox_nosniff' ), false ) . ' /> "nosniff"', 'ez-http-headers');
  //echo '<input name="eazyHTTPhead_checkbox_nosniff" id="eazyHTTPhead_checkbox_nosniff" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'eazyHTTPhead_checkbox_nosniff' ), false ) . ' /> "nosniff"';
 }