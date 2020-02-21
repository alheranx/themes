<?php /* Template Name: PaginaColabora */ ?>
<?php get_header(); ?>


<div class="page">
    <div class="container">


        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div class="row">
                <div class="col-12">
                    <h2 class="text-center font-weight-bold mt-3 mb-3 mt-md-5 mb-md-5 p-3 p-md-5 text-primary page__title__biblioteca">
                   
                   
                        <?php echo get_the_title($ID); ?>

                        
                    </h2>
                </div>
            </div>


            <div class="row">
                <div class="col-12 pl-md-5 pr-md-5 page__content">
                    

                    <?php the_content(); ?>


                </div>
            </div>

        <?php endwhile; ?>

    </div>
</div>




<div class="container-fluid bg-dark contact">
    <div class="container">
        <div class="row">
            <div class="col-12 p-3 pt-5 pb-5 p-md-5">
                <h4 class="font-weight-bold text-center contact__title">Cuéntanos</h4>
                <p class="text-center">Dudas y sugerencias, llena el formulario.</p>
            </div>


            <div class="col-12 col-md-8 offset-md-2 mb-5">
                <form>
                    <div class="row">
                        <div class="col-12 col-md pb-2 pr-md-1">
                            <input type="text" class="form-control rounded-0 border-0" placeholder="Nombre">
                        </div>
                        <div class="col-12 col-md pb-2 pl-md-1">
                            <input type="text" class="form-control rounded-0 border-0" placeholder="Correo electrónico">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col pb-2">
                            <input type="text" class="form-control rounded-0 border-0" placeholder="Asunto">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col pb-2">
                            <textarea class="form-control rounded-0 border-0" name="" id="" cols="30" rows="10" placehoder="Escribe tu mensaje aquí ... ">Escribe tu mensaje aquí ...</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col pb-2">
                            <button type="submit" class="btn btn-primary w-100 p-2">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid bg-primary barra">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-light text-center p-3 pt-5 pb-5 p-md-5">
                <h2 class="barra__title">PRENSA</h2>

                <p>
                    Para saber más sobre MANDHALA, ponte en contacto con nuestro equipo de comunicación.
                </p>

                
                <img src="<?php bloginfo('template_directory'); ?>/img/rayo.png" alt="" class="w-25 mt-3 mb-0">
                
            </div>

            <div class="col-12 col-md-6 text-light text-center p-3 pt-5 pb-5 p-md-5">
                <h2 classs="barra_title">CREA</h2>

                <p>
                    Sé parte de nuestro equipo de comunicación, redacción, diseño, colabora con trabajos específicos o imparte un taller.
                </p>

                
                <img src="<?php bloginfo('template_directory'); ?>/img/diamante.png" alt="" class="w-25 mt-3 mb-0">
                
            </div>
        </div>
    </div>
</div>

    
<!--==============================footer=================================-->
<?php get_footer(); ?>