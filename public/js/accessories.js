$(document).ready(function(){
	$(".rating-options li div[data-score]").raty({
		score: function(){return $(this).data("score"); },
		readOnly:true,
		starOff : '/yadawi/public/images/star-off.png',
  		starOn  : '/yadawi/public/images/star-on.png',
  		space : false
	});
});