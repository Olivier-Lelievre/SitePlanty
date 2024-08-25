<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 20);
function theme_enqueue_styles() {
    // Chargement du style.css du thème parent Astra
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du theme.css créé dans le thème enfant
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}



function astrachild_add_admin_link($items) {
  if (is_user_logged_in())  {
      $items .= '<li class="adminlink"><a href="'. get_admin_url() .'">Admin</a></li>';
  }
  return $items;
}
add_filter('wp_nav_menu_items', 'astrachild_add_admin_link', 10, 2);
