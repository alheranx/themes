<?php
/*
 Template Name: contacto
*/
?>


<?php get_header(); ?>


<!--==============================Contenidos=================================-->

<div class="grupo contacto" ng-app="formulario" ng-controller="myCtrl">

    <div class="caja tablet-40 contacto__formulario">

		<h3 class="bottom-30">Formulario de Contacto</h3>
        <form name="myForm" id="contact-form" method="post" enctype="multipart/form-data" action="<?php bloginfo('template_directory'); ?>/mail.php" class="form-horizontal">                    
			
			<div class="form-group">
				<label for="nombre">Nombre: </label>
				<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre:" ng-model="nombreIngresado" ng-minlength="3" ng-maxlength="45" required>
				<div class="mensaje" ng-show="myForm.nombre.$error.required"> No has ingresado tu nombre.</div>
				<div class="mensaje" ng-show="myForm.nombre.$error.minlength"> ¿No te parece que el nombre es muy corto?.</div>
				<div class="mensaje" ng-show="myForm.nombre.$error.maxlength"> Creo que el nombre es demasiado largo.</div>
			</div>

			<div class="form-group">
				<label for="telefono">Teléfono:</label>
				<input class="form-control" id="telefono" name="telefono" type="text"  placeholder="Teléfonos:" ng-model="telefonoIngresado" ng-minlength="8" ng-maxlength="40" required>
				<div class="mensaje" ng-show="myForm.telefono.$error.required"> No has ingresado tu teléfono.</div>
				<div class="mensaje" ng-show="myForm.telefono.$error.minlength"> Con tan pocos números no podremos llamarte.</div>
				<div class="mensaje" ng-show="myForm.telefono.$error.maxlength"> Con dos números es suficiente.</div>
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input class="form-control" type="text" name="email" id="email" placeholder="E-mail:" ng-model="emailIngresado" ng-minlength="5" ng-maxlength="45" required>
				<div class="mensaje" ng-show="myForm.email.$error.required"> Coloca tu e-mail para poder contactarte.</div>
				<div class="mensaje" ng-show="myForm.email.$error.minlength"> ¡Oye!, jamás había visto un e-mail tan corto.</div>
				<div class="mensaje" ng-show="myForm.email.$error.maxlength"> Con dos números es suficiente.</div>
			</div>

			<div class="form-group">
				<label for="message">Mensaje:</label>
				<textarea class="form-control" name="message" id="message" ng-model="mensajeIngresado" ng-minlength="8" required></textarea>
				<div class="mensaje" ng-show="myForm.message.$error.required"> Falta tu mensaje.</div>
				<div class="mensaje" ng-show="myForm.message.$error.minlength"> Tu mensaje es muy corto.</div>
			</div>

			<div id="form-messages" class="form-group">
				
			</div>

			<div class="form-group">
				<input class="btn btn-primary" type="submit" name="botonenviar" value="Enviar">
			</div>
		</form>                 
    </div>

    
    <div class="caja tablet-60 contacto__mapa">
        <div id="map"></div>


        <div class="contacto__mapa__direccion">
        	Av. Sor Juana Inés de la Cruz No. 421, <br>
        	Col. Evolución.  C.P. 57700.<br>
        	Cd. Nezahualcóyotl, Estado de México.<br>
			Teléfono: 5765 6612
        </div>
    </div>

</div><!-- main -->



<!--==============================footer=================================-->
<?php get_footer(); ?>