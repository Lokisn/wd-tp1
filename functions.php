<?php 

// Feuille de style + Fonts 

function concerto_enqueue_styles() {
    // Ajout de google Fonts avec une variable 
    wp_enqueue_style( 'cookiefont', 'https://fonts.googleapis.com/css2?family=Cookie&display=swap' );

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/styles/main.css', array('cookiefont') );
}

add_action( 'wp_enqueue_scripts', 'concerto_enqueue_styles' )

?>