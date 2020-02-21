<?php get_header(); ?>

<!--==============================Contenidos=================================-->

<div class="grupo">

    <div class="caja tablet-70 pagina">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <h1 class="pagina__titulo"><?php echo get_the_title($ID); ?></h1>

                    
                                        
                    <div class="pagina__contenido">
                            <?php the_content(); ?>
                    </div>

            <?php endwhile; ?>   
    </div>

    
    <div class="caja tablet-30">
        <?php get_sidebar(); ?>    
    </div>

</div><!-- main -->


<!--==============================footer=================================-->
<?php get_footer(); ?>