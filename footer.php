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
<!-- Ajout de la boite modale -->
<div class="boite__modale">
    <button class="boite__modale__fermeture">X</button>
    <p class="boite__modale__texte"></p>
</div>
<!-- Ajout de la boite pour le carrousel -->
<div class="boite__carrousel">
    <button class="boite__carrousel__fermeture">X</button>
    <section class="boite__carrousel__navigation"></section>
</div>
<?php wp_footer(); ?>

</body>
</html>