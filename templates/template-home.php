<?php
/*
Template Name: Gabarit accueil
*/
?>

    <?php get_header();?>

<?php
    /* Méthode permettant l'acquisition du dernier post */
    $args = array(
    'posts_per_page'      => 1,
    'post__in'            => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1,
    );
    $query = new WP_Query( $args );
?>

<div class="flex">
    <section class="trois-quart">

        <?php if($query->have_posts()) :?>
        <?php while($query->have_posts()) : $query->the_post( );?>

        <!--Statique-->

        <article class="flex">
            <div class="trois-quart">
                <h2>Bienvenue sur Concerto !</h2>
                <p>Concerto est un blog dédié à l’univers de la musique. Il s’agit d’un blog à caractère informatif, sur lequel vous trouverez des articles ayant principalement pour objectif de vous informer sur des artistes. Concerto est entretenue quotidiennement, par des passionné(e)s de musique bien entendu, mais également du web en général. Nous essayons de publier des articles le plus souvent possible, et nous vous invitons par ailleurs, à nous suggérer vos idées d’articles.</p>
            </div>
        </article>

        <h2>Le dernier article :</h2>
            <article class="flex">
            <!--Image article-->
                <div class="quart">
                    <?php if(has_post_thumbnail( )) :?>
                        <?php the_post_thumbnail('small', ['class' => 'fluide']);?>
                    <?php endif;?>
                </div>
            <!--Article (titre + Contenus)-->
            <div class="trois-quart">
                <h3><?php the_title( );?></h3>
                <p><?php the_excerpt();?><a href="<?php the_permalink();?>">En savoir plus ...</a></p>
                <p><?php the_tags()?></p>
            </div>
        </article>

        <?php endwhile;?>
        <?php endif;?>

    </section>

    <!--Sidebar-->
    <section class="quart sidebar">
        <?php get_sidebar(  ); ?>
    </section>
</div>

<?php get_footer();?>