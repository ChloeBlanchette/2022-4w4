<?php
    function cidw_4w4_enqueue(){
        wp_enqueue_style('main-styles', 
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
        false);

        wp_enqueue_style('cidw-4w4-google-font', "https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins&family=Roboto+Slab:wght@400;700&family=Roboto:wght@400;700&display=swap", false);
        
        wp_enqueue_script('cidw-4w4-boite-modale',
                            get_template_directory_uri() . '/javascript/boite-modale.js',
                            array(), filemtime(get_template_directory() . '/javascript/boite-modale.js'),
                            true);
    }

    add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

    // Ajout du menu accueil
    function cidw_4w4_enregistre_menu() {
        register_nav_menus(array(
                        'principal' => __('Menu principal', 'cidw_4w4'),
                        'footer' => __('Menu pied de page', 'cidw-4w4'),
                        'footer_colonne' => __('Menu footer colonne', 'cidw-4w4'),
                        'menu_cours' => __('Menu cours', 'cidw-4w4'),
                        'menu_accueil' => __('Menu accueil', 'cidw-4w4')
                    )
                );
    }

    add_action('after_setup_theme', 'cidw_4w4_enregistre_menu');



    /* ---------------------------------------------------- afficher une description de choix de menu */
    /* Cette nouvelle version permet de ne pas avoir de warning */
    function prefix_nav_description( $item_output, $item) {
        if ( !empty( $item->description ) ) {
            $item_output = str_replace( '</a>',
            '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div></a>',
                $item_output );
        }
        return $item_output;
    }
    add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 2 );


    function cidw_4w4_filtre_menu_item($monObjet) {
        //var_dump($monObjet);
        foreach ($monObjet as $key => $value) {
            $value->title = wp_trim_words($value->title, 3);
        }

        return($monObjet);
    }

    add_action("wp_nav_menu_objects", "cidw_4w4_filtre_menu_item");


    function cidw_4w4_add_theme_support() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height' => 100,
        'width'  => 100,
    ) );
    }

    add_action('after_setup_theme', 'cidw_4w4_add_theme_support');

    add_action( 'widgets_init', 'my_register_sidebars' );


    function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'footer_colonne_1',
            'name'          => __( 'Footer colonne 1' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
    register_sidebar(
        array(
            'id'            => 'footer_colonne_2',
            'name'          => __( 'Footer colonne 2' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_colonne_3',
            'name'          => __( 'Footer colonne 3' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    // Ajout de widgets pour la section en ligne du footer
    register_sidebar(
        array(
            'id'            => 'footer_ligne_1',
            'name'          => __( 'Footer ligne 1' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une ligne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    // Ajout d'un second widget pour la section ligne du footer pour les réseaux sociaux
    register_sidebar(
        array(
            'id'            => 'footer_ligne_2',
            'name'          => __( 'Footer ligne 2' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une ligne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    // Ajout d'un troisième widget pour la section ligne du footer pour les copyrights
    register_sidebar(
        array(
            'id'            => 'footer_ligne_3',
            'name'          => __( 'Footer ligne 3' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une ligne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

    /**
     * $query contient la requête « mysql » qui permet d'extraire le contenu de la nouvelle page que l'on tente d'accéder
     * @param : WP_Query $query
     * @return l'objet WP_Q
    */

    // Modification de les fonction query
    function cidw_4w4_pre_get_posts(WP_Query $query)
    {
        if (is_admin() 
            || !$query->is_main_query() 
            || !$query->is_category(array('cours', 'web', 'jeu', 'design', 'video', 'utilitaire', 'creation-3d'))) 
        {
            /*
            $query->set('posts_per_page', -1);
            $query->set('orderby', 'title');
            $query->set('orderby', 'ASC');
            */
            return $query;
        }
        else 
        {
            $ordre = get_query_var('ordre', 'asc');
            $cle = get_query_var('cletri', 'title');
            $query->set('order', $ordre);
            $query->set('orderby', $cle);

            $query->set('postperpage','-1');
            return $query;
        }

    /*
        if (!is_admin() && is_main_query() && is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
        {
            //$ordre = get_query_var('ordre');
            $query->set('posts_per_page', -1);
            // $query->set('orderby', $cle);
            $query->set('orderby', 'title');
            // $query->set('order',  $ordre);
            $query->set('order',  'ASC');
            // var_dump($query);
            // die();
        }
    */
    }

    function cidw_4w4_query_vars($params){
        //var_dump($params); 
        //die();
        $params[] = "ordre";
        $params[] = "cletri";
        return $params;
    }
    add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
    
    add_filter('query_vars', 'cidw_4w4_query_vars' );
    
    /**
     * Extraire le slug de la categorie de l'URL
     * @param array $tableau : liste des slugs de categories de la page 
     * @return string $slug : le slug de la catégorie
     */

     function trouve_la_categorie($tableau) 
     {
         foreach ($tableau as $cle) 
         {
             if (is_category($cle)) return($cle);
         }
     }
?>