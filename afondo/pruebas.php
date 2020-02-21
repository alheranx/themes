<!-- SI quieres obtener el título de la categoría -->
<p><?php single_cat_title(); ?></p>
    

<!-- El loop natural sin arguemntos. -->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    
    <!-- Primero obgienes el elemento thumbnail y lo pasas al array $image_th -->
    <?php $image_th = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); ?>

    <!-- La imagen que obtienes del puntero "0" del array $image_th que creaste -->
    <img src="<?php echo $image_th[0]; ?>" title="<?php echo get_the_title($ID); ?>">

    <!-- El título -->
    <?php echo get_the_title($ID); ?>
    
    <!-- EL resumen de la entrada -->
    <?php echo get_the_excerpt($ID); ?>

<!-- Termina el Loop -->
<?php endwhile; ?>