(function($) {
  $(document).ready(function() { //est exécutée lorsque le DOM est entièrement chargé

    //mouvement des nuages
    function parallaxClouds() {
      var scrollTop = $(window).scrollTop(); // Position de défilement actuelle (représente le nombre de pixels défilés depuis le haut de la page.)
      var cloud1 = $('#grd_nuage'); // Sélection du grand nuage
      var cloud2 = $('#ptit_nuage'); // Sélection du petit nuage

      // Calcul du déplacement en fonction de la position de défilement
      var cloud1Offset = -scrollTop / 3 + 200;  // ajuster la position initiale du nuages.
      var cloud2Offset = -scrollTop / 3 ;

      // Limiter le déplacement à 300px vers la gauche
      cloud1Offset = Math.max(cloud1Offset, -300);
      cloud2Offset = Math.max(cloud2Offset, -300);

      // Appliquer le déplacement aux nuages
      cloud1.css('transform', 'translateX(' + cloud1Offset + 'px)'); //modifie la propriété CSS transform
      cloud2.css('transform', 'translateX(' + cloud2Offset + 'px)');
    }

    // Associe la fonction de mouvement des nuages à l'événement de défilement
    $(window).scroll(function() { 
      parallaxClouds();
    });

    // Appeler la fonction une fois au chargement de la page pour positionner les nuages correctement
    parallaxClouds();
  });
})(jQuery); // appel de la bibliotheque jQuery

console.log("Les nuages sont en cours de chargement");
