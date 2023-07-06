
var video = document.getElementById("background-video");
var fallbackImage = document.querySelector("#banner-img");


// Masquer la vidéo initialement
video.style.display = "none";

video.addEventListener("loadeddata", function() {
  // La vidéo est en cours de chargement
  console.log("La vidéo est en cours de chargement");
  
  // Masquer l'image de repli lorsque la vidéo est chargée
  fallbackImage.style.display = "none";
 

  // Afficher la vidéo une fois qu'elle est chargée
  video.style.display = "block";
});


