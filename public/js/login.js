$(document).ready(function(){
	var errorMsg = $(".error");
	if($.trim(errorMsg.text()).length > 0){
		errorMsg.slideDown(700);
		errorMsg.click(function(){
			errorMsg.slideUp(700);
		});
	}
});