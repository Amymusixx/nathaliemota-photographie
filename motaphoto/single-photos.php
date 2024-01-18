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

$category= '';
$terms = get_the_terms( $post->ID, 'categorie');
if ( $terms && ! is_wp_error( $terms ) ) {
    $category = $terms[0]->name;
}
$current_photo_id = get_the_ID();

$args = array(
    'post_type' => 'photos',
    'posts_per_page' => 2,
    'orderby' => 'rand',
    'tax_query' => array(
      array(
          'taxonomy' => 'categorie',
          'field' => 'slug',
          'terms' => $category,
      ),
  ),
  'post__not_in' => array($current_photo_id),
);
?>
    <?php 
    include("template-parts/photo-block.php"); ?>
    <div>
    <div class="all-photos"><button id='contact-btn'><p><a href='http://localhost:8888/nathaliemota-photographie/'>Toutes les photos</a></p></button>
    </div>
</div>



</main>


<?php get_footer(); ?>