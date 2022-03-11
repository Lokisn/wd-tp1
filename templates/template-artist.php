<?php
/*
Template Name: Gabarit artiste
*/
?>

<?php get_header();?>

<?php

    $args = array(
        'category__not_in' => 1
    );

    $query = new WP_Query($args);

?>

<div class="flex">
    <section class="trois-quart">

        <?php if($query->have_posts()) :?>
        <?php while($query->have_posts()) : $query->the_post( );?>

        <article class="flex">
            <!--Image article-->
            <div class="quart">
                <?php if(has_post_thumbnail( )) :?>
                    <?php the_post_thumbnail('small', ['class' => 'fluide']);?>
                <?php endif;?>
            </div>

            <!--Article (titre + Contenus)-->
            <div class="texte-article trois-quart">
                <h3><?php the_title( );?></h3>
                <p><?php the_excerpt();?><a href="<?php the_permalink();?>">En savoir plus ...</a></p>
                <p><?php the_tags()?></p>
            </div>
        </article>

        <?php endwhile;?>
        <?php endif;?>

    </section>
    <section class="quart sidebar">
        <?php get_sidebar(  ); ?>
    </section>
</div>

<?php get_footer();?>