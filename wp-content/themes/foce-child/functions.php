<?php

function theme_enqueue_styles()
{
    // Ajouter le style parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Ajouter les styles pour la vidéo
    wp_enqueue_style('video-style', get_template_directory_uri() . '-child/css_plus/video.scss');

    // Ajouter les styles pour parallax
    wp_enqueue_style('parallax-style', get_template_directory_uri() . '-child/css_plus/parallax.scss');

    // Ajouter les styles pour le menu burger
    wp_enqueue_style('menu-style', get_template_directory_uri() . '-child/css_plus/_navigation.scss');

    // Enqueue Swiper CSS
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@10/swiper-bundle.min.css', array(), '10.0.0');

}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Ajouter les scripts et styles pour le thème
function theme_enqueue_scripts()
{
    // Ajout jQuery
    wp_enqueue_script('jquery');

    // Ajout jquery_parallax.js avec une dépendance à jQuery
    wp_enqueue_script('jquery-parallax', get_stylesheet_directory_uri() . '/scripts_enfant/jquery_parallax.js', array('jquery'), '1.0', true);

    // Ajout custom-script pour la fonctionnalité vidéo
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/scripts_enfant/script-video.js', array(), '1.0', true);

    // Ajout mon-script avec une dépendance à jQuery
    wp_enqueue_script('mon-script', get_stylesheet_directory_uri() . '/scripts_enfant/script.js', array('jquery'), '1.0', true);

    // Ajout menu-script pour le menu
    wp_enqueue_script('menu-script', get_stylesheet_directory_uri() . '/scripts_enfant/menu.js', array(), '1.0', true);

    // Enqueue Swiper JS
    wp_enqueue_script('swiper', get_template_directory_uri() . '-child/scripts_enfant/swiper-bundle.min.js', array(), '10.0.0', true);

    // Enqueue custom swiper script
    wp_enqueue_script('custom-swiper', get_template_directory_uri() . '-child/scripts_enfant/swiper_script.js', array('swiper'), '1.0.0', true);

    // Enregistrer le fichier jquery_nuage.js
    wp_enqueue_script('jquery-nuage', get_stylesheet_directory_uri() . '/scripts_enfant/jquery_nuage_parallax.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

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
