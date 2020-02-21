<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

	<script src="https://kit.fontawesome.com/ed16a084b6.js"></script>
	<title><?php wp_title(); ?></title>
</head>



<?php 
    // Declarar Variables
    $secciones = array("portada", "sin-categoria", "escenarios", "musica", "nuevos-rostros", "personajes", "television", "teatro");

    // Si es post
    if ( is_single() ) {
		// echo '<h1 color="red">Is single</h1><br><br><br>';
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
			// echo '<h1 color="red">Is category</h1><br><br><br>';

			$cat = get_category( get_query_var( 'cat' ) );
			// echo "<h1>".$cat->slug."</h1>";
            //$clase_maestra = $cat->slug;

            for($s = 0; $s <= (count($secciones) - 1); $s++ ) {
				// echo "Primera parte=".$secciones[$s]." - - - El slug es: ".$cat->slug."<br><br>";
                //echo "<h1>".$secciones[$s]." vs ".$categorias[$i]->slug."</h1>";
                if( $secciones[$s] == $cat->slug ) {
					// echo '<h1 color="red">Is category y está en secciones</h1><br><br><br>';
					$clase_maestra = $secciones[$s];
					break;
                }
                else {
					// echo '<h1 color="red">Is category PERO NO ESTÁ en secciones</h1><br><br><br>';
                    $clase_maestra = "default";
                }
            }
    } 

    else {
        $clase_maestra = "default";
    }
?>
<body class="estilo_<?php echo $clase_maestra; ?>">


<nav class="navbar navbar-expand-md fixed-top navbar-light bg-light shadow" role="navigation">
  <div class="container-fluid">
	
    
    
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

        <a class="navbar-brand" href="#">
            <img src="<?php bloginfo('template_directory'); ?>/img/logotipo_mandhala.png" alt="" style="height: 34px;">
        </a>


		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>

        <div class="redes_menu pr-3">
            <a href="https://www.instagram.com/mandhalamx/"><i class="fab fa-facebook p-1"></i></a>
            <i class="fab fa-instagram p-1"></i>
            <i class="fab fa-twitter p-1"></i>
            <i class="fab fa-youtube p-1"></i>
            <i class="fas fa-envelope p-1"></i>
        </div>
	</div>
</nav>


	
	





<!-- <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light shadow" role="navigation">
    <a class="navbar-brand" href="#">
        <img src="./img/logotipo_mandhala.png" alt="" style="height: 34px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mi-menu" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" scrollto="inicio" href="/#inicio">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" scrollto="nosotros" href="/#nosotros">Quiénes somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="biblioteca.php">Biblioteca</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" scrollto="programas" href="/#programas">Programas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" scrollto="actividades" href="actividades.php">Actividades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" scrollto="articulos" href="articulos.php">Artículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" scrollto="colabora" href="colabora.php">Colabora</a>
            </li>

        </ul>
        <div class="redes_menu pr-3">
            <i class="fab fa-facebook p-1"></i>
            <i class="fab fa-instagram p-1"></i>
            <i class="fab fa-twitter p-1"></i>
            <i class="fab fa-youtube p-1"></i>
            <i class="fas fa-envelope p-1"></i>
        </div>
    </div>
</nav> -->
            
            
            
            
    <!-- <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
