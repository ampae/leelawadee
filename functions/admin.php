<?php
/**
 * ampae functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ampae
 */

add_action("admin_enqueue_scripts", "admin_ampae_enqueue");
function admin_ampae_enqueue()
{
    wp_enqueue_script('ampae-admin', esc_url( get_template_directory_uri() ) . '/js/admin.js');
}
