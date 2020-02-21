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

    <div class="caja tablet-70 single__producto">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    
                    <div class="caja base-100">
                        <h1 class="single__producto__titulo"><?php echo get_the_title($ID); ?></h1>

                    </div>

                    <div class="caja base-50">
                        <div class="single__producto__contenido">
                            <?php the_post_thumbnail($ID); ?>
                                <?php //the_content(); ?>
                        </div>
                    </div>

                    <div class="caja base-50 single__producto__descripcion">
                        <h3>Descripción del producto</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum cum inventore id, illo, nobis dolor aperiam ea deserunt fugiat consectetur!</p>

                        <div class="single__producto__like">
                                <div id="fb-root"></div>
                                <script src="http://connect.facebook.net/es_ES/all.js#appId=123282127724030&amp;xfbml=1"></script>
                                <fb:like href="" send="false" layout="button_count" width="730" show_faces="false" font="trebuchet ms"></fb:like>       
                        </div> 
                    </div>

            <?php endwhile; ?>   


            

            <div class="caja base-100 single__compartir">
                <h3>Comparte esta producto con tus amigos</h3>
                <div class="addthis_inline_share_toolbox_uy15"></div>
            </div>           
    </div>

    
    <div class="caja tablet-30 no-padding">
        <?php get_sidebar(); ?>
    </div>

</div><!-- main -->


<!--==============================footer=================================-->
<?php get_footer(); ?>