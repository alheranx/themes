<div class="grupo no-padding slider2">
        <div class="caja tablet-100 no-padding">
            <ul class="slider2__slider">
                <?php
                    $arraySecciones = [
                        ['seccion' => 'valle-de-toluca', 'clase' => 'secciones__valle-de-toluca', 'titulo' => 'Valle de Toluca'], 
                        ['seccion' => 'valle-de-mexico', 'clase' => 'secciones__valle-de-mexico', 'titulo' => 'Valle de México'], 
                        ['seccion' => 'zona-oriente', 'clase' => 'secciones__zona-oriente', 'titulo' => 'Zona Oriente'], 
                        ['seccion' => 'zona-volcanes', 'clase' => 'secciones__zona-volcanes', 'titulo' => 'Zona Volcanes'], 
                        ['seccion' => 'zona-norte', 'clase' => 'secciones__zona-norte', 'titulo' => 'Zona Norte'], 
                        ['seccion' => 'zona-sur', 'clase' => 'secciones__zona-sur', 'titulo' => 'Zona Sur']
                    ];

                    foreach ($arraySecciones as $seccion) { 
                    ?>

                    <li class="secciones__item <?php echo $seccion['clase']; ?>">


                        <div class="grupo secciones__item__notas">
                            <div class="caja base-50 no-padding">

                                <h3 class="grupo base-100 secciones__item__titulo">
                                    <div class="secciones__item__titulo__texto">
                                        <?php echo $seccion['titulo'] ?>
                                    </div>
                                </h3>

                                <?php
                                $categoria = $seccion['seccion'];
                                $args = array('category_name' => $categoria, 'posts_per_page' => '1', );
                                $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                    
                                    <?php
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                                    ?>

                                    <div class="grupo padding">
                                        <div class="caja secciones__item__principal">
                                                <a href="?p=<?php the_ID(); ?>" class="secciones__item__principal__imagen">
                                                    <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                                                </a>

                                                <div class="secciones__item__principal__titulo">
                                                    <div class="secciones__item__principal__fecha">
                                                         <b><span class="icon icon-fecha"></span><?php the_time('j') ?> de <?php the_time('M') ?></b>
                                                     </div>

                                                    <a href="?p=<?php the_ID(); ?>">
                                                        <?php echo get_the_title($ID); ?>
                                                    </a>
                                                </div>
                                        </div>
                                    </div>


                                <?php endwhile; ?>
                            </div>


                            <div class="caja base-50 secciones__item__secundaria__wrapper">
                                <?php
                                $numeropost = 1;
                                $args = array('category_name' => $categoria, 'posts_per_page' => '4', 'offset' => '1' );
                                $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                    
                                    <?php
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail2' );
                                    ?>

                                    <div class="caja base-50 secciones__item__secundaria">

                                        <a href="?p=<?php the_ID(); ?>" class="secciones__item__secundaria__imagen" style="background: #333 url(<?php echo $image_url[0]; ?>); background-size: cover;">
                                        </a>
                                        
                                        <div class="secciones__item__secundaria__fecha">
                                             <b><span class="icon icon-fecha"></span><?php the_time('j') ?> de <?php the_time('M') ?></b>
                                         </div>

                                        <a href="?p=<?php the_ID(); ?>" class="secciones__item__secundaria__titulo">
                                            <?php echo get_the_title($ID); ?>
                                        </a>
                                        
                                    </div>

                                    <?php
                                        if ($numeropost == 2) {
                                            echo '<hr class="secciones__item__secundaria__hr">';
                                        }
                                    ?>


                                <?php $numeropost++; endwhile; ?>
                            </div>
                        </div><!-- Grupo Bloque -->
                        
                    </li>

                    <?php } ?>

            </ul>

            <div class="slider2__controles">
                <span id="sliderfooter-prev" class="slider2__controles__atras"></span>
                <span id="sliderfooter-next" class="slider2__controles__adelante"></span>
            </div>
        </div>
</div>