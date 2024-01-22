

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
        <div>
            <?php include("overlay.php") ?>
        </div>
<?php
    endwhile;
    else :
        echo "<p>Pas d'autre photo dans cette catégorie.</p>";
endif;
wp_reset_postdata();
?>
</div>