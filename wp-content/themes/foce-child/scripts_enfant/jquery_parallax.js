(function($) {
  // Attendez que le document soit prêt
  $(document).ready(function() {
    // utilisateur fait défiler la page
    $(window).scroll(function() {
      // position de défilement actuel
      var scrollTop = $(this).scrollTop();

      // les classes 'parallax-section' et 'parallax-title'
      var parallaxSection = $('.parallax-section');
      var parallaxTitle = $('.parallax-title');

      // vitesse de l'effet parallaxe 
      var parallaxSpeed = 0.7;

      // effet de parallaxe à l'élément 'parallax-section'
      parallaxSection.css({
        'transform': 'translateY(' + (scrollTop * parallaxSpeed) + 'px)'
      });

      //effet de parallaxe à l'élément 'parallax-title'
      parallaxTitle.css({
        'transform': 'translate(-50%, -50%) translateY(' + (scrollTop * -parallaxSpeed) + 'px)'
      });
    });
  });
})(jQuery); //appel de jQuery