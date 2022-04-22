(function() {
    //console.log("vive la boite modale");
    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');

    // Ajout de la variable ciblant le bouton de fermeture de la boite modale
    let boite__modale__fermeture = document.querySelectorAll(".boite__modale__fermeture");

    for (const bout of cours__desc__ouvrir) {
        
        bout.addEventListener('mousedown', function() {
            // console.log(this.parentNode.parentNode.className);
            boite__modale.classList.add('ouvrir');
            console.log(boite__modale.classList);
        })
    }

    // Ajout d'une fonction pour fermer la boite modale
    for (const bouton of boite__modale__fermeture) {
        
        // On ajoute un écouteur d'événement qui détexte le click de la souris sur le bouton
        bouton.addEventListener('mousedown', function() {
            // console.log(this.parentNode.parentNode.className);
            boite__modale.classList.remove('ouvrir');
            boite__modale.classList.add('fermer');
        })
    }

})()