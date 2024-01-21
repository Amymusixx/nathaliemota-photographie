<div id="lightbox" style="display = none">
    

    <div class="lightbox-content">
        <span class="lightbox__close" id="close-lightbox">X</span>
    <div class='arrow-prev'>
    <p>Précédente</p>
    <img src= <?php echo get_stylesheet_directory_uri() . '/assets/images/arrow-left-white.png' ?>?>
        </div>
        <div class='arrow-next'>
            <p>Suivante</p>
        <img src= <?php echo get_stylesheet_directory_uri() . '/assets/images/arrow-right-white.png' ?>?>
        </div>
        <img id="lightbox-image" src='<?php echo get_the_post_thumbnail_url(); ?>'
        
        <div class="lightbox-infos">
            <div><p class=" photo-ref">
            <?php echo get_post_meta(get_the_ID(), 'reference', true); ?>
            </p></div>
            <div><p class="photo-cat" id="lightbox-category">
                <?php the_terms(get_the_ID(), 'categorie')?>
            </p></div>
        </div>
    </div>
</div>