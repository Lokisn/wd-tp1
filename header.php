<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class( ); ?>>
    
<?php wp_body_open(  )?>
    <header>
        <div>
            <section>
                <h1></h1>
                <div></div>
            </section>
            <nav>
                <?php 
                    $args = array(
                        'theme_location' => 'main_menu'
                    );

                    wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </header>

    <div>
        <form action="<?php echo esc_url(home_url('/'))?>" methods="get">
            <input type="text" name="s" placeholder="Rechercher">
        </form>
    </div>

<main>