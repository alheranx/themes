	<footer id="pie" class="grupo total pie">

		<div class="caja tablet-70 pie__direccion">
			<h3>Publineza</h3>

			<address>
				Av. Sor Juana Inés de la Cruz No. 421, <br>
				Col. Evolución. C.P. 57700.<br>
				Cd. Nezahualcóyotl, Estado de México.<br>
				Teléfono: 5765 6612
			</address>
		</div>
		
		<div class="caja tablet-30 pie__redes">
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c53c0bac5e16c0"></script>
			<div class="addthis_inline_follow_toolbox"></div>
		</div>

	</footer>

</div><!-- wrapper -->



<?php if(is_page('contacto')) { ?>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB97VNWgKMAWFJ1_xxvH4LiWZT5JOFFQkg&signed_in=true&callback=initMap"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script type="text/javascript">

var app = angular.module('formulario', []);

app.controller('myCtrl', function($scope) {
	$scope.validacion = /^\s*\w*\s*$/; //carácteres a validar en el formulario
});

function initMap() {
  var myLatLng = { lat: 19.4009848, lng: -99.01697516 };

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}

/* ==================================================================================================================
============================================================    ENVIAR FORMULARIO 	=================================
*/

$(function() {
	var form = $('#contact-form');
	var formMessages = $('#form-messages');

	$(form).submit(function(e) {
		e.preventDefault();
		// Serialize the form data.
		var formData = $(form).serialize();
		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			console.log(response);
			$('#form-messages').show('slow');
			// Make sure that the formMessages div has the 'success' class.
			//$(formMessages).removeClass('error');
			//$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response);

			$('#nombre').val('');
			$('#telefono').val('');
			$('#email').val('');
			$('#message').val('');
		})
		.fail(function(data) {
			console.log(response);
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});

</script>
<?php } ?>





<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/owl-carousel/owl.carousel.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/modal/jquery.magnific-popup.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
</body>
</html>