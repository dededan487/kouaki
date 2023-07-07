<!--IMPOSSIBLE A CHARGER AVEC TEMPLATE-PARTS--------->
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