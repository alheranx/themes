<div class="caja base-100 web-25 sidebar">
      <div class="caja no-padding acordeon sidebar__caja">

        <?php
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

        foreach ($arrayAcordeon as $acordeon) { 
        ?>


        <div class="acordeon__titulo" data-enlace="#<?php echo $acordeon['clase']; ?>">
            <h3>
              <a href="#<?php echo $acordeon['clase']; ?>" class="<?php echo $acordeon['clase']; ?>">
                <b class="icon icon-<?php echo $acordeon['seccion']; ?>"></b> <i><?php echo $acordeon['titulo']; ?></i>
              </a>
            </h3>

            <div id="<?php echo $acordeon['clase']; ?>" class="acordeon__notas">
                <?php
                $categoria = $acordeon['seccion'];
                $args = array('category_name' => $categoria, 'posts_per_page' => '3', );
                $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post();
                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'mini' );
                ?>
                    
                  <div class="acordeon__notas__item">

                        <div class="caja base-30">
                                <a href="?p=<?php the_ID(); ?>" class="acordeon__notas__item__imagen">
                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                </a>
                        </div>


                        <div class="caja base-70">
                                <div class="acordeon__notas__item__titulo">
                                    <a href="?p=<?php the_ID(); ?>">
                                        <?php echo get_the_title($ID); ?>
                                    </a>
                                </div>

                                <div class="acordeon__notas__item__fecha">
                                     <b><span class="icon icon-calendar"></span><?php the_time('j') ?> de <?php the_time('M') ?></b>
                                 </div>
                        </div>

                  </div>


                <?php endwhile; ?>
            </div>
        </div>


        <?php } ?>  

      </div>




      <?php $argumentosEncabezado = array('author' => 16, 'orderby' => 'date', 'posts_per_page' => '1' );
            $my_query = new WP_Query($argumentosEncabezado); while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div class="caja no-padding sidebar__caja">
          <a href="?p=<?php the_ID(); ?>" class="sidebar__caja__imagen">
            <img src="https://i0.wp.com/afondoedomex.com/wp-content/uploads/2016/06/banner-frida-guerrera-dos.jpg?fit=385%2C170" alt="">
          </a>
        </div>

      <?php endwhile; ?>


      

      
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

      

      <?php $argumentosEncabezado = array('author' => 2, 'orderby' => 'date', 'posts_per_page' => '1' );
            $my_query = new WP_Query($argumentosEncabezado); while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div class="caja no-padding sidebar__caja">
          <a href="?p=<?php the_ID(); ?>" class="sidebar__caja__imagen">
            <img src="https://i0.wp.com/afondoedomex.com/wp-content/uploads/2015/12/fuentes2.png?fit=329%2C181" alt="">
          </a>
        </div>

      <?php endwhile; ?>



      
      <?php if( is_home() ) { ?>
      <div class="caja no-padding feminicidios sidebar__caja">
        
          <h4>Feminicidios en el Estado de México</h4>
        
        <?php 
          $args = array('category_name' => 'feminicidios', 'posts_per_page' => '2');
          $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  
              <div class="feminicidios__item">

                  <div class="caja base-40 feminicidios__item__imagen">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'mini' );
                        ?>    
                        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="feminicidios__item__contenedor__imagen">
                    </div>


                  <div class="caja base-60 feminicidios__item__titulo">
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




      <div class="caja no-padding fototeca sidebar__caja">
        
          <h4>fototeca</h4>
        
        <?php 
          $args = array('category_name' => 'fototeca', 'posts_per_page' => '1');
          $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  
              <div class="fototeca__item">

                  <div class="caja base-100 fototeca__item__imagen">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                        ?>    
                        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="fototeca__item__contenedor__imagen">
                    </div>


                  <div class="caja base-100 fototeca__item__titulo">
                      <a href="?p=<?php the_ID(); ?>">
                          <?php echo get_the_title($ID); ?>
                      </a>
                  </div>


                  <div class="fototeca__item__fecha">
                      <span class="icon icon-fecha"> </span> <?php the_time('j') ?> de <?php the_time('M') ?>
                   </div>



              </div>


        <?php endwhile; ?>
      </div>


      <div class="caja no-padding boton-publicidad sidebar__caja">
          <a href="#">Publicidad y Ventas</a>
      </div>




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


                  <div class="muro__item__fecha">
                      <span class="icon icon-fecha"> </span> <?php the_time('j') ?> de <?php the_time('M') ?>
                   </div>



              </div>


        <?php endwhile; ?>
      </div>




      <?php if( is_home() ) { ?>
      <div class="caja no-padding popular sidebar__caja">
        
        <h4>Lo más leído</h4>
   
                  
              <div class="caja padding popular__item">

                <a href="?p=<?php the_ID(); ?>">
                  <img src="https://i1.wp.com/afondoedomex.com/wp-content/uploads/2017/01/DESCUART25ENE.jpg?fit=150%2C83" class="popular__item__imagen">
                  <div class="popular__item__texto">
                    Jóven de 16 años fue asesinado y desmembrado por sus propios amigos en Ecatepec
                  </div>
                </a>
              </div>

              <div class="caja padding popular__item">

                <a href="?p=<?php the_ID(); ?>">
                  <img src="https://i0.wp.com/afondoedomex.com/wp-content/uploads/2017/01/bala-mty.jpg?fit=150%2C100" class="popular__item__imagen">
                  <div class="popular__item__texto">
                    Video: Tragedia en Monterrey; Alumno dispara a maestra y compañeros de clase.
                  </div>
                </a>
              </div>

              <div class="caja padding popular__item">

                <a href="?p=<?php the_ID(); ?>">
                  <img src="https://i1.wp.com/afondoedomex.com/wp-content/uploads/2017/02/arrastrado.jpg?fit=150%2C100" class="popular__item__imagen">
                  <div class="popular__item__texto">
                    Video: Chofer arrastra a ladrón que intentó robar su celular a pasajero.
                  </div>
                </a>
              </div>

              <div class="caja padding popular__item">

                <a href="?p=<?php the_ID(); ?>">
                  <img src="https://i2.wp.com/afondoedomex.com/wp-content/uploads/2017/01/feminicidios-6-y-7-copia.jpg?fit=150%2C84" class="popular__item__imagen">
                  <div class="popular__item__texto">
                    Feminicidios 8 y 9: Matan a madre e hija; También a vecino que trató de defenderlas.
                  </div>
                </a>
              </div>

              <div class="caja padding popular__item">

                <a href="?p=<?php the_ID(); ?>">
                  <img src="https://i0.wp.com/afondoedomex.com/wp-content/uploads/2017/01/choque1.jpg?fit=150%2C113" class="popular__item__imagen">
                  <div class="popular__item__texto">
                    Mueren dos delincuentes al chocar con camioneta de diputada en EdoMex.
                  </div>
                </a>
              </div>


      </div>
      <?php } ?>
</div>