<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="parallax-container">
        <div class="parallax-section">
            <div class="banner fade show banner1">
                <?php get_template_part('parts/background-video'); ?>
                <img src="/wp-content/themes/foce/assets/images/banner.png" alt="Fallback Image" id="banner-img">
            </div>
        </div>
        <div class="parallax-title">
            <img src="/wp-content/themes/foce/assets/images/logo.png" alt="image de fond">
        </div>
    </section>
    <section id="#story" class="story fade show">
        <h2>
            <div class="reveal">L'histoire</div>
        </h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);
        ?>
        <article id="characters">
            <div class="swiper mySwiper007">
                <h3>Les personnages</h3> <!-- Titre de la section -->
                <div class="swiper-wrapper">
                    <?php
                    while ($characters_query->have_posts()) { // Boucle pour chaque élément
                        $characters_query->the_post();
                        echo '<div class="swiper-slide">'; // Début de la diapositive Swiper
                        echo '<figure>'; // Début de la figure
                        echo get_the_post_thumbnail(get_the_ID(), 'full'); // Affichage de l'image mise en avant
                        echo '<figcaption>'; // Début de la légende
                        the_title(); // Affichage du titre
                        echo '</figcaption>'; // Fin de la légende
                        echo '</figure>'; // Fin de la figure
                        echo '</div>'; // Fin de la diapositive Swiper
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div> <!-- Pagination Swiper -->
            </div>
            <!-------------------------------------------------->
        </article>
        <article id="place">          
            <div>
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <div class="bloc_nuages">   
                 <img src="/wp-content/themes/foce-child/images/big_cloud.png" alt="grand nuage" class="nuages" id="grd_nuage">
                 <img src="/wp-content/themes/foce-child/images/little_cloud.png" alt="petit nuage" class="nuages" id="ptit_nuage">
            </div>
            
        </article>
    </section>
    <section id="studio" class="fade show">
        <h2>
            <div class="reveal">Studio Koukaki </div>
        </h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <?php get_template_part('parts/section_finale'); ?>
</main><!-- #main -->

<?php
get_footer();
