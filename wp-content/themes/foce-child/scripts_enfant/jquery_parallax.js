(function($) {
  // Attendez que le document soit prêt
  $(document).ready(function() {
    // Lorsque l'utilisateur fait défiler la page
    $(window).scroll(function() {
      // Obtenez la position de défilement actuelle
      var scrollTop = $(this).scrollTop();

      // Sélectionnez les éléments avec les classes 'parallax-section' et 'parallax-title'
      var parallaxSection = $('.parallax-section');
      var parallaxTitle = $('.parallax-title');

      // Définissez la vitesse de l'effet parallaxe (ajustez cette valeur pour modifier la vitesse)
      var parallaxSpeed = 0.7;

      // Appliquez l'effet de parallaxe à l'élément 'parallax-section'
      parallaxSection.css({
        'transform': 'translateY(' + (scrollTop * parallaxSpeed) + 'px)'
      });

      // Appliquez l'effet de parallaxe à l'élément 'parallax-title'
      parallaxTitle.css({
        'transform': 'translate(-50%, -50%) translateY(' + (scrollTop * -parallaxSpeed) + 'px)'
      });
    });
  });
})(jQuery);