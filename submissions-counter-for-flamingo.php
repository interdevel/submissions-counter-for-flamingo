<?php
/**
 * Plugin Name: Submissions Counter for Flamingo
 * Description: A shortcode to show the number of form submissions stored by Flamingo & Contact Form 7.
 * Version: 1.0.1
 * Author: Luis Molina
 * Tags: counter, flamingo, cf7, shortcode
 * License: GPLv2 or later
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Returns the number of submissions stored by Flamingo for one form
 */
function fsc_count_flamingo_submissions($atts) {

    // Shortcode attributes
    $atts = shortcode_atts(
        array(
            'form_title' => '', // Form title (optional)
            'html_tag'   => '', // HTML tag to wrap the number (optional)
        ),
        $atts
    );

    $form_title = sanitize_text_field($atts['form_title']);
    $q = false;

    if ( ! empty($form_title) ) {

        // Count submissions for a specific form
        $count = new WP_Query(array(
            'post_type' => 'flamingo_inbound',
            'tax_query' => array(
                array(
                    'taxonomy' => 'flamingo_inbound_channel',
                    'field'    => 'name',
                    'terms'    => $form_title,
                ),
            ),
            'fields' => 'ids', // Just count
        ));

        $q = $count->found_posts ?: 0;

    } else {

        // Count all submissions
        $count = wp_count_posts('flamingo_inbound');
        $q = $count->publish ?: 0;

    }

    if (false !== $q) {
        $htmltag = sanitize_text_field($atts['html_tag']);
        if ( empty($htmltag)) {
            return esc_html($q);
        } else {
            return wp_kses_post("<$htmltag class=\"fsc-count\">$q</$htmltag>");
        }
    }

}
add_shortcode('flamingo_count', 'fsc_count_flamingo_submissions');

