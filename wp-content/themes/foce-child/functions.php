<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_scripts() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/video/script-video.js', array(), '1.0', true );
    wp_enqueue_script( 'mon-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

function theme_enqueue_video() {
    wp_enqueue_style( 'video-style', get_template_directory_uri() . '-child/video/video.css');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_video' );

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}



