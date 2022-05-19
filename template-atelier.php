<!-- Ajout du fichier template-atelier.php -->
<?php
/**
 * Template Name: Atelier
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */
    get_header();
?>

<main class="site__main">
    <article class="atelier">
        <?php if (have_posts()): the_post(); ?>
            <h1 class="titre__page"><?php the_title(); ?></h1>
            <h2 class="atelier__titre__description">Description de l'Atelier</h2>
            <p class="atelier__animateur">
                L'animateur de l'atelier : <?php the_field('animateur'); ?></p>
            </p>
            <p class="atelier__local">
                L'atelier sera donné au local : <?php the_field('local'); ?>
            </p>
            <p class="atelier__description">
                <?php the_field('description'); ?>
            </p>

            <h2 class="atelier__titre__horaire">Horaire et dates de l'atelier</h2>
            <p class="atelier__duree">
                Durée de chacune des séances est de <?php the_field('duree'); ?> heures
            </p>
            <p class="atelier__date__debut">
                Date de début : <?php the_field('date_de_debut'); ?>
            </p>
            <p class="atelier__date__fin">
                Date de fin <?php the_field('date_de_fin'); ?>
            </p>
            <p class="atelier__jour">
                La formation se donnera : <?php the_field('jour'); ?>
            </p>
            <p class="atelier__heure">
                L'horaire : De <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin'); ?>
            </p>
    </article>
    <?php endif; ?>
</main>

<?php get_footer(); ?>