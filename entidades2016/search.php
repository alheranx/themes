<?php get_header(); ?>
<!--==============================      content     ================================-->

<section id="main" class="grupo">
    
    <div id="main" class="caja tablet-70">


        <!--============================== entradas-chicas-portada =================================-->
        
            
        <div class="grupo productos">

            
            <h1>Resultados de la busqueda</h1>
            <?php 
                    $wp_query->set('post_type', 'post');   
                    
                    if ( have_posts() ) while ( have_posts() ) : the_post();
                    
                    // if (is_search() && ($post->post_type=='page')) continue;

                    if ( is_search() ) continue;
                ?>
            
                <div class="notas-generales__item">
                    <h2 class="notas-generales__titulo"><a href="?p=<?php the_ID(); ?>"><?php echo get_the_title($ID); ?></a></h2>
                        <div class="notas-generales__texto"><?php echo get_the_excerpt($ID); ?></div>
                        <div class="notas-generales__leermas"><a href="?p=<?php the_ID(); ?>">Leer más >></a></div>
                </div>

            <?php endwhile; ?>


        </div>



       

    </div>


    <?php get_sidebar('menu'); ?>
</section>













		



<!--==============================footer=================================-->
<?php get_footer(); ?>