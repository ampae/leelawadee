<?php
/**
 * ampae Theme Customizer.
 *
 * @package ampae
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ampae_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';


$wp_customize->add_setting('ampae_logo', array(
                'sanitize_callback' => 'ampae_sanitize_file'
            ));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ampae_logo',
array(
'label' => 'Upload Logo',
'section' => 'title_tagline',
'settings' => 'ampae_logo',
) ) );



/*
$wp_customize->add_section('ampae_footer',
array(
'title' => 'Footer',
'description' => '',
'priority' => 120,
));
*/

}
add_action('customize_register', 'ampae_customize_register');

function ampae_sanitize_file( $file, $setting ) {

            //allowed file types
            $mimes = array(
                'jpg|jpeg|jpe' => 'image/jpeg',
                'gif'          => 'image/gif',
                'png'          => 'image/png'
            );

            //check file type from file name
            $file_ext = wp_check_filetype( $file, $mimes );

            //if file has a valid mime type return it, otherwise return default
            return ( $file_ext['ext'] ? $file : $setting->default );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ampae_customize_preview_js()
{
    wp_enqueue_script('ampae_customizer', esc_url( get_template_directory_uri() ) . '/js/customizer.js', array( 'customize-preview' ), false, true);
}
add_action('customize_preview_init', 'ampae_customize_preview_js');
