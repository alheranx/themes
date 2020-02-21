<?php get_header(); ?>

<!--============================== Slider =================================-->
<div class="grupo total">
    <div class="caja no-padding base-100">
        <div class="slider1">
            
            <div class="caja no-padding tablet-100">
                <ul class="slider1__slider">
                    <!-- <?php
                    $args = array('category_name' => 'principal', 'posts_per_page' => '4', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                        ?>

                        <li>
                            <span class="slider1__slider__imagen">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </span>
                        </li>


                    <?php endwhile; ?> -->

                    <li class="item active">
                        <span class="slider1__slider__imagen">
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_01_w.jpg">
                        </span>
                    </li>

                    <li class="item active">
                        <span class="slider1__slider__imagen">
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_02_w.jpg">
                        </span>
                    </li>

                    <li class="item active">
                        <span class="slider1__slider__imagen">
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_03_w.jpg">
                        </span>
                    </li>
                </ul>
            </div>
            
            <!-- <span id="slider-prev"></span>
            <span id="slider-next"></span> -->
        </div>
    </div>
</div>



<!--============================== Bienvenida =================================-->
<div class="grupo total bienvenida">
    <div class="grupo bienvenida__textos">
        <div class="caja">
            <h2>¿Quiénes Somos?</h2>
            
            <p>Somos una empresa constituida hace 25 años, con mucha experiencia en el mercado, creada para la distribución y comercialización de fijación de tornillos y abasto de los diferentes productos.</p>

            <p>Contamos con una línea extensa de fijación, en tornillos allen, acero inoxidables, milimétricos, Grado 2, 5, 8, varilla roscada galvanizada, B7, tuerca cromada, tornillo estructural, birlos, taquetes, Abrazadera para muelle, línea automotriz, contamos con todo tipo de herramienta, tornillo comercial automotriz e industrial, Surtimos a mayoristas y menudistas, nuestro ramo esta difundido para industrias y pequeños negocios.</p>

            <p>Somos distribuidores directos de las mejores marcas: Prottor, Toledo, Atsa, Prottsa, Indux, Ideal, Anclo, Austromex, Urrea, Truper.</p>

            
            <h2>MISIÓN</h2>
            <p>Ofrecer a nuestros clientes servicio y producto de la mejor calidad y compromiso para mantenernos en su preferencia.</p>
            

            <h2>VISIÓN</h2>
            <p>Ser una empresa líder dentro del ramo, distribuir nuestros productos a diferentes zonas y establecimientos para mayores ventas, seguir creciendo como empresa.</p>
            

            <h2>VALORES</h2>
            
            <ul>
                <li>Competitividad</li>
                <li>Compromiso</li>
                <li>Honestidad</li>
                <li>Respeto</li>
                <li>Responsabilidad</li>
                <li>Satisfacción al cliente</li>
            </ul>
        </div>
    </div>

    <div class="grupo bienvenida__logotipos">
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Anclo.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/ATSA.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Austromex.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Ideal.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Indux.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Protor.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Prottsa.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Toledo.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Truper.jpg" alt="">
        </div>
        <div class="caja base-50 tablet-20 bienvenida__logotipos__item">
            <img src="<?php bloginfo('template_directory'); ?>/img/Urrea.jpg" alt="">
        </div>
    </div>




</div>



<div class="grupo destacados">
    
    <!--============================== Main Izquierda =================================-->
    <div class="caja base-100">
        <h3 class="caja destacados__titulo">Productos Destacados</h3>
    </div>

    <div class="caja base-100">
        <?php 
        $args = array('category_name' => 'principal', 'posts_per_page' => '15');
        $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
            <div class="caja base-50 tablet-1-3 web-25">
                
                    <div class="destacados__item">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                        ?>

                        <div class="destacados__item__imagen">
                            <a href="?p=<?php the_ID(); ?>">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="">
                            </a>

                            <a href="?p=<?php the_ID(); ?>" class="destacados__item__titulo">
                                    <?php echo get_the_title($ID); ?><br>
                                    <b>+</b>
                            </a>
                        </div> 
                    </div>

                </div>
            <?php endwhile; ?>     
    </div>

</div>



<!--============================== Grupo Contacto =================================-->
<div class="grupo total contacto">
    <div class="grupo">
        <div class="caja base-100 web-60">
    </div>

    <div class="caja base-100 web-40" data-ng-app="formulario">
        <div class="formulario" data-ng-controller="myCtrl">
            <h3>Formulario de Contacto</h3>
            <form name="hmForm" id="hm-formulario" method="post" enctype="multipart/form-data" action="enviar-email.php" class="form-horizontal">                    
                
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre:" data-ng-model="nombreIngresado" data-ng-minlength="3" data-ng-maxlength="45" data-ng-required="true">
                    <div class="form-error" data-ng-show="hmForm.nombre.$error.required"> No has ingresado tu nombre.</div>
                    <div class="form-error" data-ng-show="hmForm.nombre.$error.minlength"> ¿No te parece que el nombre es muy corto?.</div>
                    <div class="form-error" data-ng-show="hmForm.nombre.$error.maxlength"> Creo que el nombre es demasiado largo.</div>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input class="form-control" id="telefono" name="telefono" type="text"  placeholder="Teléfonos:" data-ng-model="telefonoIngresado" data-ng-minlength="8" data-ng-maxlength="40" data-ng-required="true">
                    <div class="form-error" data-ng-show="hmForm.telefono.$error.required"> No has ingresado tu teléfono.</div>
                    <div class="form-error" data-ng-show="hmForm.telefono.$error.minlength"> Con tan pocos números no podremos llamarte.</div>
                    <div class="form-error" data-ng-show="hmForm.telefono.$error.maxlength"> Con dos números es suficiente.</div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="E-mail:" data-ng-model="emailIngresado" data-ng-required="true" data-ng-Pattern="/^([a-z0-9]{1,30})(\.[_a-z0-9]{1,30})*@([a-z0-9-]{3,63})(\.[_a-z]{2,4})(\.[_a-z]{2,3})*$/">
                    <div class="form-error" data-ng-show="hmForm.email.$error.required"> Coloca tu e-mail para poder contactarte.</div>
                    <div class="form-error" data-ng-show="hmForm.email.$error.pattern"> Coloca un e-mail válido.</div>

                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea class="form-control" name="mensaje" id="mensaje" data-ng-model="mensajeIngresado" data-ng-minlength="8" data-ng-required="true"></textarea>
                    <div class="form-error" data-ng-show="hmForm.mensaje.$error.required"> Falta tu mensaje.</div>
                    <div class="form-error" data-ng-show="hmForm.mensaje.$error.minlength"> Tu mensaje es muy corto.</div>
                </div>

                <div class="from-group">
                    <div class="caja base-40">
                        <input id="boton-enviar" class="btn" type="submit" name="botonenviar" value="Enviar">
                    </div>
                    <div class="caja base-60">
                        <span id="hm-formulario-mensajes" class="form-exito"></span>
                    </div>
                </div>

                
            </form>             
        </div>
    </div>
    </div>
</div>

<!--==============================Pie de página=================================-->
<?php get_footer(); ?>