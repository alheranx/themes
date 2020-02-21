<div class="slider1">
    <div class="caja tablet-100">
        <ul class="slider1__slider">
            <?php
            $args = array('category_name' => 'principal', 'posts_per_page' => '3');
            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
                <li>
                    <a href="?p=<?php the_ID(); ?>" class="slider1__slider__imagen">
                        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); ?>
                        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                    </a>

                    <div class="slider1__slider__titulo">
                        <a href="?p=<?php the_ID(); ?>">
                                <?php echo get_the_title($ID); ?>
                            </a>

                             <b class="slider1__slider__titulo__fecha">
                                 <b class="icon icon-calendar"></b> <?php the_time('j') ?> de <?php the_time('M') ?>
                             </b>
                        </div>
                    
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>