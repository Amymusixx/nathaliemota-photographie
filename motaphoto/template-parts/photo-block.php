

    <script> // Code pour faire fonctionner la librairie fancybox
      Fancybox.bind('[data-fancybox="gallery"]', {
        // Your custom options
      });    
    </script>

<?php $my_query = new WP_Query( $args ); ?>
<div class="container-galery">
<?php  
    if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();?>
    <?php $post_link = get_permalink();?>
        <div><figure class="post-thumbnail">
            
        <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } ?>
            <div class="overlay">

<div class="overlay-fullscreen">
    <?php
    $photo_ref = get_field('reference'); 
    $categories = get_the_terms(get_the_ID(), 'categorie');
    $category_names = array();
    foreach ( (array) $categories as $category ) {
        $category_names[] = $category->name;
    }
    // contenu de l' affichage de la lightbox
    $photos = 
    $photo_ref = get_field('reference'); 
    $caption = '<p>' . $photo_ref . '</p><p>' . implode(', ', $category_names) . '</p>';
    ?>
    
    <a data-src="<?php // affichage de la photo en full size dans la lightbox 
    echo get_the_post_thumbnail_url() ?>" class="fancybox" data-fancybox="gallery" data-caption="<?php echo esc_attr($caption); ?>">
    </a>
</div>

<div class="overlay-single">
<a class="fancybox" data-fancybox="gallery">
        <img class='icon_fullscreen' src="<?php // Affichage de l'icône plein écran et du lien qui ouvre la lightbox
        echo get_stylesheet_directory_uri()?>/assets/images/Icon_fullscreen.png">
    </a>
<a href="<?php echo get_permalink(); ?>">
    <img class='eye-overlay' src="<?php echo get_stylesheet_directory_uri()?>/assets/images/eye-icon.png" alt=""></a>
</div>

<div class="overlay-text">
    <p class="overlay-title"><?php echo get_field('reference');?></p>
    <p class="overlay-category"><?php 
        $categories = get_the_terms(get_the_ID(), 'categorie'); 
        foreach ( (array) $categories as $category ) {
        echo $category->name . ' '; 
    }
    ?></p>  
</div>
</div>


        </figure></div>
<?php
    endwhile;
    else :
        echo "<p>Pas d'autre photo dans cette catégorie.</p>";
endif;
wp_reset_postdata();
?>

<div>



</div>