<div class="caja anuncio300">

    	<div class="anuncio300__anuncio">
    		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- diarioedomex.com (nota individual 3) -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-5933170404538438"
			     data-ad-slot="9155429906"
			     data-ad-format="rectangle"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
    	</div>

	</div>


    

<div class="compartidas">

  <div class="caja sidebar__titulo">
      <h3>Notas relacionadas</h3>
      <div class="sidebar__titulo__triangulo"></div>
  </div>

  <?php
		  $orig_post = $post;
		  global $post;
		  $tags = wp_get_post_tags($post->ID);
		   
		  if ($tags) {
				  $tag_ids = array();
				  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				  $args=array(
				  'tag__in' => $tag_ids,
				  'post__not_in' => array($post->ID),
				  'posts_per_page'=>2, // Number of related posts to display.
				  'caller_get_posts'=>1
				  );
				   
				  $my_query = new wp_query( $args );
				 
				  while( $my_query->have_posts() ) {
							  $my_query->the_post();
							  ?>
					    
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

					    <?php 
				}
		}
		$post = $orig_post;
		wp_reset_query();
	?>
</div>