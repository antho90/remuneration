<?php
add_theme_support('post-thumbnails');

function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __('Menu principal'));
}
add_action( 'init', 'enregistre_mon_menu');


function wpb_add_google_fonts() {
 
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap', false ); 

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@1,200&display=swap', false ); 
    }
    
     
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
    