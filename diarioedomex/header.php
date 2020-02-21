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
        <link href="<?php bloginfo('template_directory'); ?>/hmfonts/styles.css" rel="stylesheet">
     </head>


<?php 
    // Declarar Variables
    $secciones = array("zona-de-los-volcanes", "zona-oriente", "zona-norte", "valle-de-mexico", "valle-de-toluca", "valle-de-ecatepec-texcoco");

    // Si es post
    if ( is_single() ) {
        $categorias = get_the_category( $post->ID );

        for($i = 0; $i <= (count($categorias) -1); $i++ ) {

            for($s = 0; $s <= (count($secciones) - 1); $s++ ) {
                //echo "<h1>".$secciones[$s]." vs ".$categorias[$i]->slug."</h1>";
                if( $secciones[$s] == $categorias[$i]->slug ) {
                    $clase_maestra = $secciones[$s];
                }
            }

        }
    }
    //Si es category
    elseif(is_category()) {
            $cat = get_category( get_query_var( 'cat' ) );
            //$clase_maestra = $cat->slug;

            for($s = 0; $s <= (count($secciones) - 1); $s++ ) {
                //echo "<h1>".$secciones[$s]." vs ".$categorias[$i]->slug."</h1>";
                if( $secciones[$s] == $cat->slug ) {
                    $clase_maestra = $secciones[$s];
                }
                else {
                    $clase_maestra = "logotipo-publineza";
                }
            }
    } 

    else {
        $clase_maestra = "logotipo-publineza";
    }
?>
<body class="<?php echo $clase_maestra; ?>">


<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>


    <div class="grupo">

        <header id="encabezado">
            
            <div class="encabezado">

                <div class="caja base-100 anuncio720">
                    <div class="anuncio720__anuncio">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- diarioedomex.com (portada 1) -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-5933170404538438"
                             data-ad-slot="1911364708"
                             data-ad-format="auto"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>

                <div class="caja base-100 movil-100 tablet-70 web-1-3 enlace-zona">
                        <?php wp_nav_menu( array('theme_location' => 'menu-lateral' ) );  ?>
                    </div>

                <div class="caja base-50 tablet-30 web-1-3">

                        <h1 class="encabezado__titulo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="encabezado__titulo__enlace">
                                <span><?php bloginfo( 'name' ); ?></span>
                                <img src="<?php bloginfo('template_directory'); ?><?php echo "/img/".$clase_maestra.".png"; ?>" alt="">
                            </a>
                        </h1>

                    </div>


                <div class="caja base-50 tablet-30 web-1-3 bloque-fecha">
                        <?php
                            $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                         
                           $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
                               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
                        ?>

                        <div class="caja encabezado__fecha">
                            <span class="encabezado__fecha__anexo">
                                Hoy es <?php echo $arrayDias[date('w')]; ?>, 
                            </span>
                            <span class="encabezado__fecha__fecha"> 
                                <?php echo date('d'); ?> de <?php echo $arrayMeses[date('m')-1]; ?> de <?php echo date('Y'); ?></span>
                        </div>

                        
                        <div class="caja redes-sociales">
                            <a href="https://www.facebook.com/Diario-Edomex-979012268894819">
                                <b class="icon icon-facebook-square"></b><br>
                                <i>4</i>
                            </a>

                            <a href="https://twitter.com/diarioedomex">
                                <b class="icon icon-twitter-square"></b><br>
                                <i>1</i>
                            </a>

                            <a href="https://www.youtube.com/channel/UCfWlqWT57Ax3npc6nWyOCPQ">
                                <b class="icon icon-youtube-square"></b><br>
                                <i>1</i>
                            </a>
                        </div>
                    </div>
            </div>
            
            
            <div class="menu-toggle">
                <div class="menu-toggle__menu-icon">
                   <a class="menu-toggle__menu-icon__icono icon icon-bars"></a>
                </div>
            </div>

            <nav id="menu-principal" class="caja menu-principal no-padding">
                <?php wp_nav_menu( array('theme_location' => 'menu-superior' ) );  ?>

                <form action="<?php echo home_url( '/' ); ?>" method="get" class="menusearch">

                    <button type="submit" class="icon icon-search"></button>
                    
                    <input type="text" name="s" id="search" placeholder="<?php _e("Buscar...","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="buscador__input" />

                </form>
            </nav>

        </header>


        <!--==============================BUSCAR=================================-->
        
        <div class="grupo buscar">
            
            <div class="caja tablet-1-3 buscar__formulario">
                    <?php if ( dynamic_sidebar('widget') ) : else : endif; ?>
            </div>

            <div class="caja tablet-1-3 buscar__calendario">
                    <?php if ( dynamic_sidebar('widget-2') ) : else : endif; ?>
            </div>

            <div class="caja tablet-1-3 buscar__tags">
                <?php if ( dynamic_sidebar('widget-3') ) : else : endif; ?>
            </div>

        </div>

