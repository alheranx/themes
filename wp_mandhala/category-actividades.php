<?php get_header(); ?>
<!--==============================      content     ================================-->


<div id="actividades" class="container-fluid mt-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center font-weight-bold mb-3 mb-md-5 text-primary">
                    Actividades
                </h2>
            </div>
        </div>


        <div class="row">




           <?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$args = array(
	// 'numberposts'      => 1,
	// 'category'         => 4, 
	'posts_per_page' => 2,
    	// 'post_status' => 'publish',
   	// 'post_type' => 'post',
    	// 'orderby' => 'post_date'
	// 'category_name' => 'HomePost'
	'paged' => $paged,
      	'page' => $paged
);


query_posts( $args );
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <div class="recent-cat">
            <h4 class="title"><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink();?>" class="readmore">Read More</a>
        </div>
        <?php
endwhile;
?>




<!-- pagination here -->
    <?php
       if (function_exists( 'custom_pagination' )) :
          custom_pagination( $product_query->max_num_pages,"",$paged );
      endif;
?>



<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>



	<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
<?php
    // wp_reset_query();
endif;



next_posts_link();
previous_posts_link();

?>


       

	</div>
    </div>
</div>

<!--==============================footer=================================-->
<?php get_footer(); ?>
