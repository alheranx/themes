<footer class="footer">
	<div class="container">
		<div class="row">
			
			<div class="col-12 col-md-4 offset-md-4 text-center pt-5 pb-5">
				<h5>Mandhala</h5>

				<p class="pl-3 pr-3 pl-md-0 pr-md-0">
					OSC feminista y de DDHH. Damos herramientas para prevenir la violencia de género a través de programas educativos.
				</p>

				<div class="text-center footer__redes">
					<i class="fab fa-facebook p-2"></i>
					<i class="fab fa-instagram p-2"></i>
					<i class="fab fa-twitter p-2"></i>
					<i class="fab fa-youtube p-2"></i>
					<i class="fas fa-envelope p-2"></i>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid bg-dark text-center">
		<div class="row">
			<div class="col-12 p-2">
				<small class="footer__creditos">
					© 2020 por Centro de derechos humanos y género Mandhala
				</small>
			</div>
		</div>
	</div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php bloginfo('template_directory'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- 
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
-->

<script>
// $("#button").click(function() {
//     $([document.documentElement, document.body]).animate({
//         scrollTop: $("#elementtoScrollToID").offset().top
//     }, 2000);
// });

$(".nav-link").click(function(){
    let anchor = $(this).attr('scrollto');
    var donde = $( '#' + anchor ).position().top;
    console.log( donde );



    $("html, body").stop().animate(
        {
            scrollTop: donde
        }, 500, 'swing', function() { 
        console.log("Terminando scroll")
    });    
})

	// $(".nav-link").click(function(e) {
	// 	e.preventDefault();
	// 	let item = $(this).attr('href');

	// 	$('html, body').stop().animate({
	// 		scrollTop: $(item).offset().top - 56
	// 	}, 2000);

	// 	$('.navbar-collapse').collapse('hide');
	// });
</script>


</body>

</html>