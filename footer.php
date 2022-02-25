<footer class="site__footer">
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