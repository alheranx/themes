<div class="caja anuncio300">
    <div class="anuncio300__anuncio">
        <!-- OCULTO <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5933170404538438"
             data-ad-slot="7818297504"
             data-ad-format="rectangle"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        -->
    </div>
  </div>


<div class="compartidas">

  <div class="caja sidebar__titulo">
      <h3>Lo más compartido</h3>
      <div class="sidebar__titulo__triangulo"></div>
  </div>

  <?php 
    $corte_compartidas = 1;
    $idsposts = explode(",", dame_ids());

    $args = array('posts_per_page' => '4', 'post__in' => $idsposts);
    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
            
        <div class="caja tablet-50 web-100 compartidas__item">
            <div class="caja base-30 no-padding compartidas__item__imagen">
                  <?php
                  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                  ?>    
                  <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="compartidas__item__contenedor__imagen">
              </div>

            <div class="caja base-70 no-padding">
                    <a href="?p=<?php the_ID(); ?>" class="compartidas__item__titulo">
                                        <?php echo get_the_title($ID); ?>
                                    </a>

                    <div class="caja padding">
                       <div class="compartidas__item__fecha">
                          <?php the_time('j') ?> de <?php the_time('M') ?>
                       </div>
                   </div>
            </div>
        </div>
        
        <?php if($corte_compartidas == 2) { echo '<hr>'; } $corte_compartidas++; ?> 

    <?php endwhile; ?>
</div>


<div class="caja opinion">

  <div class="sidebar__titulo">
      <h3>En la opinión de</h3>
      <div class="sidebar__titulo__triangulo"></div>
  </div>

  <?php 
    $args = array('category_name' => 'principal', 'posts_per_page' => '3');
    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
            
        <div class="opinion__item">
           <?php
              $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
              ?>    
              <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="opinion__item__imagen">

            <div class="caja">
                    <a href="?p=<?php the_ID(); ?>" class="opinion__item__titulo">
                          <?php echo get_the_title($ID); ?>
                      </a>

                    <div class="opinion__item__fecha">
                          <?php the_time('j') ?> de <?php the_time('M') ?>
                       </div>

                    <div class="opinion__item__resumen">
                      <?php echo get_the_excerpt($ID); ?>
                    </div>
            </div>

   

        </div>

<?php endwhile; ?>
</div>


<div class="caja denuncia">

  <div class="sidebar__titulo">
      <h3>Foto y Video Denuncia Ciudadana</h3>
      <div class="sidebar__titulo__triangulo"></div>
  </div>


  <?php 
    $args = array('category_name' => 'principal', 'posts_per_page' => '2');
    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
            
        <div class="denuncia__item">

            <div class="caja base-100 no-padding denuncia__item__imagen">
                  <?php
                  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                  ?>    
                  <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="denuncia__item__contenedor__imagen">
              </div>


            <div class="caja base-100 no-padding denuncia__item__titulo">
                <a href="?p=<?php the_ID(); ?>">
                    <?php echo get_the_title($ID); ?>
                </a>
            </div>


            <div class="">
                <div class="caja base-20 no-padding">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/valle-de-ecatepec-texcoco.png">
                </div>

                <div class="caja base-80 denuncia__item__resumen">
                  <?php echo get_the_excerpt($ID); ?>
                </div>
            </div>

        </div>

  <?php endwhile; ?>
</div>