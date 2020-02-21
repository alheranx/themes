<?php get_header(); ?>


<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c53c0bac5e16c0"></script>
<!--==============================Contenidos=================================-->
<div class="grupo no-padding portada">
    

    <!--    ===================================== SLIDER 1 ========================================   -->
    <div class="caja base-100 tablet-70">
        <div class="slider1">
            <div class="caja no-padding tablet-5 slider1__izquierda">
                <span id="slider-prev"></span>
            </div>

            <div class="caja no-padding tablet-90">
                <ul class="slider1__slider">
                    <?php
                    $args = array('category_name' => 'portada', 'posts_per_page' => '3', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                        ?>

                        <li>
                            <a href="?p=<?php the_ID(); ?>" class="slider1__slider__imagen">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </a>

                            <div class="slider1__slider__fecha">
                                <div class="slider1__slider__fecha__dia"><?php the_time('j') ?></div>
                                <div class="slider1__slider__fecha__mes"><?php the_time('M') ?></div>
                            </div>
                            
                            
                            <div class="slider1__slider__titulo">
                                <a href="?p=<?php the_ID(); ?>">
                                        <?php echo get_the_title($ID); ?>
                                    </a>
                                </div>
                            
                        </li>


                    <?php endwhile; ?>
                </ul>
            </div>


            <div class="caja no-padding tablet-5 slider1__derecha">
                <span id="slider-next"></span>
            </div>
        </div>
    </div>
    

    <!--    ===================================== SLIDER 2 ========================================   -->
    <div class="caja tablet-30">
        <div class="slider2">
            <ul class="slider2__slider">
                <?php
                $args = array('category_name' => 'portada', 'posts_per_page' => '3', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    
                    <?php
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                    ?>

                    <li>
                            <a href="?p=<?php the_ID(); ?>">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </a>

                            <div class="slider2__slider__fecha">
                                <div class="slider2__slider__fecha__dia"><?php the_time('j') ?></div>
                                <div class="slider2__slider__fecha__mes"><?php the_time('M') ?></div>
                            </div>

                            <div class="slider2__slider__titulo">
                                <a href="?p=<?php the_ID(); ?>">
                                    <?php echo get_the_title($ID); ?>
                                </a>
                            </div>
                            
                        </li>

                <?php endwhile; ?>
            </ul>
        </div>

        
        <!--    ===================================== SLIDER 3 ========================================   -->
        <div class="slider3">
            <ul class="slider3__slider">
                <?php
                $args = array('category_name' => 'portada', 'posts_per_page' => '3', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    
                    <?php
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                    ?>

                    <li>
                            <a href="?p=<?php the_ID(); ?>">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </a>

                            <div class="slider3__slider__fecha">
                                <div class="slider3__slider__fecha__dia"><?php the_time('j') ?></div>
                                <div class="slider3__slider__fecha__mes"><?php the_time('M') ?></div>
                            </div>

                            <div class="slider3__slider__titulo">
                                <a href="?p=<?php the_ID(); ?>">
                                    <?php echo get_the_title($ID); ?>
                                </a>
                            </div>
                            
                        </li>

                <?php endwhile; ?>
            </ul>
        </div>

    </div>
</div>

<!--    ===================================== SECCIONES ===================================================================
======================================================================================================================= -->
<div class="grupo no-padding secciones1">
    
    <div class="caja base-100 tablet-40 secciones1__seccion3">
        <?php 
        $args = array('category_name' => 'portada', 'posts_per_page' => '2', 'offset' => '3' );
        $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
            <div class="caja base-100 movil-50 tablet-100 secciones1__seccion3__item">
                <div class="caja base-30 tablet-1-3 secciones1__seccion3__item__foto">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                        ?>    
                        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                    </div>
                    

                <div class="caja base-70 tablet-2-3 secciones1__seccion3__item__textos">
                        <div class="secciones1__seccion3__item__textos__titulo">
                                <a href="?p=<?php the_ID(); ?>">
                                    <?php echo get_the_title($ID); ?>
                                </a>
                            </div>

                        <div class="secciones1__seccion3__item__textos__resumen">
                                <div class="caja tablet-15 no-padding">
                                    <div class="secciones1__seccion3__item__textos__resumen__fecha">
                                        <span class="secciones1__seccion3__item__textos__resumen__fecha__dia"><?php the_time('j') ?></span>
                                        <span class="secciones1__seccion3__item__textos__resumen__fecha__mes"><?php the_time('M') ?></span>
                                    </div>
                                </div>

                                <div class="caja tablet-85 secciones1__seccion3__item__textos__resumen__textos">
                                    <?php echo get_the_excerpt($ID); ?>
                                </div>
                            </div>
                    </div>
            </div>

            <?php endwhile; ?>        
    </div>


    <div class="caja base-100 tablet-60 secciones1__seccion4">
        
                <div class="caja tablet-50">
                         <?php 
                        $args = array('category_name' => 'portada', 'posts_per_page' => '3', 'offset' => '0');
                        $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        
                            <div class="caja base-1-3 tablet-100 secciones1__seccion4__item">
                                
                                    <div class="caja no-padding tablet-20">
                                            <?php
                                            $image_this_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                                            ?>    
                                            <img src="<?php echo $image_this_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                        </div>
                                        

                                    <div class="caja no-padding tablet-80">
                                            <a href="?p=<?php the_ID(); ?>" class="secciones1__seccion4__item__titulo">
                                                <div class=""><?php echo get_the_title($ID); ?></div>
                                                <div class="secciones1__seccion4__item__fecha">
                                                    <?php the_time('j') ?> <?php the_time('M') ?>
                                                </div>
                                            </a>
                                        </div>

                                </div>

                            <?php endwhile; ?>         
                    </div>   
                    

        <div class="caja tablet-50 secciones1__seccion4__publicidad">
                <?php
                    $args = array('category_name' => 'banner-index', 'posts_per_page' => '1', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post();
                        

                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                        $enlace = get_post_meta($post->ID, 'enlace', true);
                        
                            if($enlace) { ?>
                                <a href="<?php echo get_post_meta($post->ID, 'enlace', true); ?>" target="_blank">
                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="encabezado__banner">
                                </a>
                            <?php } else { ?>
                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="encabezado__banner">
                                <?php } ?>
                    <?php endwhile; ?>
            </div>

    </div>


</div>




<div class="grupo anuncios">
    <div class="caja tablet-1-3">
        <div class="google-300x250">
                
                <style>
                .mianuncio { width: 336px; height: 280px; }
                @media(min-width: 500px) { .mianuncio { width: 336px; height: 280px; } }
                @media(min-width: 800px) { .mianuncio { width: 336px; height: 260px; } }

                .mianuncio2 { width: 336px; height: 280px; }
                @media(min-width: 500px) { .mianuncio2 { width: 336px; height: 280px; } }
                @media(min-width: 800px) { .mianuncio2 { width: 336px; height: 260px; } }

                .mianuncio3 { width: 336px; height: 280px; }
                @media(min-width: 500px) { .mianuncio3 { width: 336px; height: 280px; } }
                @media(min-width: 800px) { .mianuncio3 { width: 336px; height: 260px; } }
                </style>

                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Banner Cuadrado 1 -->
                <ins class="adsbygoogle mianuncio"
                     style="display:block"
                     data-ad-client="ca-pub-3270149665082192"
                     data-ad-slot="9005254933"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

        </div>
    </div>

    <div class="caja tablet-1-3">
        <div class="google-300x250">
        
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Banner Cuadrado 2 -->
                <ins class="adsbygoogle mianuncio2"
                     style="display:block"
                     data-ad-client="ca-pub-3270149665082192"
                     data-ad-slot="5912187733"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

        </div>
    </div>

    <div class="caja tablet-1-3">
        <div class="google-300x250">
            
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Banner Cuadrado 3 -->
                <ins class="adsbygoogle mianuncio3"
                     style="display:block"
                     data-ad-client="ca-pub-3270149665082192"
                     data-ad-slot="7388920931"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

        </div>
    </div>
</div>




<div class="grupo no-padding">

    <!--    ===================================== VIDEOS ===================================================================
    ======================================================================================================================= -->        

    <div class="caja tablet-40 videos">
        <div>
            <div class="caja videos__titulo">Videos <b>Recientes</b></div>

            <div class="caja videos__video-principal">            
                    <?php
                    $args = array('category_name' => 'videos', 'posts_per_page' => '8');
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        
                        
                            <div id="<?php echo $post->ID; ?>" class="videos__video-principal__item">
                                    <iframe id="video<?php echo $post->ID; ?>" class="elvideo" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'video', true); ?>" frameborder="0" allowfullscreen></iframe>

                                    <div class="caja videos__video-principal__titulo">
                                        <h3><?php echo get_the_title($ID); ?></h3>
                                        <p><?php echo get_the_excerpt($ID); ?></p>
                                    </div>
                                </div>
                    
                    <?php endwhile; ?>
                </div>
            </div>




            <div class="caja wrapper-slidervideos">
                    
                    <div id="video-next"></div>


                    <div class="slidervideo">
                        <?php
                        $args = array('category_name' => 'videos', 'posts_per_page' => '8', );
                            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                            <div class="slidervideo__item">

                                    <div class="caja base-30 slidervideo__item__thumbnail">
                                        <img src="http://img.youtube.com/vi/<?php echo get_post_meta($post->ID, 'video', true); ?>/default.jpg" alt="">
                                    </div>

                                    <div class="caja base-70 slidervideo__item__descripcion">
                                        <div>
                                            <a href="#<?php echo $post->ID; ?>" class="slidervideo__item__descripcion__titulo" >
                                                <?php echo get_the_title($ID); ?>
                                            </a>
                                        </div>

                                        <div class="slidervideo__item__descripcion__fecha">
                                            <?php the_time('j') ?> <?php the_time('M') ?>
                                        </div>
                                    </div>
                                </div>

                        <?php endwhile; ?>
                    </div>

                    
                    <div id="video-prev"></div>
                    
                </div>
        </div>  



    <!--    ===================================== SLIDER VERTICAL =============================================================
    ======================================================================================================================= -->
    <div class="caja tablet-60 sliderdoble">

        <div class="caja sliderdoble__titulo">Orgullo <b>de Neza</b></div>

                
        <div class="caja tablet-100 sliderdoble__primer-bloque">
                <?php 
                $args = array('category_name' => 'historias-de-exito', 'posts_per_page' => '8', );
                $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
                       <div id="<?php echo $post->ID; ?>" class="sliderdoble__display">
                            <?php
                            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                            ?>    
                            <div class="sliderdoble__display__imagen">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </div>

                            <a href="?p=<?php the_ID(); ?>" class="sliderdoble__display__titulo">
                                <div class=""><?php echo get_the_title($ID); ?></div>
                            </a>

                            <div class="sliderdoble__display__informacion">
                                <?php echo get_the_excerpt($ID); ?>
                            </div>
                       </div>

                    <?php endwhile; ?>        
            </div>

        <div class="caja tablet-100 sliderdoble__segundo-bloque wrapper-historias">

            <div id="historias-next"></div>

                <div class="sliderdoble__enlaces">
                    <?php 
                    $args = array('category_name' => 'historias-de-exito', 'posts_per_page' => '8', );
                    $id_noticia = 0;
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); $id_noticia++; ?>
                        
                        <div class="caja base-25 sliderdoble__enlaces__link" href="#<?php echo $post->ID; ?>">
                                
                                <?php
                                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                                ?>    
                                <div class="caja base-30">
                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                </div>

                                <a>
                                    <?php echo get_the_title($ID); ?>
                                </a>

                                    <div class="sliderdoble__enlaces__link__fecha">
                                        <span class="sliderdoble__enlaces__link__fecha__dia"><?php the_time('j') ?></span>
                                        <span class="sliderdoble__enlaces__link__fecha__mes"><?php the_time('M') ?></span>
                                    </div>
                            </div>
                       
                        <?php endwhile; ?>

                    </div>

                <div id="historias-prev"></div>

            </div>
         
                     
    </div>
</div>


<div class="grupo sitios">

    <div class="caja">
        <div class="caja sliderdoble__titulo">Sitios <b>de Interés</b></div>
    </div>

    
    <div  id="owl-demo"  class="slider_sitios">
            <?php 
            $args = array('category_name' => 'sitios-de-interes', 'posts_per_page' => '10' );
            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    
                <div>

                    <div class="caja base-100 sitios__item__foto">
                            <?php
                            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                            ?>    
                            <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                        </div>
                        

                    <div class="caja base-100 sitios__item__textos">
                            <div class="sitios__item__textos__titulo">
                                    <a href="?p=<?php the_ID(); ?>">
                                        <?php echo get_the_title($ID); ?>
                                    </a>
                                </div>

                            <div class="sitios__item__textos__resumen">

                                <div class="sitios__item__textos__resumen__textos">
                                    <?php echo get_the_excerpt($ID); ?>
                                </div>
                            </div>
                        </div>
                </div>

                <?php endwhile; ?>
    </div>

    <div class="customNavigation">
        <a class="btn prev"><</a>
        <a class="btn next">></a>
      </div>

</div>


<?php // get_sidebar('menu'); ?>
<!--==============================Pie de página=================================-->
<?php get_footer(); ?>