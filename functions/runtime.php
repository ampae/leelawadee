<?php
/**
 * ampae functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ampae
**/

add_action("wp_enqueue_scripts", "ampae_custom_enqueue");
function ampae_custom_enqueue()
{
    wp_enqueue_script('ampae-nav', esc_url( get_template_directory_uri() ) . '/js/nav.js', array('jquery'), '1.0', true);

}
function ampae_custom_js()
{
    //	wp_enqueue_script( 'ampae_custom_js', esc_url( get_template_directory_uri() ) . '/js/tabs.js' );
}
//add_action( 'wp_enqueue_scripts', 'ampae_custom_js' );

//remove_filter('the_content', 'wpautop');
//remove_filter('the_excerpt', 'wpautop');

function the_excerpt_max_charlength($excerpt, $charlength)
{
    $charlength++;

    if (mb_strlen($excerpt) > $charlength) {
        $subex = mb_substr($excerpt, 0, $charlength - 5);
        $exwords = explode(' ', $subex);
        $excut = - (mb_strlen($exwords[ count($exwords) - 1 ]));
        if ($excut < 0) {
            return mb_substr($subex, 0, $excut);
        } else {
            return $subex;
        }
        return '[..]';
    } else {
        return $excerpt;
    }
}

function ampae_scripts()
{
    wp_enqueue_style('ampae-style', get_stylesheet_uri());

    /**
     * Runtime css to be replaced !!!
     */
    wp_enqueue_style( 'ampae-runtime-style', esc_url( get_template_directory_uri() ) . '/css/runtime.css',false,false,'all');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'ampae_scripts');

include_once esc_url( get_template_directory() ) . '/inc/template-tags.php';

include_once esc_url( get_template_directory() ) . '/inc/customizer.php';
