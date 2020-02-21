<?php get_header(); ?>
<!--==============================      content     ================================-->


<div class="container pt-5">
    <div class="row">

                    

        <?php if ( have_posts() )
            $item = 0;
            while ( have_posts() ) : the_post(); ?>

            <?php
            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'vertical');
            ?>

            <?php if ( $item < 8 ) { ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <div class="shadow fondo_pie">
                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="w-100">
                                </a>

                                <div class="p-2 text-center">
                                    <a class="text-light" href="<?php the_permalink() ?>">
                                        <?php  echo get_the_title($ID); ?>
                                    </a>
                                </div>
                                
                                <?php  // printf(__(get_the_date('jS F, Y'))); ?>
                                <?php // echo excerptSimple(18); ?>
                            </div>    
                    </div>

            <?php } ?>

        <?php $item++; endwhile; ?>
    </div>
</div>


<!--==============================footer=================================-->
<?php get_footer(); ?>
