<?php
//Chargement du fichier CSS
function motaphoto_style(){
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('add_scripts', 'motaphoto_style');

function add_scripts() {
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), 1.1, true );
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'motaphoto' ) );
}

?>