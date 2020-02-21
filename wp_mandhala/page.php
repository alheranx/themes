<?php get_header(); ?>


<div class="page">
    <div class="container">


        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div class="row">
                <div class="col-12">
                    <h2 class="text-center font-weight-bold mt-3 mb-3 mt-md-5 mb-md-5 p-3 p-md-5 text-primary page__title">
                   
                   
                        <?php echo get_the_title($ID); ?>

                        
                    </h2>
                </div>
            </div>


            <div class="row">
                <div class="col-12 pl-md-5 pr-md-5 page__content">
                    

                    <?php the_content(); ?>


                </div>
            </div>

        <?php endwhile; ?>

    </div>
</div>



    
<!--==============================footer=================================-->
<?php get_footer(); ?>