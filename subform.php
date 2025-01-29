<?php 

/*
Plugin Name: Sub Form
Description: This is a plugin to display subcription form
Version: 1.0.0
Author: Wisdom
*/


// Add Shortcode
function subform() {

    // Get the current user's display name
    $user_display_name = wp_get_current_user()->user_firstname;

    // Get the blog name
    $blog_name = get_bloginfo( 'name' );

    // Build the form output
    $output = '<p>Hey ' . esc_html($user_display_name) . ', welcome to ' . esc_html($blog_name) . '! You can subscribe to our newsletter here:</p>';
    $output .= '<form action="/thank-you">';
    $output .= '<label for="email">Enter your email:</label>';
    $output .= '<input type="email" id="email" name="email">';
    $output .= '<input type="submit" value="Submit">';
    $output .= '</form>';

    // Return the output instead of echo
    return $output;
}
add_shortcode( 'subscriptionform', 'subform' );
