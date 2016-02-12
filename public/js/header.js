$(document).ready(function(){
// ---------------------------------------functions section----------------------------------------------

function openWindow(url , windowName , dimension){
	var popupWindow = window.open(url , windowName , dimension + ',resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes');
	return popupWindow;
}

function updateUserInfo(){
	$.ajax({
		url:'http://localhost/yadawi/profile',
		data: {
			'page' : 'userinfo'
		},
		method: 'POST',
		success: function(result){
			result = JSON.parse(result);
			if(result.login){
				$(".user-fullname").html(result.fullname);
				$(".user-avatar-img").attr("src",result.avatar);
				$(".user-avatar").attr("href",result.account);
				$(".user-controls").html('<li><a href="'+result.account+'" title="My account" class="user-account">My account</a></li><li><a href="http://localhost/yadawi/logout" title="Logout" class="logout-btn">Logout</a></li>');
				$(".user-info").css("background","url("+result.cover+") repeat-x center top #fff");
				$(".user-info").css("background-size","cover");
			}else{
				$(".user-fullname").html('to our online store !');
				$(".user-avatar-img").attr("src","http://localhost/yadawi/public/images/user.png");
			}	
			window.close();
		}
	});
}

(function($) {
	$.fn.clickToggle = function(func1, func2) {
		var funcs = [func1, func2];
		this.data('toggleclicked', 0);
		this.click(function() {
			var data = $(this).data();
			var tc = data.toggleclicked;
			$.proxy(funcs[tc], this)();
			data.toggleclicked = (tc + 1) % 2;
		});
		return this;
	};
}(jQuery));
//--------------------------------- error messages sliding ------------------------------------
var errorMsg = $(".error");
if($.trim(errorMsg.text()).length > 0){
	errorMsg.slideDown(700);
	errorMsg.click(function(){
		errorMsg.slideUp(700);
	});
}

//--------------------------------- cart bin animation toggles ----------------------------------
$(".cart-block-key").clickToggle(function(){
	$(this).parent().animate({
		'right':'0px'
	},1000);
},function(){
	$(this).parent().animate({
		'right':'-250px'
	},1000);
});


// ---------------------------------- popup window calls ----------------------------------------
updateUserInfo();
$(".login-btn").click(function(e){
	e.preventDefault();
	var x = openWindow("http://localhost/Yadawi/login" , "Yadawi | Login" , "width=750,height=450");
	var handler = setInterval(function(){
		if(x.closed){
			clearInterval(handler);
			updateUserInfo();
		}
	},1000);
});
$(".signup-btn").click(function(e){
	e.preventDefault();
	openWindow("http://localhost/Yadawi/register" , "Yadawi | Sign up" , "width=750,height=650");
});


});