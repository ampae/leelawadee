<?php
/**
 * ampae functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ampae
 */

function ampae_main_widget_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'leelawadee'),
        'id'            => 'ampae-sidebar-main',
        'description'   => esc_html__('Add widgets here.', 'leelawadee'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'ampae_main_widget_init');

function ampae_shop_widget_init()
{
    register_sidebar(array(
    'name'          => __('My Shop Sidebar', 'leelawadee'),
    'id'            => 'ampae-sidebar-shop',
    'description'   => __('Appears on the index shop page.', 'leelawadee'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="h-widget">',
    'after_title'   => '</h4>',
  ));
}

add_action('widgets_init', 'ampae_shop_widget_init');

function ampae_footer_widget_init() {
    register_sidebar( array(
        'name' => __( 'Footer Widget Area', 'leelawadee' ),
        'id' => 'ampae-sidebar-footer',
        'description' => __( 'Appears in the footer', 'leelawadee' ),
        'before_widget' => '<aside id="%1$s" class="grid-cell sp1 spy1 widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'ampae_footer_widget_init' );
