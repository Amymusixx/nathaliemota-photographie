<?php get_header(); ?>

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
    <div class="filters">
        <form action=""> 
            <!-- Filtre par Catégorie -->
            <div class="filter1">
                <select name="categoryfilter" id="category">
                    <option value="">Catégories</option>
                    <?php
                    // récupération des catégories
                    $categories = get_terms('categorie');
                    // récupération de la catégorie actuellement sélectionnée
                    $selected_category = isset($_GET['categoryfilter']) ? $_GET['categoryfilter'] : '';
                    // boucle sur les catégories
                    foreach ($categories as $category) {
                        ?>
                        <option value="<?php echo $category->slug; ?>" <?php echo $selected_category == $category->slug ? 'selected' : ''; ?>><?php echo $category->name; ?></option>
                        <?php
                    }
                    ?>
                </select>


            <!-- Filtre par Format -->
                <select name="formats" id="format">
                    <option value="">Formats</option>
                    <?php
                    $formats = get_terms('format');
                    // récupération du format actuellement sélectionné
                    $selected_format = isset($_GET['formats']) ? $_GET['formats'] : '';
                    foreach ($formats as $format) {
                        ?>
                        <option value="<?php echo $format->slug; ?>" <?php echo $selected_format == $format->slug ? 'selected' : ''; ?>><?php echo $format->name; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <!-- Filtre par Ancienneté -->
            <div class="filter2">
                <select name="orderby" id="orderby">
                    <option value="">Trier par</option>
                    <option value="date_desc" <?php echo isset($_GET['orderby']) && $_GET['orderby'] == 'date_desc' ? 'selected' : ''; ?>>des plus récentes aux plus anciennes</option>
                    <option value="date_asc" <?php echo isset($_GET['orderby']) && $_GET['orderby'] == 'date_asc' ? 'selected' : ''; ?>>des plus anciennes aux plus récentes</option>
                </select>
            </div>
        </form>
    </div>

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

    <script>
      Fancybox.bind('[data-fancybox]', {
        // Your custom options
      });    
    </script>

</main>
<?php get_footer(); ?>