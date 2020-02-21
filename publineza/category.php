<?php get_header(); ?>
<!--==============================      content     ================================-->

<div class="grupo categoria">

    <div class="caja tablet-70 no-padding">
        
        <div class="categoria__categorias">
                <h2>Mostrando: <b><?php echo single_cat_title(); ?></b></h2>
            

                <?php 
                
                 if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <div class="caja base-100 movil-50 tablet-100 categoria__categorias__item">
                        <div class="caja base-20 tablet-20 categoria__categorias__item__foto">
                                <?php
                                $image_th = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                ?>  
                                <a href="<?php echo $image_url[0]; ?>" class="imagen-enlace">
                                    <img src="<?php echo $image_th[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                </a>
                            </div>
                            

                        <div class="caja base-70 tablet-80 categoria__categorias__item__textos">
                                <div class="categoria__categorias__item__textos__titulo">
                                        <a href="<?php echo the_permalink(); ?>">
                                            <?php echo get_the_title($ID); ?>
                                        </a>
                                    </div>

                                <div class="categoria__categorias__item__textos__resumen">
                                        <div class="caja tablet-15 no-padding">
                                            <div class="categoria__categorias__item__textos__resumen__fecha">
                                                <span class="categoria__categorias__item__textos__resumen__fecha__dia"><?php the_time('j') ?></span>
                                                <span class="categoria__categorias__item__textos__resumen__fecha__mes"><?php the_time('M') ?></span>
                                            </div>
                                        </div>

                                        <div class="caja tablet-85 categoria__categorias__item__textos__resumen__textos">
                                            <?php echo get_the_excerpt($ID); ?>
                                        </div>
                                    </div>
                            </div>
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