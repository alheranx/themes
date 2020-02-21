<?php get_header(); ?>


<!--==============================		NOTAS PRINCIPALES		================================-->
<?php $my_query = new WP_Query('posts_per_page=1&category_name=principal');
while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <?php
    // $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'principal');
    ?>

    <div class="container-fluid bg-info p-0 shadow mb-5">
        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="w-100">

        <div class="d-block p-3 pl-5 pr-5">
            <h2 class="d-block">
                <a class="text-light" href="<?php the_permalink() ?>">
                    <?php echo get_the_title($ID); ?>
                </a>
            </h2>

            <div class="d-block">
                <?php echo excerptSimple(18); ?>
            </div>
        </div> 
    </div>

<?php endwhile; ?>





<div class="container">
    <div class="row mt-3">
        <?php $my_query = new WP_Query('posts_per_page=3&category_name=portada');
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php
            $image_url_dos = wp_get_attachment_image_src(get_post_thumbnail_id(), 'vertical');
            ?>

            <div class="col-12 col-sm-6 col-md-4">
                    <div class="fondo_pie shadow">
                        <a href="<?php the_permalink() ?>">
                            <img src="<?php echo $image_url_dos[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="w-100">
                        </a>

                        <div class="p-2 text-center">
                            <a class="text-light" href="<?php the_permalink() ?>">
                                <?php echo get_the_title($ID); ?>
                            </a>
                        </div>
                        
                        
                        <?php // echo excerptSimple(18); ?>
                    </div>    
            </div>

        <?php endwhile; ?>
    </div>
</div>
<!--
<section id="main" class="grupo">
    
    <div id="notas-generales" class="caja tablet-70 notas-generales">

        
      
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $my_query = new WP_Query('posts_per_page=50&paged=' . $paged);
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php if (!in_category('slider_principal') && !in_category('ads_728x90') && !in_category('ads_300x250') && !in_category('ads_300x600') && !in_category('ads_300x600_2') && !in_category('ads_300x600_3') && !in_category('ads_468x60') && !in_category('fotos') && !in_category('videos')) { ?>
                <div class="notas-generales__item">
                    <h2 class="notas-generales__titulo"><a href="?p=<?php the_ID(); ?>"><?php echo get_the_title($ID); ?></a></h2>
                    <div class="notas-generales__fecha"><?php echo "Publicado el día "; ?><?php printf(__(get_the_date('jS F, Y'))); ?></div>

                        <?php if (has_post_thumbnail()) { ?>
                                <div class="grupo">
                                    <div class="caja tablet-30">
                                        <?php echo get_the_post_thumbnail($post_id, 'thumnail'); ?>
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
          <?php }
    endwhile; ?>

        <div class="nav-previous alignleft"><?php next_posts_link('Entradas Anteriores'); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link('Entradas Recientes'); ?></div>
    </div>


    
    
    
</section>

                -->




<?php 
?>
<!--==============================footer=================================-->
<?php get_footer(); ?>