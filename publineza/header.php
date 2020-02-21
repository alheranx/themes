<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />        

        <link href="<?php bloginfo('template_directory'); ?>/owl-carousel/owl.carousel.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_directory'); ?>/bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">

        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/modal/magnific-popup.css">
     </head>

<!-- 21981383687677 -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84041837-1', 'auto');
  ga('send', 'pageview');

</script>

<body class="">

    <div class="grupo wrapper">

        <header id="encabezado">
            
            <div class="encabezado">
                <div class="caja web-30 no-padding desde-web">
                        <h1 class="encabezado__titulo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="encabezado__titulo__enlace">
                                <span><?php bloginfo( 'name' ); ?></span>
                            </a>
                        </h1>
                    </div>


                <div class="caja web-70 no-padding">
                            <?php
                            $args = array('category_name' => 'banner-superior', 'posts_per_page' => '1', );
                            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post();
                                

                                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                $enlace = get_post_meta($post->ID, 'enlace', true);
                                
                                    if($enlace) { ?>
                                        <a href="<?php echo get_post_meta($post->ID, 'enlace', true); ?>" target="_blank">
                                            <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="encabezado__banner">
                                        </a>
                                    <?php } else { ?>
                                            <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="encabezado__banner">
                                        <?php } ?>
                            <?php endwhile; ?>
                    </div>
            </div>
            
            
            <div class="menu-toggle">
                <h1 class="menu-toggle__titulo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="menu-toggle__titulo__enlace">
                        <span><?php bloginfo( 'name' ); ?></span>
                    </a>
                </h1>

                <div class="menu-toggle__menu-icon">
                    <a class="menu-toggle__menu-icon__icono" data-icon="M"></a>
                </div>
            </div>

            <nav id="menu-principal" class="caja menu-principal no-padding">
                <!--
                <div class="menu-principal__home desde-web">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/img/home.png" alt="">
                        </a>
                    </div>
                -->

                <?php wp_nav_menu( array('theme_location' => 'menu-superior' ) );  ?>
            </nav>

        </header>


        <!--==============================BUSCAR=================================-->
        <div class="grupo buscar">
            
            <div class="caja tablet-1-3 buscar__calendario">
                    <?php if ( dynamic_sidebar('widget') ) : else : endif; ?>
            </div>

            <div class="caja tablet-1-3 buscar__tags">
                    <?php if ( dynamic_sidebar('widget-2') ) : else : endif; ?>
            </div>

            <div class="caja tablet-1-3 buscar__formulario">
                <?php if ( dynamic_sidebar('widget-3') ) : else : endif; ?>
            </div>
        </div>
