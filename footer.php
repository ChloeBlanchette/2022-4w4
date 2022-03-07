<footer class="site__footer">
    <!-- première rangée de colonne -->
    <div class="site__footer__colonne">
        <section class="article">
            <h2>Titre 1</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, nostrum! Saepe voluptates eius eaque numquam incidunt veniam commodi excepturi reprehenderit voluptas non! Alias quo, rerum perferendis nemo architecto odio iste?</p>
        </section>
        <section class="adresse">
            sdjksjdlsajdlk
        </section>
        <section class="liens">
            <?php wp_nav_menu(array(
                        "menu"=>"externe")); ?>
        </section>
    </div>
    <!-- section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__description"></section>
        <section class="footer__nav"></section>
        <section class="copyright"></section>
        <section class="footer__auteur"></section>
    </div>
    <section>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque blanditiis facere? Aperiam vero excepturi modi a unde!</p>
        <?php
            $icone = '<svg width="25px" height="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#ddd"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>';
            wp_nav_menu(array("menu"=>"simple",
                                "container"=>"nav",
                                "menu_class" => "footer__menu",
                                "container_class"=>"site__footer__nav",
                                "link_before" => $icone)); 
        ?>
        <?php get_search_form(); ?>
    </section>
</footer>
<?php wp_footer(); ?>