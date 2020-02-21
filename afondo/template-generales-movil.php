<div class="caja base-100 tablet-50 generales__item borde-derecha">
        <div class="generales__item__categoria">
            <?php the_category(' ');  ?>
        </div>
        
        <?php if(has_post_thumbnail()) { ?>
            
            <?php
            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
            ?>

            <div class="generales__item__imagen">
                <a href="?p=<?php the_ID(); ?>">
                    <img data-original="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="lazy">    
                </a>
            </div> 
            

            
            <a href="?p=<?php the_ID(); ?>" class="generales__item__titulo">
                    <?php echo get_the_title($ID); ?></a>


        <?php } else { ?>
                
            <a href="?p=<?php the_ID(); ?>" class="generales__item__titulo generales__item__titulosolo">
                    <?php echo get_the_title($ID); ?></a>

        <?php } ?>


        <div class="generales__item__autor">
            <?php the_author_posts_link(); ?>
        </div>

        <div class="generales__item__resumen">
            <?php echo get_the_excerpt($ID); ?>
        </div>



        <?php get_template_part('template-relacionadas'); ?>


        </div>