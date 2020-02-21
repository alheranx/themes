<?php get_header(); ?>
<!--==============================		content		================================-->


<div class="container">
    <div class="row mb-3">
            <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                                <?php $active = true; $my_query = new WP_Query('category_name=slider_principal'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                    
                                    <?php
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                                    ?>
                                    
                                    <div class="carousel-item<?php if($active) echo " active" ?>">
                                        <a href="?p=<?php the_ID(); ?>" class="text-light">
                                            <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="d-block w-100" alt="...">
                                            <div class="text-center d-block p-2 pt-md-2 pb-md-1 text-light texto-principal" style="background: #9D2310; border-top: #399320 4px solid;">
                                                <?php echo get_the_title($ID); ?>
                                                <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                                            </div>
                                        </a>
                                    </div>

                                <?php $active = false; endwhile; ?>
                        </div>
                        
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>
    </div>
</div>

<!-- <section id="banner" class="grupo banner">
    
    <div class="caja slider">
        <ul class="bxslider">

            <?php $my_query = new WP_Query('category_name=slider_principal'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
                <?php
                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                ?>

                <a href="?p=<?php the_ID(); ?>">
                    <li><img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" width="770px">
                        <div class="bxslider__title"><?php echo get_the_title($ID); ?></div>
                    </li>
                </a>

            <?php endwhile; ?>
        </ul>
    </div>

</section> -->



<div class="grupo contenedor">


<section id="main" class="grupo">
    <!-- &category_name=notas-generales -->
    <div id="notas-generales" class="caja tablet-70 notas-generales">

        
        <!-- ESTO ES EL ANUNCIO 468 x 60 -->
        <?php $my_query = new WP_Query('category_name=ads_468x60'); if($my_query->have_posts()) { ?>

            <div class="grupo slider no-padding">
                <ul class="caja s468x60">

                    <?php while ($my_query->have_posts()) : $my_query->the_post(); $enlace = get_post_meta($post->ID, 'enlace', true); ?>
                        
                        <?php if( !empty($enlace) ) { ?>
                            <li>
                                <a href="<?php echo $enlace; ?>" target="_blank">
                                    <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li><?php echo get_the_post_thumbnail( $post_id, 'full' ); ?></li>
                        <?php } ?>

                    <?php endwhile; ?>

                </ul>
            </div>

        <?php } ?>




      <?php 
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $my_query = new WP_Query('posts_per_page=50&paged=' . $paged ); while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <?php if(  !in_category('slider_principal') && !in_category('ads_728x90') && !in_category('ads_300x250') && !in_category('ads_300x600') && !in_category('ads_300x600_2') && !in_category('ads_300x600_3') && !in_category('ads_468x60') && !in_category('fotos') && !in_category('videos')  ) { ?>
        <div class="notas-generales__item">
            <h2 class="notas-generales__titulo"><a href="?p=<?php the_ID(); ?>"><?php echo get_the_title($ID); ?></a></h2>
            <div class="notas-generales__fecha"><?php echo "Publicado el día "; ?><?php  printf(__(get_the_date('jS F, Y'))); ?></div>

                <?php if (has_post_thumbnail()) { ?>
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

                    <div class="notas-generales__texto"><?php echo get_the_excerpt($ID); ?></div>
                    <div class="notas-generales__leermas"><a href="<?php the_permalink() ?>">Leer más >></a></div>

                <?php } ?>
        </div>
      <?php } endwhile; ?>

        <div class="nav-previous alignleft"><?php next_posts_link( 'Entradas Anteriores' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Entradas Recientes' ); ?></div>
    </div>


    
    <?php get_sidebar('menu'); ?>
    
</section>





    

<!--==============================footer=================================-->
<?php get_footer(); ?>