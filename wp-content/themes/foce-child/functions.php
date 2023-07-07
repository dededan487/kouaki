<?php

// Ajouter les styles du thème parent
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Ajouter les scripts et styles pour le thème
function theme_enqueue_scripts()
{
    // Ajouter jQuery
    wp_enqueue_script('jquery');

    // Ajouter jquery_parallax.js avec une dépendance à jQuery
    wp_enqueue_script('jquery-parallax', get_stylesheet_directory_uri() . '/scripts_enfant/jquery_parallax.js', array('jquery'), '1.0', true);

    // Ajouter custom-script pour la fonctionnalité vidéo
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/scripts_enfant/script-video.js', array(), '1.0', true);

    // Ajouter mon-script avec une dépendance à jQuery
    wp_enqueue_script('mon-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// Ajouter les styles pour la vidéo
function theme_enqueue_video()
{
    wp_enqueue_style('video-style', get_template_directory_uri() . '-child/css_plus/video.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_video');



// Ajouter les styles pour parallax
function theme_enqueue_parallax()
{
    wp_enqueue_style('parallax-style', get_template_directory_uri() . '-child/css_plus/parallax.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_parallax');

// initialisation de Swipper

function enqueue_swiper_assets() {
    // Enqueue Swiper CSS
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@10/swiper-bundle.min.css', array(), '10.0.0');

    // Enqueue Swiper JS
    wp_enqueue_script('swiper', get_template_directory_uri() . '-child/scripts_enfant/swiper-bundle.min.js', array(), '10.0.0', true);

    // Enqueue custom swiper script
    wp_enqueue_script('custom-swiper', get_template_directory_uri() . '-child/scripts_enfant/swiper_script.js', array('swiper'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');


// Récupérer les options du customizer du thème parent
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // Empêcher la mise à jour des modifications du thème enfant
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}


function theme_enqueue_scripts2() {
    // Enregistrer le fichier jquery_nuage.js
    wp_enqueue_script('jquery-nuage', get_stylesheet_directory_uri() . '/scripts_enfant/jquery_nuage_parallax.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts2');