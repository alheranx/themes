<?php get_header(); ?>
<!--==============================      content     ================================-->

<section id="main" class="grupo">
    
    <div id="main" class="caja tablet-70">


        <!--============================== entradas-chicas-portada =================================-->
        
            
        <div class="grupo productos">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <?php if ( in_category( 'videos' )) { ?>
                    
                    <div class="caja notas-generales__videos">
                        <?php echo get_post_meta($post->ID, 'autor', true); ?>
                        <iframe src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'video', true); ?>" frameborder="0" allowfullscreen>
                        </iframe>
                        <!-- <div class="notas-generales__leermas"><a href="?p=<?php the_ID(); ?>">Leer más >></a></div> -->
                    </div>
                        
                <?php } elseif ( in_category( array( 'fotos' ) )) { ?>
                        
                        <div class="caja base-100 movil-50 tablet-1-3 web-25 notas-generales__galeria">
                            <a href="<?php the_permalink(); ?>"/>
                                <?php echo get_the_post_thumbnail( $post_id, 'thumbnail' ) ?>

                            <!-- <div class="notas-generales__leermas"><a href="?p=<?php the_ID(); ?>">Leer más >></a></div> -->
                        </div>

                <?php } else { ?>

                        <?php if (has_post_thumbnail()) { ?>
                            <h2 class="notas-generales__titulo"><a href="?p=<?php the_ID(); ?>"><?php echo get_the_title($ID); ?></a></h2>
                            <div class="notas-generales__fecha"><?php echo "Publicado el día "; ?><?php  printf(__(get_the_date('jS F, Y'))); ?></div>

                            <div class="grupo">
                                <div class="caja tablet-30">
                                    <?php echo get_the_post_thumbnail( $post_id, 'thumnail' ); ?>
                                </div>

                                <div class="caja tablet-70 no-padding">
                                    <div class="notas-generales__texto"><?php echo get_the_excerpt($ID); ?></div>
                                    <div class="notas-generales__leermas"><a href="<?php the_permalink() ?>">Leer más >></a></div>
                                </div>
                            </div>

                        <?php } else { ?>

                            <div class="notas-generales__item">
                                <h2 class="notas-generales__titulo"><a href="?p=<?php the_ID(); ?>"><?php echo get_the_title($ID); ?></a></h2>
                                <div class="notas-generales__fecha"><?php echo "Publicado el día "; ?><?php  printf(__(get_the_date('jS F, Y'))); ?></div>
                                
                                    <div class="notas-generales__texto"><?php echo get_the_excerpt($ID); ?></div>
                                    <div class="notas-generales__leermas"><a href="<?php the_permalink(); ?>">Leer más >></a></div>
                            </div>

                        <?php } ?>

                        
                
                    <?php } ?>

                


              <!--  
            <div class="caja productos__detalle item">
                <a href="?p=<?php the_ID(); ?>" class="productos__detalle__imagen">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </a>
                
                <div class="productos__detalle__descripcion">
                    <?php echo get_the_title($ID); ?>
                </div>
                
            </div>
            -->
            
            <?php endwhile; ?>
        </div>



       

    </div>


    <?php get_sidebar('menu'); ?>
</section>













		



<!--==============================footer=================================-->
<?php get_footer(); ?>