var video = document.getElementById("background-video");
var fallbackImage = document.querySelector("#banner-img");

// Masquer la vidéo initialement
video.style.display = "none";

window.addEventListener("load", function() {
  // Charger la vidéo après 10 secondes
  setTimeout(function() {
    video.addEventListener("loadeddata", function() {
      // La vidéo est en cours de chargement
      console.log("La vidéo est en cours de chargement");

      // Masquer l'image de repli lorsque la vidéo est chargée
      fallbackImage.style.display = "none";

      // Afficher la vidéo une fois qu'elle est chargée
      video.style.display = "block";
    });
    
    // Charger la vidéo source
    video.load();
  }, 10000); // 10 secondes de delais avant chargement
});
