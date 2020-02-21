$(document).ready(function() {

	$('.menu-toggle__menu-icon__icono').click(function(event) {
			event.preventDefault();
			$('#menu-principal').stop().slideToggle();
			console.log("menu");
		})

	$(".menu-principal__home").hover( function () {
		//console.log("Pasando encima");
		$(this).find('a img').stop(true, true).animate({ marginTop : "7px", width : "38px" }, 100);
		}, 
		function () {
		//console.log("Quitando");
		$(this).find('a img').stop(true, true).animate({ marginTop : "10px", width : "30px" }, 300);
		}
	);


	// $('img').addClass('foto');


	$('.buscar-link').click(function(event) {
			event.preventDefault();
			$('.buscar').stop().slideToggle();
			console.log("menu");
		})


	var slider1 = $('.slider1__slider').bxSlider({ 
		auto: true, 
		pause: 4000, 
		startSlide: 0, 
		pager: false, 
		nextSelector: '#slider-next',
		prevSelector: '#slider-prev',
		nextText: '>',
		prevText: '<'
	});



    $('.tiene-submenu > a').on('click', function(e) {
		e.preventDefault();
	});

	$('#toggle-menu').on('click', function() {
		$("#menu-principal").slideToggle();
	});


	$('.menu-principal ul li').on('click', function() {
		$(this).find(".sub-menu").stop().slideToggle();
	});
	
	$('.bxslider').bxSlider(
		{ mode: 'horizontal', auto: true, pager: false, pause: 4000, touchEnabled: true, easing: true}
	);


	$(".destacados__item").hover( function(event) {
		event.preventDefault();

		console.log("Me encontraste");
		$(this).find('.destacados__item__titulo').stop().animate({ top : "-250px" }, 500);
		//$(this).find('.destacados__item__titulo').hide("slow");
		// $(this).find('a').animate({ 
		// 	'height' : '20px'
		// 	}, 1000);
	}).mouseleave( function(event) {
		event.preventDefault();

		console.log("Me encontraste");
		$(this).find('.destacados__item__titulo').stop().animate({ top : "0px" }, 500);
	});

});

$(window).load(function(){
	var anchoventana = $(window).width();
    console.log("El ancho de la ventana es: "+anchoventana);	

	if (anchoventana < 620 | anchoventana > 900) {
		var anchologo = $('.encabezado__titulo img').height();
		$('.encabezado__titulo__enlace').height(anchologo);
        $('.bloque-fecha').height(anchologo);
        $(".redes-sociales").css("position", "absolute");
	}

	$('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(100).css({'overflow':'visible'});
    
});

