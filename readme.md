# 4W4 2022 TP2 - Chloé Blanchette

## Objectifs
Développer un site constitué de plusieurs modèles,  gabarits de modèle et modèle de page «template» utilisant les champs personnalisés et plusieurs animations Javascript/CSS.

### Une page d'accueil personnalisée les deux menus de série de blocs :

#### Deux menus de blocs de navigations permettant d’accéder aux pages :
Le département TIM
    •	Cours (Les cours du programme TIM)
    •	Centre d’aide
    •	Les profs (Les profs du département)
    •	Vie étudiantes (L’adresse du collège avec images)

Événements (Les événements à venir)
    •	Journée d’accueil (Accueils des étudiants)
    •	Porte ouverte (Porte ouverte de décembre)
    •	Présentation des projets (Présentation des projets Web)
    •	Porte ouverte (Porte ouverte de février)

#### Une galerie d’images de la vie étudiante

### La grille des cours améliorée :
- Les titres de cours ne contiennent plus le sigle du département «582», «350» ou «393»
- Un nouveau champ personnalisé «Département» contiendra 3 radios bouton permettant de sélectionner entre : 
    •	582 – TIM - Technique d’intégration multimédia
    •	393 – TDD - Techniques de la documentation
    •	350 -  PSY – Psychologie
- Le nom du département apparaîtra en bas du bloc
- Un lien sera ajouté à la fin du résumé de l’article
    •	Ce lien permettra d’afficher la description complète de l’article dans une division apparaissant dynamiquement au milieu de .la fenêtre
        - Cette boîte modale sera animée 
        - Permettra de faire défiler sans voir la barre de défilement « hide-scroll-bar-but-while-still-being-able-to-scroll »
        - Un bouton «X» permettra de fermer la boîte modale
        - Sur périphérique mobile la boîte modale prend tout l’espace du viewport

### Chacune des pages événements est conçu à partir d’un modèle de page « template-evenement » amélioré

### L’entête et le footer sont améliorés

### Un carrousel animé avec javascript/CSS. Ce carrousel pourra être intégré dans la page d’accueil ou dans toutes autres pages du site.

### Des fonctions de personnalisations devront être ajoutées dans l’admin « Personnaliser » « Customizer Objects »

### L’apparence de l’entête devra être personnalisée et améliorée

### Le footer devra être amélioré depuis la dernière version

### Les blocs de menu de la page d’accueil contiendront des animations/transitions

### La description de votre thème
    •	contiendra le fichier « screenshot.png »
    •	Un lien vers votre github
    •	Le nom du thème 2022-4W4 TP2

### Le modèle de page « template-evenement.php » devra inclure une image en avant plan

### Votre github
    •	Contiendra une nouvelle branche que vous nommerez «TP2»
    •	Vous devrez accumulez un minimum de 20 commits étalés sur trois semaines
    •	Chaque commit devra être décrit par un message -m « s12-c1 … » selon la date du commit ex :  s13-c1 , s13-c2, s14-c1.
    •	Les message devront être clairs et significatifs
    •	Un fichier readme.md devra être adapté pour la branche « TP2 »
    •	Github Page de la page d’accueil de votre site

### Le thème contiendra les modèles et modèle de page suivants : 
    •	« category-cours.php » pour afficher la liste des cours
    •	« front-page.php » pour afficher la page d’accueil
    •	« single-post » pour afficher un article (un cours)
    •	« page.php » pour afficher une page standard
    •	« 404.php » Pour afficher une erreur 404 quand l’adresse url n’existe pas
    •	« search.php » Pour afficher les résultats de recherche
    •	« template-evenement.php » Qui sera utilisé pour l’ensemble des pages événements
    •	Une structure de boîte modale
    •	Un carrousel animé

