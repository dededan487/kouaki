/*utilisation de API Intersection Observer *
*/

// Définition du ratio de visibilité
const ratio = .1 // ratio de 10% (l'élément doit être visible à 10% au moins)

// Options pour l'Intersection Observer
const options = {
    root: null, // Utilise le viewport comme élément racine
    rootMargin: '0px',  // Pas de marge supplémentaire
    threshold: ratio // Définit le seuil de visibilité à ratio (10%)
}

// Fonction de gestion de l'intersection
const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) { // Vérifie si l'élément est suffisamment visible
            entry.target.classList.add('reveal-visible') //Ajoute la classe ".reveal-visible" à l'élément
            observer.unobserve(entry.target) // Cesse d'observer l'élément une fois qu'il est devenu visible
        }
    })
}

// Création de l'Intersection Observer avec la fonction de gestion et les options 
const observer = new IntersectionObserver(handleIntersect, options)

// Sélectionne tous les éléments avec la classe ".reveal" et observe chacun d'eux
document.querySelectorAll('.reveal').forEach(function (r) {
    observer.observe(r)
})



/*********************** */
