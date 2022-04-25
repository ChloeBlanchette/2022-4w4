(function() {

    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__ouvrir = document.querySelectorAll(".cours__desc__ouvrir");
    let boite__modale__fermeture = document.querySelector(".boite__modale__fermeture");
    let boite__modale__texte = document.querySelector(".boite__modale__texte");

    // Ajout d'une fonction pour l'ouverture de la boite modale
    for (const bout of cours__desc__ouvrir) {
        
        // On ajoute un écouteur d'événement qui détecte le click de la souris sur le bouton La suite
        bout.addEventListener('mousedown', function() {

            // On ajoute la classe ouvrir à celle de la boite
            boite__modale.classList.add('ouvrir');
        })
    }

    // Fermeture de la boite modale à l'aide d'un écouteur d'événement qui détecte le click de la souris sur le bouton de fermeture
    boite__modale__fermeture.addEventListener('mousedown', function() {

        // On retire la classe "ouvrir" de la boite modale lorsqu'on appuie sur le X pour la fermer
        boite__modale.classList.remove('ouvrir');
    })

})()