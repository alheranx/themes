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
        <link href="https://file.myfontastic.com/uHjoP9uXYfaAoNwzPjZyam/icons.css" rel="stylesheet">
     </head>

<body>


<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>


<header class="grupo total header">
    
    <div class="grupo">
        <div class="caja base-20 web-15">
            <a href="http://tornillostoreo.com">
                <img class="header__logotipo" src="<?php echo get_template_directory_uri(); ?>/img/logo_tornillos.png" alt="<?php bloginfo('name'); ?>"/>
            </a>
        </div>

        <div class="caja base-80 web-85 header__contenedor">
            <div class="header__titulo">
                <h2>Comercializadora y Distribuidora de</h2>
                <h1><a href="http://tornillostoreo.com">Tornillos y Herramientas Toreo S.A. de C.V.</a></h1>
            </div>

            <div class="header__contenedor__facebook">
                <a href="https://www.facebook.com/cdthsa.655" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_facebook.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
        </div>

    </div>
</header>

<div class="menu-toggle">
    <div class="menu-toggle__menu-icon">
       <a class="menu-toggle__menu-icon__icono icon icon-bars"></a>
    </div>
</div>

<nav id="menu-principal" class="grupo total menu-principal">
    <div class="grupo">
        <?php wp_nav_menu( array('theme_location' => 'menu-superior' ) );  ?>

        <form action="<?php echo home_url( '/' ); ?>" method="get" class="menusearch">

            <button type="submit" class="icon icon-search"></button>
            
            <input type="text" name="s" id="search" placeholder="<?php _e("Buscar...","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="buscador__input" />

        </form>
    </div>
</nav>