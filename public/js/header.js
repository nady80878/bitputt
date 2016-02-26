$(document).ready(function(){
	$(".box").css("height" , $(this).height());
	$(window).resize(function(){
		$(".box").css("height" , $(this).height());
	});
	var errorMsg = $(".error");
	if($.trim(errorMsg.text()).length > 0){
		errorMsg.slideDown(700);
		errorMsg.click(function(){
			errorMsg.slideUp(700);
		});
	}
	
	$(".sign").click(function(e){
		e.preventDefault();
		$(".sign-wrapper").fadeIn('1000', function() {
				$(".sign-box").addClass("animated rubberBand").removeClass('bounceOut');
		});
	});	

	$(".close").on('click',function(){
		var bax = $(this).parent().addClass("animated bounceOut").removeClass('rubberBand');
		setTimeout(function(){
			bax.parent().fadeOut("1000");
		},1000);
	});
});