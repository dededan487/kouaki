<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>
        <header id="masthead" class="site-header">
        <h1 class="main-tittle"><?php bloginfo('name'); ?></h1>
            <nav id="barre-navigation" class="main-navigation"> 
                <div class="burger-menu"><!-- nouveau menu-->
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>

                <div class="fullscreen-menu"> <!-- menu pleine page-->
                    <h1 class="site-title"><?php bloginfo('name'); ?></h1> <!--titre page-->
                    <img src="/wp-content/themes/foce/assets/images/logo.png" alt="logo" id="img-logo">

                    <div class="img-menu">
                        <img src="/wp-content/themes/foce/assets/images/orchid.png" alt="orchidee" id="orchid">
                        <img src="/wp-content/themes/foce/assets/images/Sunflower.png" alt="sunflower" id="sunflo">
                        <img src="/wp-content/themes/foce/assets/images/random_flower.png" alt="rando" id="rando">
                        <img src="/wp-content/themes/foce/assets/images/hibiscus_footer.png" alt="hibiscus" id="hibis">
                        <img src="/wp-content/themes/foce/assets/images/flower.png" alt="flower" id="flo">
                    </div>
                    <div class="tetes">
                        <img src="/wp-content/themes/foce-child/images/Group 180.png" alt="chat vert" id="chat-green">
                        <img src="/wp-content/themes/foce-child/images/cat(1).png" alt="chat violet" id="chat-violet">
                        <img src="/wp-content/themes/foce-child/images/cat.png" alt="chat orange" id="chat-orange">
                    </div>
                    <ul>
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <p class="studio-contact">STUDIO CONTACT</p>
                </div>
            </nav><!-- #site-navigation -->
        </header>