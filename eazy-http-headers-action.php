<?php 

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

function eazyHTTPHeader() {
  //if x-frame options checkbox is checked 
  if (get_option( 'eazyHTTPhead_checkbox_frame' ) === '1') {
    //use WP  x-frame options header
     send_frame_options_header();
  }
  //if 'X-Content-Type checkbox is checked
  if (get_option( 'eazyHTTPhead_checkbox_nosniff' ) === '1') {
    //use WP nosniff header
    send_nosniff_header();
  }
}

add_action('send_headers','eazyHTTPHeader',1);
