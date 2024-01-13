<?php get_header(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<main class="main-content">
<div class='photo-single'> 
<div class='photo-infos'>
    <div class='photo-fields'>
    <h2 class='photo-title'><?php the_title();?></h2>
    <p class='description-photo'>Référence : <?php the_field('reference');?></p>
    <p class='description-photo'>Catégorie : <?php the_terms(get_the_ID(), 'categorie')?></p>
    <p class='description-photo'>Format : <?php the_terms(get_the_ID(), 'format')?></p>
    <p class='description-photo'>Type : <?php the_field('type');?></p>
    <p class='description-photo'>Année : <?php $post_date = get_the_date( 'Y' ); echo $post_date;?></p>
</div>
    </div>
    <div class="photo-img">
            <?php the_post_thumbnail(); ?>
            <figcaption class='overlay-fullscreen'>
            <svg class="fullscreen-overlay" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                    <circle cx="17" cy="17" r="17" fill="black"/>
                    <line x1="15" y1="10.5" x2="10" y2="10.5" stroke="white"/>
                    <line y1="-0.5" x2="5" y2="-0.5" transform="matrix(-1 8.74227e-08 8.74227e-08 1 15 24)" stroke="white"/>
                    <line x1="9.5" y1="16" x2="9.5" y2="10" stroke="white"/>
                    <line y1="-0.5" x2="6" y2="-0.5" transform="matrix(4.37114e-08 1 1 -4.37114e-08 10 18)" stroke="white"/>
                    <line y1="-0.5" x2="5" y2="-0.5" transform="matrix(1 -8.74227e-08 -8.74227e-08 -1 19 10)" stroke="white"/>
                    <line y1="-0.5" x2="6" y2="-0.5" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 24 16)" stroke="white"/>
                    <line x1="19" y1="23.5" x2="24" y2="23.5" stroke="white"/>
                    <line x1="24.5" y1="18" x2="24.5" y2="24" stroke="white"/>
                </svg>
        </figcaption>
        </div>
</div>

<div class='photo-contact'>
    <div class='contact'>
        <div><p>Cette photo vous intéresse ?</p>
</div>
<div id="div-contact"><button id='contact-btn'><p>Contact</p></button>
</div>
    </div>
    <div class="container-nav-photo">
          <div class="photo-nav-photo">
            <?php
            $prev_post_thumbnail = get_the_post_thumbnail_url(get_adjacent_post(false, '', true)->ID, 'thumbnail');
            $next_post_thumbnail = get_the_post_thumbnail_url(get_adjacent_post(false, '', false)->ID, 'thumbnail');
            ?>
            <img class="prev-thumbnail" src="<?php echo esc_url($next_post_thumbnail); ?>" alt="">
            <img class="next-thumbnail" src="<?php echo esc_url($prev_post_thumbnail); ?>" alt="">
          </div>  
          <div class="arrows-nav-photo">
            <div class="arrow-nav-photo arrow-left">
            <?php  next_post_link('<div class="prev" data-thumbnail-url=' . esc_url($next_post_thumbnail) . '">%link</div>', ''); ?>
            </div>
            <div class="arrow-nav-photo arrow-right">
            <?php  previous_post_link('<div class="next" data-thumbnail-url=' . esc_url($prev_post_thumbnail) . '">%link</div>', ''); ?>

            </div>
          </div>
</div>
</div>
<div class='linked-photos'>
    <div>
        <p class='description-photo'>Vous aimerez aussi<p>
    </div>
    <?php 
    include("template-parts/photo-block.php"); ?>
    <div>
    <div class="all-photos"><button id='contact-btn'><p><a href='http://localhost:8888/nathaliemota-photographie/'>Toutes les photos</a></p></button>
    </div>
</div>



</main>


<?php get_footer(); ?>