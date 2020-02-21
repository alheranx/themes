<?php get_header(); ?>
<!--==============================      content     ================================-->


<div id="actividades" class="container-fluid mt-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center font-weight-bold mb-3 mb-md-5 text-primary">
                    Actividades
                </h2>
            </div>
        </div>


        <div class="row">


                <?php if ( have_posts() )
                    $item = 0;
                    while ( have_posts() ) : the_post(); ?>

                                            <?php
                                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'vertical');
                                            ?>

                                            <?php if ( $item < 8 ) { ?>



                                                <div class="col-12 col-md-3">
                                                    <div class="w-100 d-block shadow">
                                                        <a href="<?php the_permalink() ?>">
                                                            <img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_the_title($ID); ?>" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <h4 class="font-weight-bold mt-3">
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php  echo get_the_title($ID); ?>
                                                        </a>
                                                    </h4>
                                                    <p>
                                                    <small>
                                                        <?php echo excerptSimple(18); ?>
                                                    </small>
                                                    <br>
                                                    
                                                    <span class="text-danger font-weight-bold" style="font-size:12px;">
                                                        <?php  printf(__(get_the_date('jS F, Y'))); ?>
                                                    </span>

                                                    </p>
                                                </div>


                                                
                                                    <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                                                            <div class="shadow fondo_pie">
                                                                <a href="<?php the_permalink() ?>">
                                                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="w-100">
                                                                </a>

                                                                <div class="p-2 text-center">
                                                                    <a class="text-light" href="<?php the_permalink() ?>">
                                                                        <?php  echo get_the_title($ID); ?>
                                                                    </a>
                                                                </div>
                                                            </div>    
                                                    </div> -->

                                                <?php } ?>

                <?php $item++; endwhile; ?>

                



                <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
 
 
 
                <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

            
            





        </div>
    </div>
</div>

<!--==============================footer=================================-->
<?php get_footer(); ?>
