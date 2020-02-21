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

<style>
    
</style>        
        
     </head>
<body>


<div class="irarriba">
    <a href="#"><span class="icon icon-flecha"></span></a>
</div>


<div class="grupo contenedor padding-2">

<header>

    <div class="grupo">
        <div class="caja">
            <?php if(!es_entrada_antigua()) { ?>
        
                <div data-glade data-ad-unit-path="/44924376/afondoedomex_300x250" height="250" width="300"></div>

                <script async='async' src='https://securepubads.g.doubleclick.net/static/glade.js'></script>

            <?php } else { echo "<br>"; }?>
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


    <div class="grupo">
        <div class="menu-toggle">
            <div class="menu-toggle__menu-icon">
               <a class="menu-toggle__menu-icon__icono">Menú</a>
            </div>

            <div class="menu-toggle__menu-logo">
                <a class="menu-toggle__menu-logo__icono icon icon-afondo" href="<?php echo home_url(); ?>"></a>
            </div>
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