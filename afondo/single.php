<?php $movil = esMovil(); ?>
<?php if (!$movil) { get_header(); } else { get_header('movil'); }?>
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
    
    <div class="caja base-100 web-75">

        <div class="single__entrada__categoria">
            <?php the_category(', '); ?>
        </div>     
        

        <div class="single__entrada">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    
                    <h1 class="caja single__entrada__titulo"><?php echo get_the_title($ID); ?></h1>
                    
                    <?php contador_visitas( get_the_ID() ); ?>

                    <div class="caja single__entrada__fecha">
                        <?php the_author_posts_link(); ?> | <span class="icon icon-fecha"> </span> <?php echo the_date('l, F j, Y'); ?>
                    </div>
                   
                    

                    <div class="caja tablet-100">
                        <div class="addthis_inline_share_toolbox_uy15"></div>
                    </div>


                    
                

                    <div class="single__entrada__contenido">
                        <?php 
                            // the_content();
                            $arrayContent = explode('</p>', apply_filters('the_content', get_the_content()));

                            for ($i = 0; $i < count($arrayContent); $i++) {

                                if ($i == 1) { ?>

                                    <?php if(!es_entrada_antigua()) { ?>
                                        <div class="single__entrada__contenido__banner">


                                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                            <!-- Banner-fijo-Afondo -->
                                            <ins class="adsbygoogle"
                                            style="display:inline-block;width:300px;height:250px"
                                            data-ad-client="ca-pub-5933170404538438"
                                            data-ad-slot="6918110307"></ins>
                                            <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                            </script>

                                            
                                        </div>
                                    <?php } ?>
                                <?php }
                            
                                echo $arrayContent[$i];
                            } 
                        ?>                            
                    </div>

            <?php endwhile; ?>
        </div>


        

        <?php if(!es_entrada_antigua()) { ?>

        <div class="single__entrada__ads">
            <div class="caja base-100 tablet-50">
                <div class="single__entrada__ads__item">
                    <div data-glade data-ad-unit-path="/44924376/afondoedomex_300x250" height="250" width="300"></div>

                    <script async='async' src='https://securepubads.g.doubleclick.net/static/glade.js'></script>
                </div>
            </div>

            <div class="caja base-100 tablet-50 desde-web">
                <div class="single__entrada__ads__item">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Notas dos (afondoedomex.com) -->
                    <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-5933170404538438"
                    data-ad-slot="7149683900"
                    data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>

        <?php } ?>


        <div class="single__tags">
                Etiquetas: <?php the_tags( "", ", ", "" ); ?>
        </div>



        <div>
            <div class="caja tablet-100">
                <div class="addthis_inline_share_toolbox_uy15"></div>
            </div>

            <!-- <div class="caja tablet-50">
                <div class="generales__social__likes">
                    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-layout="button_count" data-show-faces="false" data-send="false"></div>
                </div>

                <div class="generales__social__contador">
                    <span class="icon icon-comentarios"></span>
                    <span class="fb-comments-count comentarios col-md-2 col-xs-2" data-href="<?php the_permalink() ?>"></span>
                </div>        
            </div> -->
        </div>

            
            

        <div class="entrada-sola-redes-sociales">
            <div id="fb-root"></div>
            <script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script>
            <fb:comments href=<?php $dominio="http://afondoedomex.com"; echo $dominio.$_SERVER['REQUEST_URI']; ?> num_posts="10" width="100%"></fb:comments>    
        </div> 



        <?php 
        $rel = wp_get_post_tags($post->ID);?>
        <div class="grupo single__relacionadas">
        <div class="caja single__relacionadas__titulo">
            Notas relacionadas
        </div>


        <?php
        if ($rel) {
        $first_rel = $rel[0]->term_id;
        $arreglo=array(
        'tag__in' => array($first_rel),
        'post__not_in' => array($post->ID),
        'posts_per_page'=>4,
        'caller_get_posts'=>1
        );

        $my_rel = new WP_Query($arreglo);
        if( $my_rel->have_posts() ) {
        while ($my_rel->have_posts()) : $my_rel->the_post(); ?>

        <div class="caja base-100 movil-50 web-25 single__relacionadas__item">
                        
            <div class="caja base-50 web-100 single__relacionadas__item__imagen">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="caja base-50 tablet-100 single__relacionadas__item__titulo">
                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wpzoom' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
            </div>
        </div>
                        
        <?php
        endwhile;
        }else{ ?>
          <div class="12">No hay entradas relacionadas</div>
          <?php
        }
        wp_reset_query();
        }?>
        </div>


            
    </div>




    
    <?php if (!$movil) {  get_sidebar(); } ?>

</div><!-- main -->


<!--==============================footer=================================-->
<?php if (!$movil) { get_footer(); } else { get_footer('movil'); }?>