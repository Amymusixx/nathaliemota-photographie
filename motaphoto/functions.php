<?php
// Chargement du fichier CSS
function motaphoto_style(){
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('add_scripts', 'motaphoto_style');


// Chargement des fichiers JS
function add_scripts() {

	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), 1.1, true );
  wp_enqueue_script('burgerMenu', get_stylesheet_directory_uri() . '/assets/js/menuBurger.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('modale', get_stylesheet_directory_uri() . '/assets/js/modale.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('navigation', get_stylesheet_directory_uri() . '/assets/js/navigation.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('lightbox', get_stylesheet_directory_uri() . '/assets/js/lightbox.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'motaphoto' ) );
}

// 7.4. bouton charger plus page accueil
function load_more_photos() {

  $args = array(
      'post_type' => 'photos',
      'posts_per_page' => 8,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $_POST['paged'],
  );

  $query = new WP_Query($args);

$response = '';
  $max_pages = $query->max_num_pages;


  if ($query->have_posts()) {
ob_start();
      while ($query->have_posts()) :
          $query->the_post();
          $response .= include("template-parts/photo-block.php");
      endwhile;
       $output = ob_get_contents();
  ob_end_clean();
  }
  else {
      $response='';
  }

$result = [
  'max' => $max_pages,
  'html' => $output,
];

echo json_encode($result);
exit;
}

add_action('wp_ajax_load_more_photos', 'load_more_photos');
add_action('wp_ajax_nopriv_load_more_photos', 'load_more_photos');


  