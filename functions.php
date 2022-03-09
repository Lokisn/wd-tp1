<?php 

// Feuille de style + Fonts 

function concerto_enqueue_styles() {
    // Ajout de google Fonts avec une variable 
    wp_enqueue_style( 'cookiefont', 'https://fonts.googleapis.com/css2?family=Cookie&display=swap' );

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/styles/main.css', array('cookiefont') );
}

add_action( 'wp_enqueue_scripts', 'concerto_enqueue_styles' );

// Supports de thème :
function concerto_add_theme_support(){
    add_theme_support( 'post-thumbnails' );

    // Titre adaptatif pour la page 
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'concerto_add_theme_support' );

// Déclarer les menus : 
function concerto_register_menus(){

    register_nav_menus( array(
        'main-menu' => __('Menu principal')
    ));
}

add_action( 'after_setup_theme', 'concerto_register_menus');

// Widgets : 
function concerto_widgets_init($id){
    register_sidebar( array(
        'name' => 'Widget 1',
        'id' => 'widget-1',
        'description' => 'Widget affiché en haut du Sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'
    ));

    register_sidebar( array(
        'name' => 'Widget 2',
        'id' => 'widget-2',
        'description' => 'Widget affiché en bas du Sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'
    ));
}

add_action( 'widgets_init', 'concerto_widgets_init' );


?>