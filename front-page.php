<?php get_header() ?>
<main class="principal">
    <section class="animation">
        <div class="animation__bloc">A</div>
        <div class="animation__bloc">C</div>
        <div class="animation__bloc">C</div>
        <div class="animation__bloc">U</div>
        <div class="animation__bloc">E</div>
        <div class="animation__bloc">I</div>
        <div class="animation__bloc">L</div>
    </section>

    <!------------------------------- Ajout du menu accueil -------------------------------->
    <!------------------------------------ Menu accueil ------------------------------------>
    <?php wp_nav_menu(array("menu"=>"menu_accueil",
                            "container"=>"nav")); ?>
    
    <!----------------------------- Ajout du menu des évenements ----------------------------->
    <!------------------------------------ Menu evenement ------------------------------------>
    <?php wp_nav_menu(array("menu"=>"evenement",
                            "container"=>"nav")); ?>

    <!----------------------------- Ajout du menu des ateliers ----------------------------->
    <!------------------------------------ Menu atelier ------------------------------------>
    <?php wp_nav_menu(array("menu"=>"atelier",
                            "container"=>"nav")); ?>
    
    

    <?php if (have_posts()): the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>