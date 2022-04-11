<?php get_header() ?>
<main class="site__main">
    
    <a href="?cletri=title&ordre=asc">Tri ascendant</a>
    <a href="?cletri=title&ordre=desc">Tri descendant</a>
    <?php wp_nav_menu(array(
        "menu" => "categorie_cours",
        "container" => "nav")); 
    ?>

    <?php 
        $slug_categorie_de_la_page = trouve_la_categorie(array('cours', 'web', 'jeu', 'creation-3d', 'design', 'utilitaire', 'video'));
        $ma_categorie = get_category_by_slug($slug_categorie_de_la_page);
        echo "<h2>" . $ma_categorie->name . "</h2>";
    ?>

    <h2 class="site__main__titre">Liste des cours du programme TIM</h2>
    <?php if(have_posts()): ?>
        <section class="cours">
            <?php while(have_posts()): the_post(); ?>
            <?php get_template_part('gabarit/content', 'cours') ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer() ?>