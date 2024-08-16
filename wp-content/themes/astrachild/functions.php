<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Astra
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du theme.css créé dans le thème enfant
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}




add_filter('wp_nav_menu_items', 'astrachild_add_admin_link', 10, 2);
function astrachild_add_admin_link($items, $args) {
    if (is_user_logged_in()) {
        // Crée le lien Admin
        $admin_link = '<li class="adminlink"><a href="' . admin_url() . '">Admin</a></li>';
        
        // Séparer les items du menu en un tableau
        $menu_items = explode('</li>', $items);
        // Retirer les items vides
        $menu_items = array_filter($menu_items);
        
        // Trouve la position où insérer le lien Admin
        foreach ($menu_items as $index => $item) {
            if (strpos($item, 'Nous rencontrer') !== false) {
                // Insère le lien Admin après "Nous rencontrer"
                array_splice($menu_items, $index + 1, 0, $admin_link);
                break;
            }
        }
        
        // Recomposer les items du menu
        $items = implode('</li>', $menu_items) . '</li>';
    }
    return $items;
}







/*function add_admin_link_to_menu($items, $args) {
  if (is_user_logged_in() && current_user_can('administrator')) {
      // Crée le lien Admin
      $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';

      // Trouve la position où insérer le lien Admin
      $meet_us_position = strpos($items, 'Nous rencontrer');
      if ($meet_us_position !== false) {
          $items = substr($items, 0, $meet_us_position) . $admin_link . substr($items, $meet_us_position);
      }
  }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);




/*add_filter('wp_nav_menu_items', 'astrachild_add_admin_link', 10, 2);
function astrachild_add_admin_link($items, $args) {
    if (is_user_logged_in()) {
        // Crée le lien Admin
        $admin_link = '<li class="adminlink"><a href="' . admin_url() . '">Admin</a></li>';
        
        // Séparer les items du menu en un tableau
        $menu_items = explode('</li>', $items);
        // Retirer les items vides
        $menu_items = array_filter($menu_items);
        
        // Trouve la position où insérer le lien Admin
        foreach ($menu_items as $index => $item) {
            if (strpos($item, 'Nous rencontrer') !== false) {
                // Insère le lien Admin après "Nous rencontrer"
                array_splice($menu_items, $index + 1, 0, $admin_link);
                break;
            }
        }
        
        // Recomposer les items du menu
        $items = implode('</li>', $menu_items) . '</li>';
    }
    return $items;
}



/*add_filter('wp_nav_menu_items', 'astrachild_add_admin_link', 10, 2);
function astrachild_add_admin_link($items, $args){
      if(is_user_logged_in())
      {
        $newitems = $items;
        $newitems .= '<li class="adminlink"><a href="'. admin_url() .'">Admin</a></li>';
      }
      return $newitems;
} 


/*
// Insérer l'élément admin à la deuxième position
$position = 1; // Position 1 pour que l'élément apparaisse en deuxième position (après le premier élément)
array_splice($items_array, $position, 0, $admin_item);



/*<?php if(is_user_logged_in()) / ?>
	<div>
		<div>
			<a href="<?php echo admin_url(). ?>">Admin</a>
		</div>
	</div>
<?php endif; ?>





/*function add_login_logout_link($items, $args)
{
  if(is_user_logged_in())
  {
    $newitems = $items;
    $newitems .= '<li class="logoutlink"><a title="Logout" href="'. wp_logout_url('index.php') .'">Logout</a></li>';
  }
  else
  {
    $newitems = $items;
    $newitems .= '<li><a title="Login" href="'. wp_login_url('index.php') .'">Login</a></li>';
  }

  return $newitems;
}
add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);






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