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

$movil = true;

?>



<?php if (!$movil) { get_header(); } else { get_header('movil'); }?>







<div class="grupo portada">
    
    <div class="grupo main caja base-100 web-75">
        <!--    ===================================== SLIDER ========================================   -->    
        <?php if (!$movil) { get_template_part('template-slider'); } else { get_template_part('template-slider-movil'); }?>


        <?php if (!$movil) { ?>
        <!--    ===================================== SLIDER ========================================   -->   
        <div class="grupo tres-anuncios">
            <div class="caja base-1-3">
                <img src="https://i2.wp.com/afondoedomex.com/wp-content/uploads/2016/03/Banner-Anunciate-Afondo-2.jpg?fit=260%2C200" alt="">
            </div>
            <div class="caja base-1-3">
                <img src="https://i2.wp.com/afondoedomex.com/wp-content/uploads/2016/03/BannerApp-2.jpg?fit=260%2C200" alt="">
            </div>
            <div class="caja base-1-3">
                <img src="https://i2.wp.com/afondoedomex.com/wp-content/uploads/2016/03/Fuentes-Confidenciales260x2002-2.jpg?fit=260%2C200" alt="">
            </div>
        </div> 

        <div class="grupo">
            <div class="caja base-100 anuncio720 fondo-gris">
                <div class="anuncio720__anuncio">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Anuncio-Central afondoedomex.mx -->
                    <ins class="adsbygoogle"
                         style="display:block;background:none !important;"
                         data-ad-client="ca-pub-5933170404538438"
                         data-ad-slot="7493566706"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                </div>
            </div>
        </div>


        <div class="grupo">
            <div class="caja base-100-anuncio720 fondo-gris">
                <div class="anuncio720__anuncio">
                    <script src='https://www.googletagservices.com/tag/js/gpt.js'>
                      googletag.pubads().definePassback('/44924376/afondoedomex_728x90', [728, 90]).display();
                    </script>

                </div>
            </div>
        </div>

        <?php } ?>



        <!--============================== Notas Generales =================================-->
        <div class="generales">
                <?php 
                $post_number = 1;
                $args = array('posts_per_page' => '15', 'cat' => '-5960,-9242', 'offset' => '2');
                $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        
                    <?php 
                        if($post_number == 2) {
                            $args2 = array('posts_per_page' => '1', 'category_name' => '9242');

                            $my_query2 = new WP_Query($args2); while ($my_query2->have_posts()) : $my_query2->the_post();
                                get_template_part('template-vertical');
                            endwhile;

                        } else {
                            get_template_part('template-generales');
                        } 
                    ?>

                    <?php $post_number++; endwhile; ?>     
        </div>
        

        <div class="grupo videoslider">

            <div class="caja base-100 videoslider__titulo">
                @fondotv
            </div>

            <div id="reproductor" class="caja base-60 videoslider__reproductor">
            </div>
            
            <div id="videoslist" class="caja base-40 videoslider__lista">
                
            </div>

        </div>

    </div>
    



    
    <?php if (!$movil) {  get_sidebar(); } ?>
    
</div>




<?php if (!$movil) { get_template_part('template-footerslider'); } ?>
<?php if (!$movil) { get_footer(); } else { get_footer('movil'); }?>