<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />  
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />      
        
     </head>
<body>

<script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=137215506714246";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    !function(a,b){"use strict";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf("MSIE 10"),h=!!navigator.userAgent.match(/Trident.*rv:11\./),i=b.querySelectorAll("iframe.wp-embedded-content");for(c=0;c<i.length;c++){if(d=i[c],!d.getAttribute("data-secret"))f=Math.random().toString(36).substr(2,10),d.src+="#?secret="+f,d.setAttribute("data-secret",f);if(g||h)a=d.cloneNode(!0),a.removeAttribute("security"),d.parentNode.replaceChild(a,d)}}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d.secret||d.message||d.value)if(!/[^a-zA-Z0-9]/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll('iframe[data-secret="'+d.secret+'"]'),k=b.querySelectorAll('blockquote[data-secret="'+d.secret+'"]');for(e=0;e<k.length;e++)k[e].style.display="none";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute("style"),"height"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if(~~g<200)g=200;f.height=g}if("link"===d.message)if(h=b.createElement("a"),i=b.createElement("a"),h.href=f.getAttribute("src"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener("message",a.wp.receiveEmbedMessage,!1),b.addEventListener("DOMContentLoaded",c,!1),a.addEventListener("load",c,!1)}(window,document);
</script>


<div class="irarriba">
    <a href="#"><span class="icon icon-flecha"></span></a>
</div>


<div class="grupo contenedor padding-2">

<header>

    <div class="anuncio720__wrapper">
        <div class="grupo anuncio720">
            <div class="caja base-12 anuncio720">
                <div class="anuncio720__anuncio">
                    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
                    <!-- Primera página - 1 (afondoedomex.com) -->
                    <ins class='adsbygoogle' style='display:block;background:none!important;' data-ad-client='ca-pub-5933170404538438' data-ad-slot='2298315508' data-ad-format='auto'></ins>
                    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                </div>
            </div>
        </div>
    </div>

    <div class="grupo fecha">
        <script>
            var mesArray = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
            var diasArray = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
            var fecha = new Date();
            document.write( "<em>" + diasArray[fecha.getDay()] + ", " + fecha.getDate() + " de " + mesArray[fecha.getMonth()] + " de " + fecha.getFullYear() + "</em>" );
        </script>
        </div> 

    <div class="grupo notas-encabezado borde-abajo">
        <div class="caja web-25">
            <h1>
                <a href="<?php echo home_url(); ?>" class="notas-encabezado__logo">
                    <span>Periódico A Fondo - Noticias del Estado de México.</span>
                </a>
            </h1>
        </div>


        <?php 

            if (is_home()) $argumentosEncabezado = array('category_name' => 'historias-fondo', 'posts_per_page' => '3', );
                    else $argumentosEncabezado = array('category_name' => 'principal', 'posts_per_page' => '3', );

                $my_query = new WP_Query($argumentosEncabezado); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    
                    <?php
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                    ?>

                    <div class="caja web-25 borde-derecha">
                            <div class="notas-encabezado__item">
                                <a href="?p=<?php the_ID(); ?>" class="notas-encabezado__item__imagen">
                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                </a>

                                <h3>
                                    <a href="?p=<?php the_ID(); ?>" class="notas-encabezado__item__titulo">
                                        <?php echo get_the_title($ID); ?>
                                    </a>      
                                </h3>

                                <div class="grupo no-padding notas-encabezado__item__linea">
                                    <div class="notas-encabezado__item__categoria">
                                        <?php if (is_home()) { ?>
                                            <a href="category/historias-fondo/">Historias @ fondo</a>
                                        <?php } else { ?>
                                            <a href="category/principal/">Principal</a>
                                        <?php } ?>
                                    </div>

                                    <!-- <div class="caja base-50">
                                        <div class="notas-encabezado__item__categoria">
                                            Historias @ fondo
                                        </div>
                                    </div>
                                    <div class="caja base-50">
                                        <div class="notas-encabezado__item__fecha">
                                            <b class="icon icon-fecha"></b> <?php the_time('j') ?> de <?php the_time('M') ?>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                    </div>


                <?php endwhile; 
            ?>


    </div>


    <div class="grupo">
        <div class="menu-toggle">
            <div class="menu-toggle__menu-icon">
               <a class="menu-toggle__menu-icon__icono icon icon-inicio" href="<?php echo home_url(); ?>"></a>
               <a class="menu-toggle__menu-icon__icono icon icon-menu"></a>
               <a class="menu-toggle__menu-icon__icono icon icon-lupa"></a>
            </div>
        </div>

        <div id="buscador" class="buscadormovil">
            <form action="<?php echo home_url( '/' ); ?>" method="get" class="menusearch">
                <div class="caja base-70">
                    <input type="text" name="s" id="search" placeholder="<?php _e("Buscar...","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="buscadormovil__input" />    
                </div>
                
                <div class="caja base-30">
                    <button type="submit" class="buscadormovil__enviar"> Buscar </button>
                </div>

            </form>
        </div>

        <div class="caja">
            <nav id="menu-principal" class="caja menu-principal no-padding">
                <?php wp_nav_menu( array('theme_location' => 'menu-superior' ) );  ?>

                <form action="<?php echo home_url( '/' ); ?>" method="get" class="menusearch">

                    <button type="submit" class="icon icon-lupa"></button>
                    
                    <input type="text" name="s" id="search" placeholder="<?php _e("Buscar...","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="buscador__input" />

                </form>
            </nav>
        </div>
    </div>

</header>