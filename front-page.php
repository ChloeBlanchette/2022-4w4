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
    <?php $icone = '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#1572b6" d="M5.902 27.201L3.656 2h24.688l-2.249 25.197L15.985 30 5.902 27.201z"></path><path fill="#33a9dc" d="M16 27.858l8.17-2.265 1.922-21.532H16v23.797z"></path><path fill="#fff" d="M16 13.191h4.09l.282-3.165H16V6.935h7.75l-.074.829-.759 8.518H16v-3.091z"></path><path fill="#ebebeb" d="M16.019 21.218l-.014.004-3.442-.93-.22-2.465H9.24l.433 4.853 6.331 1.758.015-.004v-3.216z"></path><path fill="#fff" d="M19.827 16.151l-.372 4.139-3.447.93v3.216l6.336-1.756.047-.522.537-6.007h-3.101z"></path><path fill="#ebebeb" d="M16.011 6.935v3.091H8.545l-.062-.695-.141-1.567-.074-.829h7.743zM16 13.191v3.091h-3.399l-.062-.695-.14-1.567-.074-.829H16z"></path></svg>';
            wp_nav_menu(array("menu"=>"atelier",
                              "container"=>"nav",
                              "container_class"=>"menu-atelier-container",
                              "link_after" => $icone)); ?>

    <?php if (have_posts()): the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>