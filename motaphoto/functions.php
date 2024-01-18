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

function weichie_load_more() {
    $ajaxposts = new WP_Query([
      'post_type' => 'photos',
      'posts_per_page' => 8,
      'orderby' => 'rand',
      'order' => 'DESC',
      'paged' => $_POST['paged'],
    ]);
  
    $response = '';
  
    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        $response .= include("template-parts/photo-block.php");
      endwhile;
    } else {
      $response = '';
    }
  
    echo $response;
    exit;
  }
  add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
  add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');

  