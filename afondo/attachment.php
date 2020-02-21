<?php $movil = esMovil(); ?>
<?php if (!$movil) { get_header(); } else { get_header('movil'); }?>

<!--==============================Contenidos=================================-->

<div class="grupo single">
    
    <div class="caja base-100 tablet-75">


        <div class="single__entrada">
              
            
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              

              <h1 class="single__entrada__titulo">
                  <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
                    <?php echo get_the_title( $post->post_parent ); ?>
                  </a>
              </h1> 


              <div class="single__entrada__foto">
                  <?php if ( wp_attachment_is_image() ) : ?>

                  <a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment" class="single__entrada__foto__imagen">
                      <?php echo wp_get_attachment_image( $post->ID, $size='fullsize' ); // max $content_width wide or high. ?>
                  </a>

                  
                  <a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" target="_blank" class="single__entrada__foto__abrir">
                          Abrir imagen en tamaño completo
                  </a>

                  <?php else : ?>
                    <a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"> <?php echo basename( get_permalink() ); ?></a>
                  <?php endif; ?>
              </div>

              <div class="single__entrada__foto__navegacion">
                  
                  <div class="single__entrada__foto__navegacion__izquierda">
                      <?php previous_image_link(0, "<< Foto Anterior"); ?>
                  </div>

                  <div class="single__entrada__foto__navegacion__derecha">
                      <?php next_image_link( 0, "Foto Siguiente >>" ); ?>
                  </div>
              </div> 
            

                <?php endwhile; endif; ?>

        </div>
   
    </div>


    <?php if (!$movil) {  get_sidebar(); } ?>

</div><!-- main -->



<!--==============================footer=================================-->
<?php if (!$movil) { get_footer(); } else { get_footer('movil'); }?>