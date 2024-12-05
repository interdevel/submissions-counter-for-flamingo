=== Submissions Counter for Flamingo ===

Contributors: interdevel  
Tags: counter, flamingo, cf7, shortcode
Requires at least: 5.3  
Tested up to: 6.7 
Requires PHP: 7.4  
Stable tag: 1.0.0  
License: GPL v2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html  

Provides a shortcode to display the number of form submissions stored by Flamingo & Contact Form 7.

== Description ==

The plugin **Submissions Counter for Flamingo** provides a simple shortcode `[flamingo_counter]` that you can use in any page or post to display how many submissions are stored in forms created with Contact Form 7.

Allowed parameters (can be combined):

* `form_title`: The name of the form for which you want to display the number of submissions.
* `html_tag`: The HTML tag to wrap the returned number.

Use cases with allowed parameters:

* `[flamingo_counter]`: Display the total number of submissions stored in the Flamingo database, i.e. the sum of submissions from all the forms you have on your site.
* `[flamingo_counter form_title="Contact Form 1"]`: Display the number of submissions stored in the Flamingo database for the form named "Contact Form 1".
* `[flamingo_counter form_title="Contact Form 1" html_tag="span"]`: Display the number of submissions stored in the Flamingo database for the form named "Contact Form 1", wrapped with the `<span>` HTML tag.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/submissions-counter-for-flamingo` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the shortcode as any other WordPress shortcode.

== Frequently Asked Questions ==

= How do I use this plugin? =

The plugin provides the shortcode `[flamingo_counter]` that can be used in any page or post.

== Changelog ==

= 1.0.0 =
* Initial release of the _Submissions Counter for Flamingo_ plugin.

== Upgrade Notice ==

= 1.0.0 =
Initial release.
