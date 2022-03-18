<footer class="site__footer">
    <!-- première rangée de colonne -->
    <div class="site__footer__colonne">
        <section class="adresse">
            <?php get_sidebar( 'footer_colonne_1' ); ?>
        </section>
        <section class="liens__cours">
            <?php get_sidebar( 'footer_colonne_2' ); ?>
        </section>
        <section class="liens">
        <?php get_sidebar( 'footer_colonne_3' ); ?> 
        </section>
    </div>
    <!-- section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__nav">
            <?php get_sidebar( 'footer_ligne_1' ); ?>
        </section>
        <section class="footer__sociaux">
            <?php get_sidebar( 'footer_ligne_2' ); ?> 
        </section>
        <!-- Ajout de la barre de recherche avant les copyrights -->
        <div>
            <?php get_search_form(); ?>
        </div>
        <section class="copyright">
            <?php get_sidebar( 'footer_ligne_3' ); ?>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>