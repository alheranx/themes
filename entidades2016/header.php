<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link href="https://file.myfontastic.com/KUYKroc5tq66pKBS5auRCH/icons.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/shadowbox.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('template_directory'); ?>/bxslider/jquery.bxslider.css" rel="stylesheet" />

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-58075493-1', 'auto');
          ga('send', 'pageview');

        </script>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '608150022683933');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=608150022683933&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>



<body class="">

  <div class="subir">
    <a href="#encabezado" class="icon-arrow-circle-up">
    </a>
  </div>

  <div id="barra-movil">
      <a target="_blank" href="https://www.facebook.com/" class="social icon-facebook-circled"></a>
      <a target="_blank" href="https://twitter.com/" class="social icon-twitter-circled"></a>

      <a href="#" id="toggle-menu" class="icon-bars">
	<img src="http://entidades.com.mx/wp-content/uploads/2017/08/white_menu_icon.png" width="50px">
	</a>
  </div>

  <nav id="menu-principal" class="menu-principal">
    <?php wp_nav_menu( array('theme_location' => 'menu-superior' ) );  ?>
  </nav>



<!-- contenedor: es la caja general con fondo blanco y sombra gris -->
<!-- header: contendrá el encabezado y los menús superiores -->
<header id="encabezado" class="encabezado">
  
  
  <div class="grupo encabezado__bloque tablet-tabla medio">
    <div class="caja movil-100 tablet-30">
      <div class="encabezado__logo">
          <a href="index.php">
            <img src="<?php bloginfo('template_directory'); ?>/images/logotipo-entidades.jpg" alt="">
          </a>
      </div>
    </div>


    <div class="caja base-100 tablet-70 encabezado__direccion">
      
        <?php $my_query = new WP_Query('category_name=ads_728x90'); if($my_query->have_posts()) { ?>

            <div class="caja slider no-padding">
                <ul class="s728x90">

                    <?php while ($my_query->have_posts()) : $my_query->the_post(); $enlace = get_post_meta($post->ID, 'enlace', true); ?>
                        
                        <?php if( !empty($enlace) ) { ?>
                            <li>
                                <a href="<?php echo $enlace; ?>" target="_blank">
                                    <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li><?php echo get_the_post_thumbnail( $post_id, 'full' ); ?></li>
                        <?php } ?>

                    <?php endwhile; ?>

                </ul>
            </div>

        <?php } ?>

    </div>

  </div>


  <nav id="menu-principal2" class="menu-principal2">
    <div class="grupo">
      <?php wp_nav_menu( array('theme_location' => 'menu-superior' ) );  ?>
    </div>
  </nav>
</header>