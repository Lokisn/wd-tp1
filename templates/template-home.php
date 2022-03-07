<?php
/*
Template Name: Gabarit accueil
*/
?>

<?php get_header();?>

<?php

    $args = array(
        'category__not_in' => 1
    );

    $query = new WP_Query($args);

?>

<div>
    <section>

        <?php if($query->have_posts()) :?>
        <?php while($query->have_posts()) : $query->the_post( );?>

        <article>
            <!--Image article-->
            <div>
                <?php if(has_post_thumbnail( )) :?>
                    <?php the_post_thumbnail('small', ['class' => 'fluide']);?>
                <?php endif;?>
            </div>

            <!--Article (titre + Contenus)-->
            <div>
                <h3><?php the_title( );?></h3>
                <p><?php the_excerpt();?></p>
            </div>
        </article>

        <?php endwhile;?>
        <?php endif;?>

    </section>

</div>

<?php get_footer();?>