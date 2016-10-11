<?php 

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// send headers with options if option checkbox is checked
add_action('send_headers','eazyHTTPHeader',1);
function eazyHTTPHeader() {
  
  //if x-frame checkbox is checked 
  if (get_option( 'eazyHTTPhead_checkbox_frame' ) === '1') {
    //use WP  x-frame options header
     send_frame_options_header();
  }

  //if X-XSS protection checkbox is checked 
  if (get_option( 'eazyHTTPhead_checkbox_xss' ) === '1') {
    //set X-XSS-Protection header 
    header("X-XSS-Protection: 1; mode=block;");
  }  

  //if 'X-Content-Type checkbox is checked
  if (get_option( 'eazyHTTPhead_checkbox_nosniff' ) === '1') {
    //use WP nosniff header
    send_nosniff_header();
  }

}