<?php

$movil = false;
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $movil = true;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $movil = true;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $movil = true;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $movil = true;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $movil = true;
    }
}

// $movil = true;

?>



<?php if (!$movil) { get_header(); } else { get_header('movil'); }?>



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

    <div class="caja tablet-75">

        <div class="single__entrada__categoria">
            <?php the_category(', '); ?>
        </div>     
        

            <div class="single__entrada">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <h1 class="caja base-100 single__entrada__titulo"><?php echo get_the_title($ID); ?></h1>

                        <div class="caja base-100 single__entrada__fecha">
                            <?php the_author_posts_link(); ?> | <span class="icon icon-fecha"> </span> <?php echo the_date('l, F j, Y'); ?>
                        </div>
                       

                        <div class="caja base-100 single__entrada__contenido">
                                <?php the_content(); ?>
                        </div>



                        <div class="grupo single__entrada__ads">
                
                            <div class="caja base-50">
                                <script src='https://www.googletagservices.com/tag/js/gpt.js'>
                                 googletag.pubads().definePassback('/44924376/afondoedomex_300x250', [300, 250]).display();
                                </script>

                            </div>

                            <div class="caja base-50">
                                <script src='https://www.googletagservices.com/tag/js/gpt.js'>
                                  googletag.pubads().definePassback('/153254371/300x250', [300, 250]).display();
                                </script>
                            </div>

                        </div>


                        <div class="grupo single__tags">
                            <div class="caja">
                                Etiquetas: <?php the_tags( "", ", ", "" ); ?>
                            </div>
                        </div>

                <?php endwhile; ?>
            </div>

            
            

            <div class="entrada-sola-redes-sociales">
                <div class="redes-sociales-like">
                    <div id="fb-root"></div>
                    <script src="http://connect.facebook.net/es_ES/all.js#appId=123282127724030&amp;xfbml=1"></script>
                    <fb:like href="" send="false" layout="button_count" width="730" show_faces="false" font="trebuchet ms"></fb:like>       
                </div>
                

                <div id="fb-root"></div>
                <script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script>
                <fb:comments href=<?php $dominio="http://afondoedomex.aplicaciones.io"; echo $dominio.$_SERVER['REQUEST_URI']; ?> num_posts="10" width="100%"></fb:comments>    
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

                <div class="caja base-25 single__relacionadas__item">
                                
                    <div class="single__relacionadas__item__imagen">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="single__relacionadas__item__titulo">
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
<?php get_footer(); ?>