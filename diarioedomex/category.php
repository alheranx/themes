<?php get_header(); ?>

<!--============================== Portada Slidrs =================================-->
<div class="grupo portada">
    
    <!--    ===================================== SLIDER 1 ========================================   -->
    <div class="caja base-100 web-75">
        <div class="slider1">     
            <div class="caja no-padding tablet-100">
                <ul class="slider1__slider">
                    <?php
                    $args = array('cat' => the_category_ID(false), 'posts_per_page' => '4', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                        ?>

                        <li>
                            <a href="?p=<?php the_ID(); ?>" class="slider1__slider__imagen">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </a>

                            <div class="slider1__slider__titulo">
                                <a href="?p=<?php the_ID(); ?>">
                                        <?php echo get_the_title($ID); ?>
                                    </a>

                                     <b class="slider1__slider__titulo__fecha">
                                         <?php the_time('j') ?> de <?php the_time('M') ?>
                                     </b>
                                </div>
                            
                        </li>


                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
    

    <!--    ===================================== SLIDER 2 ========================================   -->
    <div class="caja tablet-25 sliderslaterales">

        <div class="sliderlateral slider2">
            <ul class="sliderlateral__slider slider2__slider">
                <?php
                $args = array('cat' => the_category_ID(false), 'posts_per_page' => '4', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    
                    <?php
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                    ?>

                    <li>
                            <a href="?p=<?php the_ID(); ?>">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </a>

                            <div class="sliderlateral__slider__titulo slider2__slider__titulo">
                                <a href="?p=<?php the_ID(); ?>">
                                    <?php echo get_the_title($ID); ?>
                                </a>
                            </div>
                            
                        </li>

                <?php endwhile; ?>
            </ul>
        </div>

        
        <!--    ===================================== SLIDER 3 ========================================   -->
        <div class="sliderlateral slider3">
            <ul class="sliderlateral__slider slider3__slider">
                <?php
                $args = array('cat' => the_category_ID(false), 'posts_per_page' => '4', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    
                    <?php
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                    ?>

                    <li>
                            <a href="?p=<?php the_ID(); ?>">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </a>

                            <div class="sliderlateral__slider__titulo slider3__slider__titulo">
                                <a href="?p=<?php the_ID(); ?>">
                                    <?php echo get_the_title($ID); ?>
                                </a>
                            </div>
                            
                        </li>

                <?php endwhile; ?>
            </ul>
        </div>


        <!--    ===================================== SLIDER 4 ========================================   -->
        <div class="sliderlateral slider4">
            <ul class="sliderlateral__slider slider4__slider">
                <?php
                $args = array('cat' => the_category_ID(false), 'posts_per_page' => '4', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    
                    <?php
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                    ?>

                    <li>
                            <a href="?p=<?php the_ID(); ?>">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </a>

                            <div class="sliderlateral__slider__titulo slider4__slider__titulo">
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


<!--============================== Google Ads enmedio =================================-->
<div class="grupo">
    <div class="caja base-100 anuncio720">
            <div class="anuncio720__anuncio">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- diarioedomex.com (secciones 1) -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-5933170404538438"
                     data-ad-slot="1771763902"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>            
        </div>
</div>


<div class="grupo no-padding borde-superior">
    
    <!--============================== Main Izquierda =================================-->
    <div class="caja base-100 web-70">
        

        <!--============================== Ultimas Noticias =================================-->
        <div class="ultimas">
                <?php 
                $post_number = 1;
                $args = array('cat' => the_category_ID(false), 'posts_per_page' => '8', 'offset' => '4',);
                $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        
                    <div class="caja base-50 movil-50 tablet-50 ultimas__item">
                        <div class="ultimas__item__contenedor">
                                <?php if(has_post_thumbnail()) { ?>
                                        
                                    
                                    <?php
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                                    ?>    
                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="ultimas__item__contenedor__imagen">

                                    
                                    <a href="?p=<?php the_ID(); ?>" class="ultimas__item__contenedor__titulo">
                                            <?php echo get_the_title($ID); ?></a>


                                <?php } else { ?>
                                        
                                    <a href="?p=<?php the_ID(); ?>" class="ultimas__item__contenedor__titulo ultimas__item__contenedor__titulosolo">
                                            <?php echo get_the_title($ID); ?></a>

                                <?php } ?>

                                    
                                </div>

                     <?php
                        $categorias = get_the_category( $post->ID );
                        $imagen = $categorias[0]->slug;
                        
                        switch ($imagen) {
                            case 'zona-de-los-volcanes':
                                $mostrar_logo = '<img src="'.get_template_directory_uri().'/img/zona-de-los-volcanes.png">';
                                $logo = true;
                                break;

                            case 'zona-norte':
                                $mostrar_logo = '<img src="'.get_template_directory_uri().'/img/zona-norte.png">';
                                $logo = true;
                                break;

                            case 'zona-oriente':
                                $mostrar_logo = '<img src="'.get_template_directory_uri().'/img/zona-oriente.png">';
                                $logo = true;
                                break;

                            case 'valle-de-mexico':
                                $mostrar_logo = '<img src="'.get_template_directory_uri().'/img/valle-de-mexico.png">';
                                $logo = true;
                                break;

                            case 'valle-de-toluca':
                                $mostrar_logo = '<img src="'.get_template_directory_uri().'/img/valle-de-toluca.png">';
                                $logo = true;
                                break;

                            case 'valle-de-ecatepec-texcoco':
                                $mostrar_logo = '<img src="'.get_template_directory_uri().'/img/valle-de-ecatepec-texcoco.png">';
                                $logo = true;
                                break;
                            
                            default:
                                $logo = false;

                                # code...
                                break;
                        }
                    ?>
                        
                        <?php if($logo) { ?>
                            <div class="caja base-30 ultimas__item__logito">
                                <?php echo $mostrar_logo; ?>
                            </div>

                            <div class="caja base-70 no-padding ultimas__item__textos">
                                <div class="ultimas__item__textos__fecha">
                                    <?php the_time('j') ?> de <?php the_time('M') ?>
                                </div>

                                <div class="ultimas__item__textos__resumen">
                                    <?php echo get_the_excerpt($ID); ?>
                                </div>
                            </div>
                        <?php } else { ?>

                            <div class="caja base-100 no-padding ultimas__item__textos">
                                <div class="ultimas__item__textos__fecha">
                                    <?php the_time('j') ?> de <?php the_time('M') ?>
                                </div>

                                <div class="ultimas__item__textos__resumen">
                                    <?php echo get_the_excerpt($ID); ?>
                                </div>
                            </div>

                        <?php } ?>

               

                    </div>

                    <?php if($post_number % 2 == 0) { echo '<hr>'; } ?>

                    <?php $post_number++; endwhile; ?>     
        </div>


    </div>


    <div class="caja web-30">
        <?php get_sidebar('categoria'); ?>
    </div>
</div>
      
<!--==============================footer=================================-->
<?php get_footer(); ?>