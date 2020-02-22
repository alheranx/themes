<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function your_themes_pagination(){
    global $wp_query; 
    echo paginate_links();
}

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





//function cuantas( $query ) {
//        if ( is_category() ) {
//        // Display only 1 post for the original blog archive
//        $query->set( 'posts_per_page', 100 );
//        return;
//    }
//}
//add_action( 'pre_get_posts', 'cuantas', 1 );


/**
 * Posts per page for CPT archive
 * prevent 404 if posts per page on main query
 * is greater than the posts per page for product cpt archive
 *
 * thanks to https://sridharkatakam.com/ for improved solution!
 */

function prefix_change_cpt_archive_per_page( $query ) {

    //* for cpt or any post type main archive
    if ( $query->is_main_query() && ! is_admin() && is_post_type_archive( 'product' ) ) {
        $query->set( 'posts_per_page', '2' );
    }

}
add_action( 'pre_get_posts', 'prefix_change_cpt_archive_per_page' );

/**
 *
 * Posts per page for category (test-category) under CPT archive
 *
*/
function prefix_change_category_cpt_posts_per_page( $query ) {

    if ( $query->is_main_query() && ! is_admin() && is_category( 'test-category' ) ) {
        $query->set( 'post_type', array( 'product' ) );
        $query->set( 'posts_per_page', '2' );
    }

}
add_action( 'pre_get_posts', 'prefix_change_category_cpt_posts_per_page' );


/**
*
* custom numbered pagination
* @http://callmenick.com/post/custom-wordpress-loop-with-pagination
*
*/
function custom_pagination( $numpages = '', $pagerange = '', $paged='' ) {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   *
   * It's good because we can now override default pagination
   * in our theme, and use this function in default queries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /**
   * We construct the pagination arguments to enter into our paginate_links
   * function.
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}
?>
