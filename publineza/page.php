<?php get_header(); ?>

<section id="main" class="grupo">
    
    <div id="main" class="caja tablet-70">


        <!--============================== entradas-chicas-portada =================================-->
        

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div class="entrada-sola">
                <!-- <h1><?php echo get_the_title($ID); ?></h1> -->
                <div class="entrada-sola-autor"><?php echo get_post_meta($post->ID, 'autor', true); ?></div>
                <div class="entrada-sola-entrada"><?php the_content(); ?></div>
            </div>
            

        <?php endwhile; ?>      

       

    </div>


    <?php get_sidebar('menu'); ?>
</section>






		



<!--==============================footer=================================-->
<?php get_footer(); ?>