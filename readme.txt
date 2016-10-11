=== Eazy HTTP Headers ===
Contributors: r0bsc0tt
Tags: HTTP Headers, nosniff, x-frame, x-content, security, headers
Requires at least: 4.5
Tested up to: 4.6.1
Stable tag: trunk
License: GPLv2 or any later version
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Provides settings to activate three HTTP header settings for X-Frame-Options, X-XSS Protection & X-Content-Type-Options.

== Description ==
Eazy HTTP Headers provides three check boxes for settings on the general settings page. 
Two of the check boxes, activate two functions built into WordPress, send_frame_options_header() & send_nosniff_header(), while the other sets a header for X-XSS Protection.
This allows you to control your sites HTTP Headers for X-Frame-Options & X-Content-Type-Options using functions built into WordPress functions. 

== Installation ==
1.  Install and activate Eazy HTTP Headers.
2.  Navigate to the General Settings page in the admin.
3.  Look for the Eazy HTTP Settings section towards the bottom. 
4.  Check the boxes for the corresponding headers you want to set. 

== Frequently Asked Questions ==
= How do I know if my sites headers changes? =
You can request your sites HTTP Headers by looking at the response to an HTTP request. 
securityheaders.io provides an easy to use interface to verify your sites headers. 


== Screenshots ==
1. The Eazy HTTP Headers Settings section on the general settings page

== Changelog ==
= 1.1.0 =
* Added option for X-XSS Protection
* Added inline documentation

= 1.0.0 =
* Initial version of plugin.

== Upgrade Notice ==
= 1.1.0 =
* Updated to include option for X-XSS Protection

= 1.0.0 =
* Initial version of plugin.