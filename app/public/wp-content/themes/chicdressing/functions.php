<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );



function unload_parent_google_fonts() {
    // Déchargez les polices Google Fonts du thème parent uniquement si vous avez des polices personnalisées à utiliser à la place
    // Sinon, laissez les fonctions vides comme ci-dessous
}
add_action( 'wp_enqueue_scripts', 'unload_parent_google_fonts', 999 );

// Vous n'avez pas besoin de modifier le contenu des fonctions ci-dessous si vous ne remplacez pas les polices
function ashe_playfair_display_font_url() {
    $font_url = '';
    return $font_url;
}

function ashe_open_sans_font_url() {
    $font_url = '';
    return $font_url;
}

function ashe_kalam_font_url() {
    $font_url = '';
    return $font_url;
}

function ashe_rokkitt_font_url() {
    $font_url = '';
    return $font_url;
}

 