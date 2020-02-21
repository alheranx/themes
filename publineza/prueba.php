<?php require_once('../../../wp-load.php'); ?>

<?php get_header(); ?>

<div id="contenedor">
<!--==============================		content		================================-->
<div id="main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="entrada-sola">
			<h1><?php echo get_the_title($ID); ?></h1>
			<div class="entrada-sola-autor"><?php echo get_post_meta($post->ID, 'autor', true); ?></div>
			<div class="entrada-sola-entrada"><?php the_content(); ?></div>
		

	<?php endwhile; ?>			


    <div class="entrada-sola-sugerencias">
       
	</div><!-- sugerencias -->



	<div class="entrada-sola-redes-sociales">
		<div class="redes-sociales-like">
			<div id="fb-root"></div>
			<script src="http://connect.facebook.net/es_ES/all.js#appId=123282127724030&amp;xfbml=1"></script>
			<fb:like href="" send="false" layout="button_count" width="730" show_faces="false" font="trebuchet ms"></fb:like>     	
		</div>
		

		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script>
		<fb:comments href=<?php $dominio="http://revistapersonae.com"; echo $dominio.$_SERVER['REQUEST_URI']; ?> num_posts="10" width="730"></fb:comments>	
	</div>

	</div><!-- entrada-sola -->
</div><!-- main -->

	
    <?php get_sidebar('publicidad'); ?>
    
    <div class="clear"></div>
</div>
<!--==============================footer=================================-->
<?php get_footer(); ?>