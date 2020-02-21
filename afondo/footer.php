</div>
<footer id="pie" class="grupo no-padding pie">

	<div class="caja base-15 tablet-10">
		<h2 class="pie__logotipo"><a href="<?php echo home_url(); ?>"><span>Periódico A Fondo Estado de México</span></a></h2>
	</div>

	<div class="caja base-85 tablet-90">
		
		<div class="caja base-100 menu-inferior">
			<?php wp_nav_menu( array('theme_location' => 'menu-inferior' ) );  ?>
		</div>

		<div class="caja base-100 pie__redes-sociales">
			<a target="_blank" class="icon icon-youtube" href="https://www.youtube.com/channel/UCQW-vSFKGaAohp9wJg39gDw"></a>
			<a target="_blank" class="icon icon-twitter" href="https://twitter.com/afondoedomex"></a>
			<a class="icon icon-facebook" href="https://www.facebook.com/A-Fondo-Estado-de-M%C3%A9xico-474413719371064/"></a>
			<div class="siguenos">Siguenos: </div>
		</div>

	</div>
	
	<div class="caja base-100 pie__copy">
		<p>
		Copyright 2016© afondoedomex.com<br>
		Este material cuenta con derechos de propiedad intelectual por parte de A Fondo Estado de México, queda expresamente prohibida la publicación, retransmisión, distribución, venta, edición y cualquier otro uso de los contenidos de texto, fotografías, audios, videos y logotipos. Si desea hacer uso de este contenido por favor comunicarse a nuestro servicio de agencia de noticias A Fondo Estado de México 
		al <br><a href="tel:+5563476666">(55) 63476666</a>, Muchas gracias.
		</p>
	</div>

</footer>

<?php if (is_single()) { ?>
	
<?php } else { ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/scripts-dist.js"></script>
<?php } ?>

</body>
</html>