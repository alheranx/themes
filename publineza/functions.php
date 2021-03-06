<?php

global $count_per_day;
if(method_exists($count_per_day,"show")) {
    $ids = $count_per_day->getMostVisitedPostIDs( 30, 4, array(1,2,3,4,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20), false );
    echo $ids;


    echo $count_per_day->getMostVisitedPosts( 30, 4, 1, 1, 1 );
}



add_action( 'init', 'my_custom_menus' ); 

function my_custom_menus() { 
		register_nav_menus( array( 
			'menu-superior' => __( 'Menu Superior' ),
			'menu-lateral' => __( 'Menu Lateral' )
		) ); 
	}


if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
add_image_size( 'miniatura', 900, 900 );




add_filter( 'the_title', 'bold_before_colon' );
function bold_before_colon( $title ) {
if( is_sticky() && strpos( $title, ':' ) ) $title = '<span>'.preg_replace('#(:)#',':</span>',$title,1);
return $title;
}

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
// Función Leer Más
function new_excerpt_more( $more ) {
    return ' <a class="leer-mas" href="'. get_permalink( get_the_ID() ) . '">' . __('  Leer Más.', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );



function arphabet_widgets_init() {

    register_sidebars(3, array(
        'name' => __('Sidebar %d'),
        'id' => 'widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="wiget-titulo">',
        'after_title' => '</h4>'
    ));

}


add_action( 'widgets_init', 'arphabet_widgets_init' );


?>