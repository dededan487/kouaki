document.addEventListener("DOMContentLoaded", function() {
  // Écoute l'événement "DOMContentLoaded" pour exécuter le code lorsque le document est chargé

  const burgerMenu = document.querySelector('.burger-menu');
  // Sélectionne l'élément avec la classe "burger-menu" et le stocke dans la variable "burgerMenu"

  const fullscreenMenu = document.querySelector('.fullscreen-menu');
  // Sélectionne l'élément avec la classe "fullscreen-menu" et le stocke dans la variable "fullscreenMenu"

  burgerMenu.addEventListener('click', function() {
      // Ajoute un écouteur d'événements "click" à l'élément "burgerMenu"

      burgerMenu.classList.toggle('change');
      // Bascule la présence de la classe "change" sur l'élément "burgerMenu"

      fullscreenMenu.style.display = fullscreenMenu.style.display === 'flex' ? 'none' : 'flex';
      // Modifie la propriété "display" de "fullscreenMenu" pour passer entre "flex" et "none"
      // Si la valeur actuelle de "display" est "flex", la nouvelle valeur sera "none", sinon elle sera "flex"
  });

  // Ajoutez cet événement pour fermer le menu et revenir à la page principale
  fullscreenMenu.addEventListener('click', function() {
      // Ajoute un écouteur d'événements "click" à l'élément "fullscreenMenu"

      burgerMenu.classList.toggle('change');
      // Bascule la présence de la classe "change" sur l'élément "burgerMenu"

      fullscreenMenu.style.display = 'none';
      // Modifie la propriété "display" de "fullscreenMenu" pour la mettre à "none" et masquer le menu
  });
});
