<?php
/* ============================= Función para reconocer tipo de dispositivo === */
function esMovil(){
    if(isset($_SERVER['HTTP_USER_AGENT']) and !empty($_SERVER['HTTP_USER_AGENT'])){
       $user_ag = $_SERVER['HTTP_USER_AGENT'];
       if(preg_match('/(Mobile|Android|Tablet|GoBrowser|[0-9]x[0-9]*|uZardWeb\/|Mini|Doris\/|Skyfire\/|iPhone|Fennec\/|Maemo|Iris\/|CLDC\-|Mobi\/)/uis',$user_ag)){
          return true;
       } else {
          return false;
          //return true;
       };
    } else{
       return false;
    };
}


/* ============================= Añadimos soporte de thumbnails y creamos 3 nuevos tipos de tamaño. === */
add_theme_support( 'post-thumbnails' );
add_image_size( 'mini', 45, 30, true );
add_image_size( 'mini2', 90, 66, true );
add_image_size( 'thumbnail2', 150, 105 );
add_image_size( 'slider', 700, 427,true);
add_image_size( 'vertical', 300, 600,true);



/* ============================= Añadimos Menús personalizados para la parte superior e inferior === */
add_action( 'init', 'my_custom_menus' ); 

function my_custom_menus() { 
		register_nav_menus( array( 
			'menu-superior' => __( 'Menu Superior' ),
      'menu-inferior' => __( 'Menu Inferior' )
		) ); 
	}


/* ============================= Añadimos soporte para los thumbnailes o imagenes destacadas. === */
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
add_image_size( 'miniatura', 900, 900 );

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


/* ============================= Soporte para widgets y colocar el top 10, y uno adicional por si acaso. === */
function afondo_widgets() {

    register_sidebars(2, array(
        'name' => __('Sidebar aFondo %d'),
        'id' => 'afondo',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="wiget-titulo">',
        'after_title' => '</h4>'
    ));

}
add_action( 'widgets_init', 'afondo_widgets' );

/* ============================= Función que crea conteo. === */
function contador_visitas($id) {
    $metakey = 'zeta_contador_visitas';
    $cuantos = get_post_meta($id, $metakey, true);

    if($cuantos==''){
        delete_post_meta($id, $metakey);
        add_post_meta($id, $metakey, '0');
    }else{
        $cuantos++;
        update_post_meta($id, $metakey, $cuantos);
    }
}


/* ============================= Función comprobar fecha antigua. === */

function es_entrada_antigua() {

  if( is_single() ) {
      $timestamp_limit = 1488326400;
      $timestamp_post = get_the_time( 'U', get_the_ID() );

      if ( $timestamp_post > $timestamp_limit ) {
          return false;
      }

      else {
        return true;
      }
  }
  else {
    return false;
  }
}

?>