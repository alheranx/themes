$(document).ready(function() {
		var offset = 250;
		var duration = 300;
		 
		// jQuery(window).scroll(function() {	
		// 	if (jQuery(this).scrollTop() > offset) {
		// 		jQuery(".subir").fadeIn(duration);
		// 	} else {
		// 		jQuery(".subir").fadeOut(duration);
		// 	}
		// });
		 
		 
		jQuery(".subir").click(function(event) {
			event.preventDefault();
		 	jQuery("html, body").animate({scrollTop: 0}, duration);
		 	return false;
		})


	    $('.tiene-submenu > a').on('click', function(e) {
			e.preventDefault();
		});

		$('#toggle-menu').on('click', function() {
			$("#menu-principal").slideToggle();
		});


		$('.menu-principal ul li').on('click', function() {
			$(this).find(".sub-menu").stop().slideToggle();
		});
		


		$('.menu-principal2 ul li').hover(function() {
			$(this).find(".sub-menu").stop().slideToggle();
		});
	    

		// $('.bxslider').bxSlider(
		// 	{ mode: 'horizontal', auto: true, pager: false, pause: 4000, touchEnabled: true, easing: true}
		// );

		// $('.s300x250').bxSlider(
		// 	{ mode: 'horizontal', auto: true, pager: false, randomStart: true, controls: false, speed: 1000, pause: 5000}
		// );

		// $('.s300x600').bxSlider(
		// 	{ mode: 'horizontal', auto: true, pager: false, randomStart: true, controls: false, speed: 1000, pause: 5000}
		// );

		// $('.s300x600_2').bxSlider(
		// 	{ mode: 'horizontal', auto: true, pager: false, randomStart: true, controls: false, speed: 1000, pause: 5000}
		// );

		// $('.s300x600_3').bxSlider(
		// 	{ mode: 'horizontal', auto: true, pager: false, randomStart: true, controls: false, speed: 1000, pause: 5000}
		// );

		// $('.s728x90').bxSlider(
		// 	{ mode: 'horizontal', auto: true, pager: false, randomStart: true, controls: false, speed: 1000, pause: 5000}
		// );

		// $('.s468x60').bxSlider(
		// 	{ mode: 'horizontal', auto: true, pager: false, randomStart: true, controls: false, speed: 1000, pause: 5000}
		// );

	      $('.galeria img').on('hover', function() {
	        $(this).css("opacity", 0.5);
	      });

	      $('.galeria img').on('mouseleave', function() {
	        $(this).css("opacity", 1);
	      });




		$(".galeria .foto").hover(
			function () {
			$(this).find('.lupa').stop(true, true).animate({ top : "0px" }, 300);
			$(this).find('.mifoto').stop(true, true).animate({ width : "200px", opacity : 0.7, top: "-25px", left : "-25px" }, 300);
			}, 
			function () {
			$(this).find('.lupa').stop(true, true).animate({ top : "150px" }, 300);
			$(this).find('.mifoto').stop(true, true).animate({ width : "150px", opacity : 1, top: "0px", left : "0px" }, 300);
			}
		);


		$(".enlacecontacto").click(function(event) {
			event.preventDefault();

			console.log("Me encontraste");
			$("html, body").animate({ scrollTop: $('body').height() }, 1000);
			});

});