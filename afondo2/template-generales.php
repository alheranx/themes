<div class="caja base-100 tablet-50 generales__item borde-derecha">
        <div class="generales__item__categoria">
            <?php the_category(', ');  ?>
        </div>
        
        <?php if(has_post_thumbnail()) { ?>
            
            <?php
            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
            ?>

            <div class="generales__item__imagen">
                <img data-original="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="lazy">    
            </div> 
            

            
            <a href="?p=<?php the_ID(); ?>" class="generales__item__titulo">
                    <?php echo get_the_title($ID); ?></a>


        <?php } else { ?>
                
            <a href="?p=<?php the_ID(); ?>" class="generales__item__titulo generales__item__titulosolo">
                    <?php echo get_the_title($ID); ?></a>

        <?php } ?>


        <!-- <div class="generales__item__fecha">
            <b class="icon icon-fecha"></b> <?php the_time('j') ?> de <?php the_time('M') ?>
        </div> -->

        <div class="caja no-padding base-100 generales__social">
            <div class="generales__social__likes">
                <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-layout="button_count" data-show-faces="false" data-send="false"></div>
            </div>

            <div class="generales__social__contador">
                <span class="icon icon-comentarios"></span>
                <span class="fb-comments-count comentarios col-md-2 col-xs-2" data-href="<?php the_permalink() ?>"></span>
            </div>
        </div>

        <div class="generales__item__autor">
            <?php the_author_posts_link(); ?>
        </div>

        <div class="generales__item__resumen">
            <?php echo get_the_excerpt($ID); ?>
        </div>



        <?php get_template_part('template-relacionadas'); ?>


        </div>