<?php get_header(); ?>


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="container-fluid fondo_pie">
            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="text-light"><?php echo get_the_title($ID); ?></h1>
                    <p class="text-light text-left"><?php echo get_the_date( $post_id ); ?></p>   
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-right p-3">            
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>
                    <?php // echo get_post_meta($post->ID, 'autor', true); ?>
                </div>
                <div class="col-12">
                    <div class="card p-3">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

    
<!--==============================footer=================================-->
<?php get_footer(); ?>