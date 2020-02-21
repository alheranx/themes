<?php



add_theme_support( 'post-thumbnails' );

add_image_size( 'mini', 50, 50, true ); // Hard Crop Mode
add_image_size( 'thumbnail2', 150, 105 ); // Soft Crop Mode
add_image_size( 'vertical', 300, 600,true); // Soft Crop Mode


function dame_ids() {
    global $count_per_day;

    if(method_exists($count_per_day,"show")) {
        $categories_ids = array(1,2,3,4,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
        $ids = $count_per_day->getMostVisitedPostIDs( 30, 4, $categories_ids, false );
        
        return $ids;
    }
}


function dame_id_categoria($categoria) {
    global $count_per_day;

    if(method_exists($count_per_day,"show")) {
        $ids = $count_per_day->getMostVisitedPostIDs( 30, 4, $categoria, false );
        
        return $ids;
    }
}




add_action( 'init', 'my_custom_menus' ); 

function my_custom_menus() { 
		register_nav_menus( array( 
			'menu-superior' => __( 'Menu Superior' ),
            'menu-inferior' => __( 'Menu Inferior' ),
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
    return 30;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
// Función Leer Más
function new_excerpt_more( $more ) {
    return ' <a class="leer-mas" href="'. get_permalink( get_the_ID() ) . '">' . __('...  Leer Más >>', 'your-text-domain') . '</a>';
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


// Counter Plugin

?>