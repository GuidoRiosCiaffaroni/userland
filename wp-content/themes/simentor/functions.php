<?php
if ( !defined( 'ABSPATH' ) ) { exit; }
if ( ! isset( $content_width ) ) $content_width = 1280;
require get_stylesheet_directory() . '/lib/simentor.php';

function simentor_scripts() {

    $theme = wp_get_theme();
    $scripts_version = $theme->get('Version');

    wp_enqueue_style('simentor_main_style', get_template_directory_uri() . '/dist/css/theme.min.css', array(), $scripts_version);
}
add_action('wp_enqueue_scripts', 'simentor_scripts', 100);

function simentor_register_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_all_core_location();
};
add_action( 'elementor/theme/register_locations', 'simentor_register_elementor_locations' );


