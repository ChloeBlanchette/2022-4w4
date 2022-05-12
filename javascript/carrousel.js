(function() {

    // Création des variables pour appeler les classes du carrousel
    let boite__carrousel = document.querySelector(".boite__carrousel");
    let boite__carrousel__fermeture = document.querySelector(".boite__carrousel__fermeture");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");
    let galerie__img = document.querySelectorAll(".galerie img");
    let elmImg = document.createElement('img');

    boite__carrousel.append(elmImg);

    let index = 0;

    // Ajout d'une fonction pour l'ouverture de la boite modale
    for (const img of galerie__img) {
        
        let bouton = document.createElement('button');

        boite__carrousel__navigation.append(bouton);

        bouton.dataset.index = index++
        bouton.addEventListener('mousedown', function() {
            elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'));
        })

        // On ajoute un écouteur d'événement qui détecte le click de la souris sur le bouton La suite
        img.addEventListener('mousedown', function() {

            console.log(img.tagName);
            // On ajoute la classe ouvrir à celle de la boite
            boite__carrousel.classList.add('ouvrir');
            console.log(boite__carrousel.classList);
            elmImg.setAttribute('src', this.getAttribute('src'));
        })
    }

    // Fermeture de la boite modale à l'aide d'un écouteur d'événement qui détecte le click de la souris sur le bouton de fermeture
    boite__carrousel__fermeture.addEventListener('mousedown', function() {

        // On retire la classe "ouvrir" de la boite modale lorsqu'on appuie sur le X pour la fermer
        boite__carrousel.classList.remove('ouvrir');
    })

})()