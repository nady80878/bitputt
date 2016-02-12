$(document).ready(function(){
	slides = $(".slides");
	slider = $(".slider");
	slide = $(".slide");
	slideWidth = slider.width();
	slide.css("width",slideWidth+"px");
	counter = 1;
 	interval = setInterval(changeAutoSlide , 6000);
	$(window).resize(function(){
		resizeSlider();
	});
	$(".prev").click(function(){
		changePrevSlide();	
	})
	$(".next").click(function(){
		changeNextSlide();
	})
	$(".prev , .next").mouseleave(function(){
		interval = setInterval(changeAutoSlide , 6000);
	}).mouseenter(function(){
		clearInterval(interval);
	});
	function resizeSlider(){
		slideWidth = slider.width();
		slide.css("width",slideWidth+"px");
		if(Number(slides.css("margin-left")) >= 0){
			slides.css("margin-left",(slideWidth*counter)+"px");
		}else{
			slides.css("margin-left",(-1*slideWidth*counter)+"px");
		}
	}
	function changeNextSlide(){
		slides.find('.slide-desc').hide();
		slides.animate({
			"margin-left" : "+="+(slideWidth-.4)+"px"
		},
		 3000,function(){
		 	counter--;
		 	if(counter < 1){
		 		counter = slide.length;
		 		slides.css("margin-left" ,(-slideWidth*counter)+"px");
		 	}
		 	$(this).find('.slide-desc').slideDown(900).delay(3000).slideUp(850);
		 });
		
	}
	function changePrevSlide(){
		slides.animate({
			"margin-left" : "-="+(slideWidth+.4)+"px"
		},
		 3000,function(){
		 	counter++; 	
		 	if(counter > slide.length){
		 		counter = 1;
		 		slides.css("margin-left","0px");
		 	}
		 	$(this).find('.slide-desc').slideDown(900).delay(3000).slideUp(850);
		 });
		
	}
	function changeAutoSlide(){
		changePrevSlide();
	}
	//raty plugin code
	$(".product-rating").raty({
		starOff : '/yadawi/public/images/star-off.png',
  		starOn  : '/yadawi/public/images/star-on.png',
  		space : false
	});
});