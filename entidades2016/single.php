<?php get_header(); ?>

<section id="main" class="grupo">
    
    <div id="main" class="caja tablet-70">


        <!--============================== entradas-chicas-portada =================================-->
        

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div class="single">
                <h1 class="single__titulo"><?php echo get_the_title($ID); ?></h1>
                <div class="single__fecha"><?php echo get_the_date( $post_id ); ?></div>

                <div class="single__autor"><?php echo get_post_meta($post->ID, 'autor', true); ?></div>
                <div class="single__entrada"><?php the_content(); ?></div>
            </div>
            

        <?php endwhile; ?>     
        
        <br><br><br>


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




        <div id="disqus_thread" class="comentarios"></div>
        
        <script>
        var disqus_config = function () {
            this.page.url = '<?php echo get_permalink( $post->ID ); ?>'; // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = '<?php echo dsq_identifier_for_post($post); ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');

        s.src = '//entidadesmexico.disqus.com/embed.js';

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Porfavor habilite Javascript para poder ver los <a href="https://disqus.com/?ref_noscript" rel="nofollow">comentarios soportados por Disqus.</a></noscript>

       

    </div>


    <?php get_sidebar('menu'); ?>
</section>






		



<!--==============================footer=================================-->
<?php get_footer(); ?>