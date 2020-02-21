<?php get_header(); ?>

<!--==============================Contenidos=================================-->

<div class="grupo single">

    <div class="caja tablet-70 single__entrada">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <h1 class="single__entrada__titulo"><?php echo get_the_title($ID); ?></h1>

                    
                                        
                    <div class="single__entrada__contenido">
                            <?php the_content(); ?>
                    </div>

            <?php endwhile; ?>   

            

            <div class="caja base-100 anuncio720">
                <div class="anuncio720__anuncio">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- diarioedomex.com (nota individual 2) -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-5933170404538438"
                         data-ad-slot="6201963508"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>

    </div>

    
    <div class="caja tablet-30 no-padding">
        <?php get_sidebar('page'); ?>    
    </div>

</div><!-- main -->


<!--==============================footer=================================-->
<?php get_footer(); ?>