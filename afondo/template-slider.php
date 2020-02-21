<?php
$args = array('category_name' => 'principal', 'posts_per_page' => '4', );
$my_query = new WP_Query($args); ?>

<div class="slider1">
    <div class="caja no-padding tablet-100">
        <ul class="slider1__slider">

            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php
                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'slider' );
                ?>

                <li>
                    <a href="?p=<?php the_ID(); ?>" class="slider1__slider__imagen">
                        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                    </a>

                    <div class="slider1__slider__titulo">
                        <a href="?p=<?php the_ID(); ?>">
                                <?php echo get_the_title($ID); ?>
                            </a>

                             <!-- <span class="slider1__slider__titulo__fecha">
                                 <b class="icon icon-fecha"></b> <?php the_time('j') ?> de <?php the_time('M') ?>
                             </span> -->
                        </div>
                    
                </li>


            <?php endwhile; ?>
        </ul>


        <div class="flechas">
            <span id="slider-prev"></span>
            <span id="slider-next"></span>
        </div>
    </div>
</div>


<div class="grupo principales nomovil">
    
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <?php
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
        ?>

        <div class="caja tablet-25 principales__item">

            <a href="?p=<?php the_ID(); ?>" class="principales__imagen">
                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
            </a>

            <div class="principales__titulo">
                <a href="?p=<?php the_ID(); ?>">
                        <?php echo get_the_title($ID); ?>
                    </a>

                     <!-- <span class="slider1__slider__titulo__fecha">
                         <b class="icon icon-fecha"></b> <?php the_time('j') ?> de <?php the_time('M') ?>
                     </span> -->
                </div>
        </div>

    <?php endwhile; ?>

</div>