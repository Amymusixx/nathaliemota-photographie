<figure class="post-thumbnail" >
    
            
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

</div>

<div class="overlay-single"><figcaption><p id="button-fullscreen" data-fancybox="gallery" data-src="<?php // affichage de la photo en full size dans la lightbox 
    echo get_the_post_thumbnail_url() ?>" data-caption="<?php echo esc_attr($caption); ?>"><img class='icon_fullscreen' src="<?php // Affichage de l'icône plein écran et du lien qui ouvre la lightbox
    echo get_stylesheet_directory_uri()?>/assets/images/Icon_fullscreen.png"></p></figcaption>
<a href="<?php echo get_permalink(); ?>">
    <img class='eye-overlay' src="<?php echo get_stylesheet_directory_uri()?>/assets/images/eye-icon.png" alt=""></a>
</div>

<div class="overlay-text">
    <p class="overlay-title"><?php echo get_field('reference');?></p>
    <p class="overlay-category"><?php 
        $categories = get_the_terms(get_the_ID(), 'categorie'); // get_the_ID() récupère l'ID du post actuel dans la boucle WordPress.
        foreach ( (array) $categories as $category ) {
        echo $category->name . ' '; 
    }
    ?></p>  
</div>
</div>


        </figure>