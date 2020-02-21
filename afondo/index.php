<?php $movil = esMovil(); //Comprobamos si el dispositivo es móvil. ?>
<?php if (!$movil) { get_header(); } else { get_header('movil'); } //Cargamos encabezado movil o web. ?>


<div class="grupo portada">
    <div class="grupo main caja base-100 web-75">
        <!--    ============================== slider =================================   -->
            <?php if (!$movil) { // Si es movil cargamos un slider pequeño con fotos más chicas.
                    get_template_part('template-slider'); 
                } 
                else { // get_template_part('template-slider-movil');  ?>
                    

                    <div class="generales">
                        <?php 
                            $post_number = 1; // Iniciamos a 1 el conteo de entradas

                            $args = array('category_name' => 'principal', 'posts_per_page' => '4');
                            
                            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post();
                                    
                            get_template_part('template-generales');

                            endwhile; 
                        ?>
                    </div>

                <?php } ?>


        <?php if (!$movil) { // Si es movil cargamos lo siguiente. ?>
        <!--    ============================== bloque fijo de 3 anuncios =================================   -->
        <div class="grupo tres-anuncios nomovil">
            <div class="caja base-1-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/banner_sq_1.jpg">
            </div>
            <div class="caja base-1-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/banner_sq_2.jpg">
            </div>
            <div class="caja base-1-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/banner_sq_3.jpg">
            </div>
        </div> 
        
        <!--    ============================== publicidad =================================   -->
        <div class="grupo">
            <div class="caja base-100 anuncio720 fondo-gris">
                <div class="anuncio720__anuncio">
                    
                   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Anuncio-Central afondoedomex.com -->
                    <ins class="adsbygoogle"
                    style="display:block;background:none !important;"
                    data-ad-client="ca-pub-5933170404538438"
                    data-ad-slot="7493566706"
                    data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                </div>
            </div>
        </div>


        <div class="grupo nomovil">
            <div class="caja base-100-anuncio720 fondo-gris">
                <div class="anuncio720__anuncio">
                    
                    <div data-glade data-ad-unit-path="/44924376/afondoedomex_728x90" height="90" width="728"></div>

                    <script async='async' src='https://securepubads.g.doubleclick.net/static/glade.js'></script>

                </div>
            </div>
        </div>

        <?php } ?>



        <!--    ============================== notas generales =================================   -->
        <div class="generales">
            <?php 
            $post_number = 1; // Iniciamos a 1 el conteo de entradas

            if (!$movil) {  $args = array('posts_per_page' => '15', 'cat' => '-5960,-9242'); }
            else { $args = array('posts_per_page' => '11', 'cat' => '-5960,-9242'); }
            
            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    
                <?php 

                    if($movil && $post_number == 1) { ?>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Afondo-Home-Notas -->
                        <ins class="adsbygoogle"
                        style="display:inline-block;width:300px;height:250px"
                        data-ad-client="ca-pub-5933170404538438"
                        data-ad-slot="6810045508"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    <?php }


                    if($movil && $post_number == 3) { ?>
                        <div style="display: block; overflow: hidden; width: 300px; height: 250px;">
                            <div data-glade data-ad-unit-path="/44924376/afondoedomex_300x250" height="250" width="300"></div>
                            <script async='async' src='https://securepubads.g.doubleclick.net/static/glade.js'></script>
                        </div>
                    <?php
                    }


                    // Cuando llegemos a la entrada No. 2, cargamos el diseño vertical.
                    if($post_number == 2) {
                        $args2 = array('posts_per_page' => '1', 'category_name' => '9242');

                        $my_query2 = new WP_Query($args2); while ($my_query2->have_posts()) : $my_query2->the_post();
                            
                            get_template_part('template-vertical');

                        endwhile;

                    // En cualquier otro caso cargamos el diseño cuadrado o general.
                    } else {
                        get_template_part('template-generales');
                    } 
                ?>

                <?php $post_number++; // Incrementamos la nota de 1 en 1
                endwhile; ?>
        </div>
        


        



        <!--    ============================== videoteca =================================   -->
        <!--
        <div class="grupo videoslider nomovil">
            <div class="caja base-100 videoslider__titulo">@fondotv</div>
            <div id="reproductor" class="caja base-60 videoslider__reproductor"></div>
            <div id="videoslist" class="caja base-40 videoslider__lista"></div>
        </div>
        -->
    </div>

    <?php if (!$movil) { get_sidebar(); } // Si no es movil, cargamos la barra lateral. ?>
</div>

<?php if (!$movil) { get_template_part('template-footerslider'); } // Si no es movil, cargamos el slider de las zonas. ?>
<?php if (!$movil) { get_footer(); } else { get_footer('movil'); } // Cargamos un footer diferente para cada dispositivo. ?>