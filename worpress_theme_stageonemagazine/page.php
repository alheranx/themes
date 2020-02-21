<?php get_header(); ?>


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="container-fluid bg-info">
            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="text-light"><?php echo get_the_title($ID); ?></h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-5 mb-5 p-5">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

    
<!--==============================footer=================================-->
<?php get_footer(); ?>