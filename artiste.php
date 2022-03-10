<?php get_header() ?>

    <?php if(is_archive()) : ?>

        <h2><?php echo esc_html(get_the_category()[0]->name) ?></h2>

    <?php else : ?>
        
        <h2>Accueil</h2>

    <?php endif; ?>

<?php get_footer( ) ?>