$(document).ready(function(){
	$(".rating").raty({
		score: function(){return $(this).data("score"); },
		readOnly:true,
		starOff : '/yadawi/public/images/star-off.png',
  		starOn  : '/yadawi/public/images/star-on.png',
  		space : false
	});
});