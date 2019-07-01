$(function(){
	setTimeout(function(){
		$(".js-name-logo").fadeOut(3000);
	}, 3500);
	setTimeout(function(){
		$(".js-logo-girl").fadeTo("slow", 0);
	}, 9500);
	setTimeout(function(){
		 	$(".custom-circle-home").fadeIn(400);
	 	 }, 14500);
	 	setTimeout(function(){
		 	$(".custom-social-nyc").fadeIn(400);
	 	 }, 15500);

	/*Light Slider*/
	$("#slider").lightSlider({
        item:1,
        loop:true,
        slideMove:1,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
    });

		$(".cusotm-drop-down-content").click(function(){
			$(".custom-full-content-box").slideToggle(700);
			$(".cusotm-drop-down-content i").toggleClass("custom-drop-rotate");
			$(".slider__overlay").addClass("slider__overlay--auto");
		}); 

	 	//Hover Opacity Add On Logo
	 	$(".logo-home__separate--a").mouseenter(function(){
	 		$(".logo-home__separate--r, .logo-home__separate--w").addClass("half-opacity");
	 	});
	 	$(".logo-home__separate--a").mouseleave(function(){
	 		$(".logo-home__separate--r, .logo-home__separate--w").removeClass("half-opacity");
	 	});
	 	$(".logo-home__separate--w").mouseenter(function(){
	 		$(".logo-home__separate--r, .logo-home__separate--a").addClass("half-opacity");
	 	});
	 	$(".logo-home__separate--w").mouseleave(function(){
	 		$(".logo-home__separate--r, .logo-home__separate--a").removeClass("half-opacity");
	 	});

	 	/*show a/d to category*/
		$(".js-tabbu > a").on("click", function(){
				var category = $(this).attr("data-target");
				$(".js-showcase > li").hide().removeClass("active");
				$("[data-category=" + category + "]").addClass("active"); 
		});
		/*End*/
	 	
});

/*Wow Animation Initialization*/
new WOW().init();
