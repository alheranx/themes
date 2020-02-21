<div class="generales__relacionadas">
                <div class="generales__relacionadas__bloque">
                    <h4 class="generales__relacionadas__titulo">Notas relacionadas</h4>
                </div>

                <div class="generales__relacionadas__bloque">
                    <?php
                        $tags = wp_get_post_tags($post->ID);
                        $first_tag = $tags[0]->term_id;
                        $args2 = array('tag__in' => array($first_tag), 'post__not_in' => array($post->ID), 'posts_per_page'=>2, 'caller_get_posts'=>1 );
                        $otro_query = new WP_Query($args2); while ($otro_query->have_posts()) : $otro_query->the_post(); ?>
                                    
                            <div class="grupo generales__relacionadas__item">
                                <?php
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'mini' );
                                ?>    
                                
                                <div class="caja base-20 no-padding">

                                    <img data-original="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="lazy generales__relacionadas__item__imagen">
                                </div>

                                <div class="caja base-80 no-padding">
                                    <a href="?p=<?php the_ID(); ?>" class="generales__relacionadas__item__titulo">
                                          <?php echo get_the_title($ID); ?>
                                    </a>

                                    <!-- <div class="generales__relacionadas__item__fecha">
                                          <b class="icon icon-fecha"></b> <?php the_time('j') ?> de <?php the_time('M') ?>
                                    </div> -->
                                </div>
                            </div>

                            <?php endwhile; 
                        ?>
                </div>
            </div>