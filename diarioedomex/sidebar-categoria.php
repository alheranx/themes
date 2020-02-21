<div class="caja anuncio300">
    <div class="anuncio300__anuncio">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- diarioedomex.com (secciones 2) -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-5933170404538438"
           data-ad-slot="3248497108"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
  </div>


<div class="compartidas">

  <div class="caja sidebar__titulo">
      <h3>Lo más compartido</h3>
      <div class="sidebar__titulo__triangulo"></div>
  </div>

  <?php 
    $corte_compartidas = 1;
    $idsposts = explode(",", dame_id_categoria(the_category_ID(false)));

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