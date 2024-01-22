<?php get_header(); 
global $wp_query;
?>

<main>

<div class="hero-header">
                <?php // Code PHP pour charger une photo en aléatoire sur la page d'accueil
                $args = array(
                    'post_type' => 'photos',
                    'posts_per_page' => 1,
                    'orderby' => 'rand',
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();
                    the_post_thumbnail();
                endwhile;
                wp_reset_postdata();
                ?>
                <div class='hero-header-container'><h2 class='hero-header-title'>Photographe Event</h2>
            </div>
            </div>

            <div class='photo-liste'>
            


            <div class="page-container">
<!-- Filtrage des photos -->
<section class="filters">
    <div>    
        <select id="category-filter">
            <option value="all">Catégories</option>
            <?php
            $categories = get_categories(array('taxonomy' => 'categorie', 'hide_empty' => false));
            foreach ($categories as $category) {
                echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
            }
            ?>
        </select>

        <select id="format-filter">
            <option value="all">Formats</option>
            <?php
            $formats = get_terms(array('taxonomy' => 'format', 'hide_empty' => false));
            foreach ($formats as $format) {
                echo '<option value="' . esc_attr($format->slug) . '">' . esc_html($format->name) . '</option>';
            }
            ?>
        </select>
    </div>
    <select id="date-filter">
        <option>Trier par</option>
        <option>De la plus récente à la plus ancienne</option>
        <option>De la plus ancienne à la plus récente</option>    
    </select>    


</section>

<!-- Affichage des photos -->
<section class="photo-liste">
  <?php
  $photos_ids = array();
                    $args = array(
                        'post_type' => 'photos',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
		                    'order'=> 'DESC',
		                    'paged'=> 1,
                    );
                    $query = new WP_Query($args);
                    
                include("template-parts/photo-block.php"); 
    
                  // Récupére l'ID de la photo et ajoute au tableau
            $photos_id = get_the_ID();
            $photos_ids[] = $photo_id;
        ?>
</section>

<div>
    <button class='charger-plus' id="load-more"><p>Charger plus</p></button>
</div>
</div>


</main>
<?php get_footer(); ?>