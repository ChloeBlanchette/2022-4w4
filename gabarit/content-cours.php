<!-- Création du gabarit du contenu des cours -->
<?php 
    $categories = get_the_category(); 
    //var_dump($categories);
    // echo $categories[1]->slug;
?>
<article class="cours__carte <?php echo $categories[1]->slug; ?>">
    <?php
        $titre = get_the_title();
        $titreCours = substr(get_the_title(), 8);
        $titreCours = substr($titreCours, 0, strrpos($titreCours, '('));

        $nbHeures = get_field("nombre_dheures");
        $departement = get_field("departement");

        $desCours = get_the_content();
        /*  $posDebutHeures = strrpos($titre, '(') + 1;
            $posFinHeures = strrpos($titre, ')');
            $nbHeures = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);
        */
    ?>
    <?php the_post_thumbnail('thumbnail'); ?>
    <h2 class="carte__titre">
        <a href="<?php get_permalink(); ?>">
            <?= $titreCours; ?>
        </a>
    </h2>
    <p class="carte__code"><?= substr($titre, 4, 4); ?></p>
    <p><?= $nbHeures; ?></p>
    <p class="carte__description"><?= wp_trim_words($desCours, 15, "<button class='cours__desc__ouvrir' href='#'> La suite </button>"); ?></p>
    <p class="cours__departement"><?= $departement; ?></p>
</article>