<?php
/**
 * ampae functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ampae
 */

 function ampae_filter_wp_title( $title, $sep ) {
     global $paged, $page;

     if ( is_feed() ) {
         return $title;
     }

     $new_title = get_bloginfo( 'name' );

     $site_description = get_bloginfo( 'description', 'display' );
     if ( $site_description && ( is_home() || is_front_page() ) ) {
         $title = "<h2>".$new_title."</h2>";
         $title.= "<h3>".$site_description."</h3>";
     } else {
       $title = "<h2>".$title."</h2>";
     }

     return $title;
 }
 add_filter( 'wp_title', 'ampae_filter_wp_title', 10, 2 );

 function ampae_post_queries( $query ) {
   if (!is_admin() && $query->is_main_query()){
     if(is_home()){
       $query->set('posts_per_page', 12);
     }
     if(is_category()){
       $query->set('posts_per_page', 12);
     }
   }
 }
 add_action( 'pre_get_posts', 'ampae_post_queries' );

/**
 * Registers an editor stylesheet for the theme.
 */
function ampae_theme_add_editor_styles()
{
    add_editor_style('css/custom-editor-style.css');
}
add_action('admin_init', 'ampae_theme_add_editor_styles');

/*
Click “Add new image” to upload an image file from your computer.
Your theme works best with an image with a header size of 980 × 60 pixels
you’ll be able to crop your image once you upload it for a perfect fit.

*/
$ampaeHeaderInfo = array(
    'width'         => 1960,
    'height'        => 240,
    'default-image' => esc_url( get_template_directory_uri() ) . '/images/1.jpg',
);
add_theme_support('custom-header', $ampaeHeaderInfo);

$ampaeHeaderImages = array(
    'sunset' => array(
            'url'           => esc_url( get_template_directory_uri() ) . '/images/2.jpg',
            'thumbnail_url' => esc_url( get_template_directory_uri() ) . '/images/2_thumbnail.jpg',
            'width'         => 1960,
            'height'        => 240,
            'description'   => 'Sunset',
    ),
);
register_default_headers($ampaeHeaderImages);

function ampae_add_inline_css()
{
    wp_register_style('ampae-header', false);
    wp_enqueue_style('ampae-header');
    $tmpHeaderData = '#site-header {background: white url('.get_header_image().') center center no-repeat;}';
    wp_add_inline_style('ampae-header', $tmpHeaderData);
}
add_action('wp_enqueue_scripts', 'ampae_add_inline_css');


if (! function_exists('ampae_setup')) {
    function ampae_setup()
    {
        load_theme_textdomain('leelawadee', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

//        set_post_thumbnail_size( 50, 50);

        register_nav_menus(array(
            'primary' => __('Primary', 'leelawadee'),
        ));

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('custom-background', apply_filters('ampae_custom_background_args', array(
            'default-color' => '#fff',
            'default-image' => '',
        )));
    }
}
add_action('after_setup_theme', 'ampae_setup');

if (! isset($content_width)) {
    $content_width = 900;
}
