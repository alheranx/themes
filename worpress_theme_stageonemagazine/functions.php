<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



@ini_set( 'upload_max_size' , '15M' );

add_action( 'init', 'my_custom_menus' ); 
function my_custom_menus() { 
		register_nav_menus( array( 
            'primary' => __( 'Primary Menu', 'THEMENAME' ),
			'menu-superior' => __( 'Menu Superior' ),
			'menu-lateral' => __( 'Menu Lateral' )
		) ); 
	}

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
add_image_size( 'principal', 960, 300, true);
add_image_size( 'vertical', 500, 700, true);
add_image_size( 'thumbnail_hm', 300, 300 );
// add_image_size( 'mini', 45, 30, true );
// add_image_size( 'mini2', 90, 66, true );


/* ============================= Personalizamos el largo del excerpt. === */
function excerptSimple($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
}

/* ============================= Personalizamos el largo del excerpt. === */
function afondo_resumen_largo( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'afondo_resumen_largo', 999 );

/* ============================= Personalizamos la función leer más. === */
function nuevo__leer__mas( $more ) {
    return ' <a class="leer-mas" href="'. get_permalink( get_the_ID() ) . '">' . __(' ... ', 'afondoedomex.com') . '</a>';
}
add_filter( 'excerpt_more', 'nuevo__leer__mas' );





function cuantas( $query ) {
        if ( is_category() ) {
        // Display only 1 post for the original blog archive
        $query->set( 'posts_per_page', 100 );
        return;
    }
}
add_action( 'pre_get_posts', 'cuantas', 1 );
?>
