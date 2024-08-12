<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Astra
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du theme.css créé dans le thème enfant
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}



/**pour ajouter un bouton connexion/deconnexion à droite du menu
add_filter('wp_nav_menu_items', 'wpcours_add_login_logout_menu', 10, 2);
function wpcours_add_login_logout_menu($items, $args) {
        ob_start();



NON : mettre is user loggin avec si oui  et si non



        wp_loginout('index.php');
        $loginoutlink = ob_get_contents();
        ob_end_clean();


OUI  avec modifs interieur de li
        $items .= '<li style=" float: right;">'. $loginoutlink .'</li>';
    return $items;
}