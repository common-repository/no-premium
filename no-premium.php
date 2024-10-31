<?php

/*
Plugin Name: No Premium
Plugin URI:
Description: Remove "Get Premium" buttons and prompts
Author: FBMKRS
Version: 0.0.3
*/

function no_premium() {
    wp_enqueue_style('no-premium', plugins_url('no-premium.css', __FILE__));
}

add_action('admin_enqueue_scripts', 'no_premium');
add_action('login_enqueue_scripts', 'no_premium');

?>
