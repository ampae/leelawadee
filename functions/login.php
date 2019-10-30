<?php
/**
 * ampae functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ampae
**/

function change_wp_login_title()
{
    return get_bloginfo('name');
}
add_filter('login_headertext', 'change_wp_login_title');


function ampae_loginURL()
{
    return get_site_url();
}
add_filter('login_headerurl', 'ampae_loginURL');

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('square-large', 300, 300, true); // name, width, height, crop
    add_filter('image_size_names_choose', 'ampae_sq_th');
}

function ampae_sq_th($sizes)
{
    $addsizes = array(
        "square-large" => __('Large square image', 'leelawadee')
    );
    $newsizes = array_merge($sizes, $addsizes);
    return $newsizes;
}

function ampae_loginlogo()
{
    $tmpLogo = esc_url( get_template_directory_uri() ) . '/img/Icon-64.png';

    if (get_theme_mod('ampae_logo')) {
        $tmpLogo = get_theme_mod('ampae_logo');
    }

    echo '<style type="text/css">
    body {
        background: #f8fafa;
    }
    h1 a {
        background-image: url(' . esc_url($tmpLogo) . ') !important;
        background-size: 64px auto !important;
        width: 64px !important;
        padding: 0 0 10px 0 !important;
    }
  </style>';
}
add_action('login_head', 'ampae_loginlogo');
