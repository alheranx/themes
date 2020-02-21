$(document).ready(function() {

	// Magnific Pop-Up
  	$('.imagen-enlace').magnificPopup({
			type: 'image'
  	});

	var owl = $("#owl-demo");

      owl.owlCarousel({

      items : 6, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
      $(".play").click(function(){
        owl.trigger('owl.play',1000);
      })
      $(".stop").click(function(){
        owl.trigger('owl.stop');
      })



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


	$('img').addClass('foto');


	$('.buscar-link').click(function(event) {
			event.preventDefault();
			$('.buscar').stop().slideToggle();
			console.log("menu");
		})



	//  SLIDER VIDEO LINKS
	var videoActivo = document.getElementById("popupVid");

	$('.slidervideo__item__descripcion a').click(function(e) {
		e.preventDefault();
		var videoId = $(this).attr('href');
		var enlace = videoId;

		
		$(".elvideo")[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')
		

		$('.videos__video-principal__item').hide();
		$(enlace).show();
		//$('#video').attr("src", enlace);
	});


	$('.sliderdoble__enlaces__link').click(function(e) {
		e.preventDefault();
		var enlaceId = $(this).attr('href');
		$('.sliderdoble__display').hide();
		$(enlaceId).show();
		console.log('Click a: '+enlaceId);
	});




	var slider1 = $('.slider1__slider').bxSlider({ 
		auto: true, 
		pause: 4000, 
		startSlide: 0, 
		onSlideNext: function() {
			slider2.goToNextSlide();
		},
		onSlidePrev: function() {
			console.log("PREV");
			slider2.goToPrevSlide();
		},
		pager: false, 
		nextSelector: '#slider-next',
		prevSelector: '#slider-prev',
		nextText: '>',
		prevText: '<'
	});

	var slider2 = $('.slider2__slider').bxSlider({ 
		startSlide: 1, 
		onSlideNext: function() {
			slider3.goToNextSlide();
		},
		onSlidePrev: function() {
			console.log("PREV");
			slider3.goToPrevSlide();
		},
		pager: false, 
		controls: false
	});
	

	var slider3 = $('.slider3__slider').bxSlider({ 
		startSlide: 2, 
		mode: 'vertical', 
		pager: false, 
		controls: false
	});


	$('.slidervideo').bxSlider({  
		nextText: 'NEXTER', 
		prevText: 'PREVER', 
		touchEnabled: false, 
		auto: true, 
		mode: 'vertical', 
	    minSlides: 4, 
	    maxSlides: 4, 
	    slideMargin: 10, 
	    pager: false, 
	    nextSelector: '#video-next',
		prevSelector: '#video-prev'
	});

	$('.sliderdoble__enlaces').bxSlider({  
		nextText: 'NEXTER', 
		prevText: 'PREVER', 
		touchEnabled: false, 
		auto: true, 
		mode: 'vertical', 
		width: '100px', 
	    minSlides: 3,
	    slideMargin: 3, 
	    pager: false, 
	    nextSelector: '#historias-next',
		prevSelector: '#historias-prev'
	});


	$('.banner-superior').bxSlider({  
		touchEnabled: true, 
		auto: true, 
	    pager: false, 
	    infiniteLoop: false
	});




		var offset = 250;
		var duration = 300;
		 
		jQuery(window).scroll(function() {	
			if (jQuery(this).scrollTop() > offset) {
				jQuery(".subir").fadeIn(duration);
			} else {
				jQuery(".subir").fadeOut(duration);
			}
		});
		 
		 
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
	    

		$('.bxslider').bxSlider(
			{ mode: 'horizontal', auto: true, pager: false, pause: 4000, touchEnabled: true, easing: true}
		);


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