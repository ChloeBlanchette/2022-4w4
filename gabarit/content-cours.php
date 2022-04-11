<?php 
    $categories = get_the_category(); 
    //var_dump($categories);
    // echo $categories[1]->slug;
?>
<article class="cours__carte <?php echo $categories[1]->slug; ?>">
    <?php
        $titre = get_the_title();
        $titreCourt = substr(get_the_title(), 8);
        $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));

        $nbHeures = get_field("nombre_dheures");
        /*  $posDebutHeures = strrpos($titre, '(') + 1;
            $posFinHeures = strrpos($titre, ')');
            $nbHeures = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);
        */
    ?>
    <?php the_post_thumbnail('thumbnail'); ?>
    <h2 class="carte__titre">
        <a href="<?php get_permalink(); ?>">
            <?= $titreCourt; ?>
        </a>
    </h2>
    <p class="carte__code"><?= substr(get_the_title(), 0, 7) ?></p>
    <p><?= $nbHeures; ?></p>
    <p class="carte__description"><?= get_the_excerpt() ?></p>
</article>