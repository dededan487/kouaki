document.addEventListener("DOMContentLoaded", function() {
    const burgerMenu = document.querySelector('.burger-menu');
    const fullscreenMenu = document.querySelector('.fullscreen-menu');
  
    burgerMenu.addEventListener('click', function() {
      burgerMenu.classList.toggle('change');
      fullscreenMenu.style.display = fullscreenMenu.style.display === 'flex' ? 'none' : 'flex';
    });
  
    // Ajoutez cet événement pour fermer le menu et revenir à la page principale
    fullscreenMenu.addEventListener('click', function() {
      burgerMenu.classList.toggle('change');
      fullscreenMenu.style.display = 'none';
    });
  });