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

</main>
<?php get_footer(); ?>