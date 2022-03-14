<?php get_header()?>

    <h2>Résultat(s) de la recherche</h2>

    <div class="flex">
            <section class="trois-quart">

            <?php if(have_posts( )) : ?>
            <?php while(have_posts( )) : the_post(  ); ?>

                <article class="flex">

                    <div class="quart">

                        <?php if(has_post_thumbnail(  )) : ?>
                            
                            <?php the_post_thumbnail('small', ['class' => 'fluide']); ?>

                        <?php endif; ?>

                    </div>

                    <div class="trois-quart">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt();?> <a href="<?=the_permalink();?>"> En savoir plus... </a> </p>
                        <p><?php the_tags()?></p>
                    </div>

                </article>

            <?php endwhile;?>
            <?php endif; ?>
            </section>
        </div>
        
<?php get_footer()?>