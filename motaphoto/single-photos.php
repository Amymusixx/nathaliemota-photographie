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
    <div class='photo-img'>
    <?php the_post_thumbnail();?>
    </div>  
</div>

<div class='photo-contact'>
    <div class='contact'>
        <div><p>Cette photo vous intéresse ?</p>
</div>
<div id="div-contact"><button id='contact-btn'><p>Contact</p></button>
</div>
    </div>
    <div class='gallery'>
    </div>
</div>

<div class='linked-photos'>
    <div>
        <p class='description-photo'>Vous aimerez aussi<p>
    </div>
    <div class='linked-photos-gallery'>
    </div>
    <div>
    </div>
</div>

</main>


<?php get_footer(); ?>