<?php get_header(); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c53c0bac5e16c0"></script>

<!-- Comment #2: SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Comment #4: Plugin Code -->
<div class="fb-quote"></div>

<!--==============================Contenidos=================================-->

<div class="grupo single">

    <div class="caja tablet-70 single__entrada">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <h1 class="single__entrada__titulo"><?php echo get_the_title($ID); ?></h1>


                    <div class="single__entrada__contenido">
                        <div class="caja tablet-10">
                            <div class="single__entrada__contenido__fecha">
                                    <div class="single__entrada__contenido__fecha__dia"><?php the_time('j') ?></div>
                                    <div class="single__entrada__contenido__fecha__mes"><?php the_time('M') ?></div>
                                </div>

                            <div class="addthis_inline_share_toolbox"></div>
                        </div>


                        <div class="caja tablet-90">
                            <?php the_content(); ?>
                        </div>
                    </div>

            <?php endwhile; ?>   

            <p><?php echo do_shortcode("
                        [CPD_READS_THIS] veces leído por [CPD_VISITORS_TOTAL] visitantes.
                        Visitas hoy: [CPD_VISITORS_TODAY], 
                        ayer: [CPD_VISITORS_YESTERDAY], 
                        esta semana: [CPD_VISITORS_LAST_WEEK], 
                        este mes: [CPD_VISITORS_THIS_MONTH]
                    "); ?></p>

            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="grupo single__entrada__compartir">
                <div class="caja">
                    <h3>¡Comparte esta nota!</h3>
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
            </div>

            <div class="grupo single__tags">
                <div class="caja">
                    <h3>Navega más noticias por etiqueta.</h3>
                    <?php the_tags( "", "", "" ); ?>
                </div>
            </div>

            


            <div class="google-728x90">

                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Publineza Single -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-3270149665082192"
                     data-ad-slot="2124776539"
                     data-ad-format="link"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <!--
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                < publineza01 >
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-5659532259318174"
                     data-ad-slot="3958103695"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                -->
            </div>


            <div class="entrada-sola-redes-sociales">
                <div class="redes-sociales-like">
                    <div id="fb-root"></div>
                    <script src="http://connect.facebook.net/es_ES/all.js#appId=123282127724030&amp;xfbml=1"></script>
                    <fb:like href="" send="false" layout="button_count" width="730" show_faces="false" font="trebuchet ms"></fb:like>       
                </div>
                

                <div id="fb-root"></div>
                <script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script>
                <fb:comments href=<?php $dominio="http://publineza.com.mx"; echo $dominio.$_SERVER['REQUEST_URI']; ?> num_posts="10" width="100%"></fb:comments>    
            </div>       
    </div>

    
    <div class="caja tablet-30 no-padding">
        <?php get_sidebar('single'); ?>    
    </div>

</div><!-- main -->


<!--==============================footer=================================-->
<?php get_footer(); ?>