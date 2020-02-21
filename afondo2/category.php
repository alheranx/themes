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

        <div class="categoria__categorias">

        <h2><?php single_cat_title(); ?></h2>
            

             <?php $item = 1;  if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


                
                <?php if ($item == 1) { ?>

                    <div class="caja categoria__categorias__item">
                            <div class="categoria__categorias__item__foto">
                                    <?php
                                    $image_th = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                    ?>  
                                    <a href="<?php echo $image_url[0]; ?>" class="imagen-enlace">
                                        <img src="<?php echo $image_th[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                    </a>
                                </div>
                                

                            <div class="categoria__categorias__item__textos">
                                    <div class="categoria__categorias__item__textos__titulo">
                                            <a href="<?php echo the_permalink(); ?>">
                                                <?php echo get_the_title($ID); ?>
                                            </a>
                                        </div>

                                    <div class="categoria__categorias__item__textos__resumen">
                                                <?php echo get_the_excerpt($ID); ?>
                                        </div>
                                </div>
                        </div>

                    <?php } ?>


                    <?php if (($item > 1) && ($item < 6 )) { ?>
                        

                        <div class="caja base-100 tablet-50 categoria__categorias__item" style="height: 440px;">
                            <div class="caja categoria__categorias__item__foto">
                                    <?php
                                    $image_th = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                    ?>  
                                    <a href="<?php echo $image_url[0]; ?>" class="imagen-enlace">
                                        <img src="<?php echo $image_th[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                    </a>
                                </div>
                                

                            <div class="caja categoria__categorias__item__textos">
                                    <div class="categoria__categorias__item__textos__titulo">
                                            <a href="<?php echo the_permalink(); ?>"  style="font-size: 28px;">
                                                <?php echo get_the_title($ID); ?>
                                            </a>
                                        </div>

                                    <div class="categoria__categorias__item__textos__resumen">
                                                <?php echo get_the_excerpt($ID); ?>
                                        </div>
                                </div>
                        </div>


                    <?php } ?>
                        

                    <?php if (($item == 6)) { ?>

                    
                    <h3>Más noticias</h3>

                    <?php } ?>



                    <?php if (($item > 6) && ($item < 12 )) { ?>
                        

                        <div class="caja base-50 tablet-1-3 categoria__categorias__item" style="height: 240px;">
                            <div class="caja categoria__categorias__item__foto">
                                    <?php
                                    $image_th = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                    ?>  
                                    <a href="<?php echo $image_url[0]; ?>" class="imagen-enlace">
                                        <img src="<?php echo $image_th[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                    </a>
                                </div>
                                

                            <div class="caja categoria__categorias__item__textos">
                                    <div class="categoria__categorias__item__textos__titulo">
                                            <a href="<?php echo the_permalink(); ?>" style="font-size: 14px;">
                                                <?php echo get_the_title($ID); ?>
                                            </a>
                                        </div>
                                </div>
                        </div>


                    <?php } ?>





            <?php $item++; endwhile; ?>
        </div>
    
        <!-- <div class="caja no-padding">
            <?php the_posts_pagination( array('mid_size'  => 7, 'screen_reader_text' => '', 'prev_text' => __( 'Anterior', 'textdomain' ), 'next_text' => __( 'Siguiente', 'textdomain' ) )); ?>
        </div> 
 -->
            
    </div>




    
    <?php if (!$movil) {  get_sidebar(); } ?>

</div><!-- main -->


<!--==============================footer=================================-->
<?php get_footer(); ?>