<?php get_header()?>

    <h2><?php the_title();?></h2>
    <div>
        <section>

            <?php if(have_posts( )) : ?>
            <?php while(have_posts( )) : the_post(  ); ?>

            <article>

                <div>

                    <?php if(has_post_thumbnail( )) : ?>
                    <?php the_post_thumbnail('small', ['class' => 'fluide']); ?>

                    <?php endif; ?>

                </div>

                <div>

                    <p><?php the_content( );?></p>
                    <p>D'autres artistes de la catégorie : <?php the_category( ',' );?>.</p>

                </div>
            </article>

            <?php endwhile;?>
            <?php endif; ?>
        </section>
    </div>

<?php get_footer( ) ?>