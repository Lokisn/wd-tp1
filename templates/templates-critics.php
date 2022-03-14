<?php
/*
Template Name: Gabarit critiques
*/
?>

<?php
    $args = array(
        'category_name' => 'Review'
    );
    $query = new WP_Query($args);
?>

    <?php get_header();?>

<div class="flex">
    <section class="trois-quart">

        
        <article class="flex">
            <div class="trois-quart">
                <h2>Quelques critiques :</h2>

                    <?php if($query->have_posts()) :?>
                    <?php while($query->have_posts()) : $query->the_post( );?>

                        <div class="review-bloc quart">
                            <h3><?php the_title( );?></h3>
                            <p><?php the_content();?></p>
                        </div>
                        
                    <?php endwhile;?>
                    <?php endif;?>

            </div>


            <div class="trois-quart">
                <h2>Écrire une critique :</h2>
                <form action="">
                    <textarea placeholder="Émettre une critique..."rows="4" cols="50"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </article>
    </section>

    <section class="quart sidebar">
        <?php get_sidebar(  ); ?>
    </section>
</div>

<?php get_footer();?>
