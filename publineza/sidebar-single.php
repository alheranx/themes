<div class="lateral">

	<div class="lateral__buscar">
		<form action="<?php echo home_url( '/' ); ?>" method="get" class="searchform">
			<div>
				<label class="screen-reader-text" for="s">Buscar:</label>
				
				<div class="caja base-70 no-padding">
					<input type="text" value="" name="s" id="s" />
				</div>

				<div class="caja base-30 no-padding">
					<input type="submit" id="searchsubmit" value="Buscar" />
				</div>
			</div>
		</form>
	</div>

	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<div class="lateral__siguenos">
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c53c0bac5e16c0"></script>
		<div class="addthis_inline_follow_toolbox"></div>
	</div>

	<?php if(is_single()) { ?>
		<div class="lateral__sugerencias">
		    <h3 class="lateral__titulo">Noticias relacionadas</h3>

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
							    
							  		<div class="lateral__sugerencias__item">
							  			<div class="lateral__sugerencias__item__thumbnail compartir-foto">
							                <?php the_post_thumbnail('thumbnail'); ?>
							            </div>

							            <a href="?p=<?php the_ID(); ?>" class="lateral__sugerencias__item__titulo">
							                    <?php echo get_the_title($ID); ?>
							            </a>
							  		</div>

							    <?php 
						}
				}
				$post = $orig_post;
				wp_reset_query();
			?>
		</div>
	<?php } ?>

</div>