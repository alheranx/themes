<?php get_header(); ?>

<!--============================== Portada Slidrs =================================-->
<div class="grupo busqueda">
    
    <div class="caja base-100">
        <h2 class="busqueda__titulo">
            Categoría <?php the_category(', '); ?>
        </h2>
    </div>

    <div class="caja base-100 web-75">            
            <?php
            $args = array('cat' => the_category_ID(false), 'posts_per_page' => '4', );
            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
                <div class="caja base-50 movil-50 tablet-1-3 busqueda__item">
                        
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                        ?>

                        <div class="busqueda__item__imagen">
                            <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="">    
                        </div> 
                        

                        
                        <a href="?p=<?php the_ID(); ?>" class="busqueda__item__titulo">
                                <?php echo get_the_title($ID); ?></a>

                    </div>


            <?php endwhile; ?>
    </div>
    

    <div class="caja web-30">
        <?php get_sidebar(); ?>
    </div>    
</div>

      
<!--==============================footer=================================-->
<?php get_footer(); ?>