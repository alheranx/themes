<?php get_header(); ?>
<!--==============================      content     ================================-->

<div class="grupo">

    <div class="caja tablet-70">
        
        <div class="busqueda">
                <h2 class="busqueda__titulo">Resultado de la busqueda: <b><?php echo get_search_query(); ?></b></h2>
            

                 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
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
        
            <div class="caja no-padding">
                <?php the_posts_pagination( array('mid_size'  => 7, 'screen_reader_text' => '', 'prev_text' => __( 'Anterior', 'textdomain' ), 'next_text' => __( 'Siguiente', 'textdomain' ) )); ?>
            </div>
    </div>
    

    <div class="caja tablet-30">
        <?php get_sidebar('single'); ?>    
    </div>

</div>       
<!--==============================footer=================================-->
<?php get_footer(); ?>