<div class="caja base-100 web-25 sidebar nomovil">

      <?php
      // Vaciamos una variable booleana en '$mostrar_publiciad'
      // El valor lo recibe de la funcion 'es_entrada_antigua' que se encuentra en el archivo functions.php
      $mostrar_publicidad = !es_entrada_antigua(); ?>
      

<!-- ================= *** ACORDEON *** ================================== -->
      <div class="caja no-padding acordeon sidebar__caja">

        <?php
        // Creamos un array para las distintas zonas, con la información de cada una.
        $arrayAcordeon = [
            ['seccion' => 'zona-norte', 'clase' => 'acordeon__zona-norte', 'titulo' => 'Zona Norte'], 
            ['seccion' => 'zona-oriente', 'clase' => 'acordeon__zona-oriente', 'titulo' => 'Zona Oriente'], 
            ['seccion' => 'zona-sur', 'clase' => 'acordeon__zona-sur', 'titulo' => 'Zona Sur'],
            ['seccion' => 'zona-volcanes', 'clase' => 'acordeon__zona-volcanes', 'titulo' => 'Zona Volcanes'], 
            ['seccion' => 'valle-de-toluca', 'clase' => 'acordeon__valle-de-toluca', 'titulo' => 'Valle de Toluca'], 
            ['seccion' => 'valle-de-mexico', 'clase' => 'acordeon__valle-de-mexico', 'titulo' => 'Valle de México'], 
            ['seccion' => 'editorial', 'clase' => 'acordeon__editorial', 'titulo' => 'Fuentes'], 
            ['seccion' => 'muro-ciudadano', 'clase' => 'acordeon__muro-ciudadano', 'titulo' => 'Muro Ciudadano'], 
            ['seccion' => 'publicidadyventas', 'clase' => 'acordeon__publicidadyventas', 'titulo' => 'Publicidad y Ventas']
        ];
        // Hacemos un Loop para crear cada elemento del Acordeon.
        foreach ($arrayAcordeon as $acordeon) { 
        ?>


        <div>
            <h3 class="acordeon__titulo" data-enlace="#<?php echo $acordeon['clase']; ?>">
              <a href="#<?php echo $acordeon['clase']; ?>" class="<?php echo $acordeon['clase']; ?>">
                <b class="icon icon-<?php echo $acordeon['seccion']; ?>"></b> <i><?php echo $acordeon['titulo']; ?></i>
              </a>
            </h3>

            <div id="<?php echo $acordeon['clase']; ?>" class="acordeon__notas">
                <?php
                $categoria = $acordeon['seccion'];
                $args = array('category_name' => $categoria, 'posts_per_page' => '3', );
                $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post();
                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'mini2' );
                ?>
                    
                  <div class="acordeon__notas__item">

                        <div class="caja base-40 acordeon__notas__item__imagen">
                              <a href="?p=<?php the_ID(); ?>">
                                  <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                              </a>
                        </div>

 
                        <div class="caja base-60 acordeon__notas__item__titulo">
                              <a href="?p=<?php the_ID(); ?>">
                                  <?php echo get_the_title($ID); ?>
                              </a>

                              <!-- 
                              *Descomentar si se quiere mostrar la fecha
                              <div class="acordeon__notas__item__fecha">
                                   <b><span class="icon icon-calendar"></span><?php the_time('j') ?> de <?php the_time('M') ?></b>
                              </div>
                              -->
                        </div>

                  </div>


                <?php endwhile; ?>
            </div>
        </div>


        <?php } ?>  

      </div>


<!-- ================= *** BANNER FRIDA  *** ================================== -->
      <?php $argumentosEncabezado = array('author' => 16, 'orderby' => 'date', 'posts_per_page' => '1' );
            $my_query = new WP_Query($argumentosEncabezado); while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div class="caja no-padding sidebar__caja">
          <a href="?p=<?php the_ID(); ?>" class="sidebar__caja__imagen">
            <img src="<?php bloginfo('template_directory'); ?>/img/columna_rota.jpg">
          </a>
        </div>

      <?php endwhile; ?>


      
<!-- ================= *** MEXIQUENSES DE VALOR *** ================================== -->
      <?php if( is_home() ) { ?>
      <div class="caja no-padding mexiquenses sidebar__caja">

        <?php 
          $args = array('category_name' => 'mexiquenses-de-valor', 'posts_per_page' => '1');
          $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  
              <div class="mexiquenses__item">
                  <h4>Mexiquenses de Valor</h4>
                 <?php
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                    ?>    
                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="mexiquenses__item__imagen">

                  <div class="mexiquenses__item__textos">
                          <a href="?p=<?php the_ID(); ?>" class="mexiquenses__item__titulo">
                                <?php echo get_the_title($ID); ?>
                            </a>

                          <div class="mexiquenses__item__fecha">
                                <span class="icon icon-fecha"> </span> <?php the_time('j') ?> de <?php the_time('M') ?>
                             </div>

                          <div class="mexiquenses__item__resumen">
                            <?php echo get_the_excerpt($ID); ?>
                          </div>
                  </div>

         

              </div>

        <?php endwhile; ?>
      </div>
      <?php } ?>

      
<!-- ================= *** BANNER GABRIEL *** ================================== -->
      <?php $argumentosEncabezado = array('author' => 2, 'orderby' => 'date', 'posts_per_page' => '1' );
            $my_query = new WP_Query($argumentosEncabezado); while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div class="caja no-padding sidebar__caja">
          <a href="?p=<?php the_ID(); ?>" class="sidebar__caja__imagen">
            <img src="<?php bloginfo('template_directory'); ?>/img/fuentes_confidenciales.png">
          </a>
        </div>

      <?php endwhile; ?>



<!-- ================= *** FEMINICIDIOS *** ================================== -->
      <?php if( is_home() ) { ?>
      <div class="caja no-padding feminicidios sidebar__caja">
        
          <h4>Feminicidios en el Estado de México</h4>
        
        <?php 
          $args = array('category_name' => 'feminicidios', 'posts_per_page' => '2');
          $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  
              <div class="feminicidios__item">

                  <div class="caja base-45 feminicidios__item__imagen">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'mini' );
                        ?>    
                        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="feminicidios__item__contenedor__imagen">
                    </div>


                  <div class="caja base-55 feminicidios__item__titulo">
                      <a href="?p=<?php the_ID(); ?>">
                          <?php echo get_the_title($ID); ?>
                      </a>
                  </div>


                  <div class="feminicidios__item__fecha">
                      <span class="icon icon-fecha"> </span> <?php the_time('j') ?> de <?php the_time('M') ?>
                   </div>



              </div>


        <?php endwhile; ?>
      </div>
      <?php } ?>


<!-- ================= *** PUBLICIDAD *** ================================== -->
    <?php if( $mostrar_publicidad ) { ?>

      <div class="caja">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Sidebar-Vertical Afondoedomex.com -->
          <ins class="adsbygoogle"
          style="display:inline-block;width:300px;height:600px"
          data-ad-client="ca-pub-5933170404538438"
          data-ad-slot="3202967903"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
      </div>


      <div class="caja">
          <div data-glade data-ad-unit-path="/44924376/afondoedomex_320x100" height="100" width="320"></div>

          <script async='async' src='https://securepubads.g.doubleclick.net/static/glade.js'></script>
      </div>


      <div class="caja">
          <div data-glade data-ad-unit-path="/44924376/afondoedomex_300x600" height="600" width="300"></div>

          <script async='async' src='https://securepubads.g.doubleclick.net/static/glade.js'></script>
      </div>

    <?php } ?>



<!-- ================= *** FOTOTECA *** ================================== -->
      <div class="caja no-padding fototeca">
        
        <h4>fototeca</h4>

        <div class="fototeca__bloque">
        <?php 
          $i = 1;
          $args = array('category_name' => 'fototeca', 'posts_per_page' => '4');
          $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  
              <?php if($i == 1) { ?>
                  <div class="fototeca__item">

                      <div class="caja base-100 fototeca__item__imagen">
                            <?php
                            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                            ?>
                            <a href="?p=<?php the_ID(); ?>">
                              <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="fototeca__item__contenedor__imagen">
                            </a>
                        </div>


                      <div class="caja base-100 fototeca__item__titulo">
                          <a href="?p=<?php the_ID(); ?>">
                              <?php echo get_the_title($ID); ?>
                          </a>
                      </div>


                      <div class="caja base-100 fototeca__item__descripcion">
                              <?php echo get_the_title($ID); ?>
                      </div>


                      <div class="fototeca__item__fecha">
                          <span class="icon icon-fecha"> </span> <?php the_time('j') ?> de <?php the_time('M') ?>
                       </div>



                  </div>

              <?php } else { ?>

                  <div class="caja base-1-3 fototeca__itemcito">

                        <div class="caja base-100 fototeca__itemcito__imagen">
                              <?php
                              $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'mini' );
                              ?>
                              <a href="?p=<?php the_ID(); ?>">
                                  <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="fototeca__itemcito__contenedor__imagen">
                                </a>
                          </div>

                    </div>

                <?php } ?>


        <?php $i++; endwhile; ?>
        </div>
      </div>



<!-- ================= *** PUBLICIDAD Y VENTAS *** ================================== -->
      <div class="caja no-padding boton-publicidad sidebar__caja">
          <a href="#">Publicidad y Ventas</a>
      </div>


<!-- ================= *** MURO CIUDADANO *** ================================== -->
      <div class="caja no-padding muro sidebar__caja">
        
        <img src="http://afondoedomex.com/wp-content/themes/cadabrapress/images/Murociudadano.jpg" alt="">
        
        <?php 
          $args = array('category_name' => 'muro-ciudadano', 'posts_per_page' => '3');
          $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  
              <div class="muro__item">

                  <div class="caja base-100 muro__item__imagen">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                        ?>    
                        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="muro__item__contenedor__imagen">
                    </div>


                  <div class="caja base-100 muro__item__titulo">
                      <a href="?p=<?php the_ID(); ?>">
                          <?php echo get_the_title($ID); ?>
                      </a>
                  </div>


                  <div class="muro__item__resumen">
                      <?php echo excerptSimple(18); ?>
                   </div>



              </div>


        <?php endwhile; ?>
      </div>



<!-- ================= *** LO MÁS LEÍDO *** ================================== -->
      <?php if( is_home() ) { ?>
      <div class="caja no-padding popular sidebar__caja">
        
        <h4>Lo más leído</h4>


              <?php 
                $posicion = 1;
                $popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'zeta_contador_visitas', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

                <div class="caja padding popular__item">
                
                <div class="popular__item__posicion">
                    <?php echo $posicion; ?>
                </div>
                <a href="?p=<?php the_ID(); ?>">
                    <?php
                      $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                      ?>    
                      <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="popular__item__imagen">

                  </a>

                  <div class="popular__item__texto">
                      <?php echo get_the_title($ID); ?>
                    </div>
                </div>

                

                <?php $posicion++; endwhile; ?>
   

      </div>

      <?php } ?>


</div>