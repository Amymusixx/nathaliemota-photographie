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
  wp_enqueue_script('loadMore', get_stylesheet_directory_uri() . '/assets/js/load-more.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('filtres', get_stylesheet_directory_uri() . '/assets/js/filtres.js', array('jquery'), '1.0.0', true);

  wp_localize_script('ajax-load-more', 'ajax_params', array(
    'ajax_url' => admin_url('/nathaliemota-photographie/wp-admin/admin-ajax.php'),
    'nonce' => wp_create_nonce('load_more_posts'),
    'excluded_posts' => $post_ids,
    'orderby' => $orderby,
    'category' => $category,
    'format' => $format,
));
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'motaphoto' ) );
}

// Fonction pour charger toutes les photos sur la page d'accueil
function load_more_photos() {
  $page = $_POST['page'];

  $args = array(
      'post_type' => 'photos',
      'posts_per_page' => 8,
      'paged' => $page,
      
  );

  $photo_query = new WP_Query($args);

  if ($photo_query->have_posts()) :
      while ($photo_query->have_posts()) : $photo_query->the_post();
          // Utilisez get_template_part pour inclure le contenu du template overlay
          include("template-parts/overlay.php"); 
      endwhile;
      wp_reset_postdata();
  else :
      echo 'No more photos';
  endif;

  wp_die(); // Terminez correctement la requête Ajax
}

add_action('wp_ajax_load_more_photos', 'load_more_photos');
add_action('wp_ajax_nopriv_load_more_photos', 'load_more_photos');




//fonction filtres

    // Enregistrez l'action WordPress pour la requête AJAX
    add_action('wp_ajax_filter_photos', 'filter_photos');
    add_action('wp_ajax_nopriv_filter_photos', 'filter_photos'); // Pour les utilisateurs non connectés
    
    function filter_photos()
    {
        $category = $_POST['categorie'];
        $format = $_POST['format'];
        $date_order = $_POST['date_order'];
    
    
        // Construisez vos arguments de requête personnalisée ici en fonction des filtres
    
        $args = array(
            'post_type' => 'photos',
            'posts_per_page' => 8,
            // Ajoutez d'autres arguments selon les filtres sélectionnés
        );
    
        if ($category !== 'all') {
            $args['tax_query'][] = array(
                'taxonomy' => 'categorie',
                'field'    => 'slug',
                'terms'    => $category,
            );
        }
    
        if ($format !== 'all') {
            $args['tax_query'][] = array(
                'taxonomy' => 'format',
                'field'    => 'slug',
                'terms'    => $format,
            );
        }
    
        if ($date_order === 'De la plus récente à la plus ancienne') {
            $args['orderby'] = 'date';
            $args['order'] = 'DESC';
        } elseif ($date_order === 'De la plus ancienne à la plus récente') {
            $args['orderby'] = 'date';
            $args['order'] = 'ASC';
        }
    
        $photo_query = new WP_Query($args);
    
    
        // Boucle WordPress pour récupérer les données du custom post type
        if ($photo_query->have_posts()) :
            while ($photo_query->have_posts()) : $photo_query->the_post();
                // Incluez le template pour chaque photo
                include("template-parts/photo-block.php"); 
            endwhile;
    
        endif;
    
        wp_reset_postdata();
    
       
        die();
    }