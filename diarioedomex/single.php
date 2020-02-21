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

                    <div class="single__entrada__fecha">
                        <?php the_author();?> | <?php echo the_date('l, F j, Y'); ?>
                    </div>
                    
                    <div class="compartir-enlaces">
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <h3>Comparte esta nota</h3>
                        <div class="addthis_inline_share_toolbox_uy15"></div>
                    </div>     
                                    
                                        
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


            <div class="entrada-sola-redes-sociales">
                <div class="redes-sociales-like">
                    <div id="fb-root"></div>
                    <script src="http://connect.facebook.net/es_ES/all.js#appId=123282127724030&amp;xfbml=1"></script>
                    <fb:like href="" send="false" layout="button_count" width="730" show_faces="false" font="trebuchet ms"></fb:like>       
                </div>
                

                <div id="fb-root"></div>
                <script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script>
                <fb:comments href=<?php $dominio="http://diarioedomex.com"; echo $dominio.$_SERVER['REQUEST_URI']; ?> num_posts="10" width="100%"></fb:comments>    
            </div>       
    </div>

    
    <div class="caja tablet-30 no-padding">
        <?php get_sidebar('single'); ?>    
    </div>

</div><!-- main -->


<!--==============================footer=================================-->
<?php get_footer(); ?>