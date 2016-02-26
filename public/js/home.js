$(document).ready(function(){
	$(".prev").click(function(){
		$(".courses").animate({
			'margin-top': "+=400px"
		},1000);
	});
	$(".next").click(function(){
		$(".courses").animate({
			'margin-top': "-=400px"
		},1000);
	});
});