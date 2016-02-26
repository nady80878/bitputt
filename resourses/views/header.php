
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="HTML,HTML5,CSS,CSS3,php,photoshop , java ,web ,desien develop , c++ , qt , wushu,karate,wing chun , karate , taekwondo , taekunger , courses , c#  , c++ , windows phone , python , javaScript , jquery , desktop , mobile , android , java me"/>
	<meta name="description" content=" this website enables you have pick up any courses at any fields with an easy and flexible way 
	which help you to prepare your self for any work , also provides courses for all athelets and sports men at any sports you need 
	every thing is free , go a head with your field (programming  , management , sports , ...etc)"/> 
	<meta name="subject" content="free courses in all fields"> 
	<meta name="language" content="EN">
	<meta name="designer" content="nady shalaby">
	<meta name="copyright" content="taekung technologies"> 
	<meta name="reply-to" content="nady80878@gmail.com">
	<meta name="owner" content="nady shalaby">
	<meta name="url" content="http://www.geeknology.netii.net">
	<meta name="og:url" content="http://www.www.geeknology.netii.net"/>
	<meta name="og:image" content="<?php echo Url::img('coolcode.png');?>"/>
	<link rel="stylesheet" href="<?php echo Url::css($pagename);?>" />
	<link rel="stylesheet" href="<?php echo Url::css('responsive');?>" />
	<link rel="stylesheet" href="<?php echo Url::css('font-awesome');?>" />
	<link rel="stylesheet" href="<?php echo Url::css('header');?>" />
	<link rel="stylesheet" href="<?php echo Url::css('footer');?>" />
	<link rel="stylesheet" href="<?php echo Url::css('animate');?>" />
	<link rel="shortcut icon" type="image/png" href="<?php echo Url::img('coolcode.png');?>" />
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<title>CoolCode | <?php echo ucfirst($pagename) ;?></title>
</head>
<body>
<div class="container-fluid">
	<div class="sign-wrapper">
		<div class="sign-box row">
			<span class="close"><i class="fa fa-times"></i></span>
			<div class="sign-up col-md-6">
				<form action="register" method="post" accept-charset="utf-8">
					<div class="field">
						<label for="username" class="field-lbl">Username:</label>
						<div class="field-txt"><input id="username" name="username" type="text"></div>
					</div>
					<div class="field">
						<label for="email" class="field-lbl">Email:</label>
						<div class="field-txt"><input id="email" name="email" type="email"></div>
					</div>
					<div class="field">
						<label for="password" class="field-lbl">Password:</label>
						<div class="field-txt"><input id="password" name="password" type="password"></div>
					</div>
					<div class="field">
						<label for="confPassword" class="field-lbl">Conf-Password: </label>
						<div class="field-txt"><input id="confPassword" name="confPassword" type="password"></div>
					</div>
					<div class="gender">
						<label for="male">
							<input type="radio" id="male" name="gender" value="male"> 
							<i class="fa fa-male fa-lg"></i>
						</label>
						<label for="female">
							<input type="radio" id="female" name="gender" value="female"> 
							<i class="fa fa-female fa-lg"></i>
						</label>
					</div>
					<div class="submit-box">
						<button type="submit" class="submit-btn"><i class="fa fa-pencil-square-o"></i> Register</button>
					</div>
					<input type="hidden" name="_token" value="<?php echo Token::generate(); ?>">
				</form>
			</div>
			<div class="sign-in col-md-6">
				<form action="login" method="post" accept-charset="utf-8">
					<div class="field">
						<label for="user-email" class="field-lbl">Username | Email:</label>
						<div class="field-txt"><input id="user-email" name="username" type="text"></div>
					</div>
					<div class="field clear">
						<label for="password2" class="field-lbl">Password:</label>
						<div class="field-txt"><input id="password2" name="password" type="password"></div>
					</div>
					<div class="field">
						<label class="remember" for="remember">
							<input type="checkbox" id="remember" name="remember">
							Remember me next time !
						</label>
					</div>
					<div class="submit-box">
						<a href="forgetpassword">Forgot my password?</a> &nbsp;<button type="submit" class="submit-btn"><i class="fa fa-sign-in"></i> Login</button>
					</div>
					<input type="hidden" name="_token" value="<?php echo Token::generate(); ?>">
				</form>
			</div>
		</div>
	</div>
	<header class="banner row box clear">
		<nav>
			<div class="navbar container-fluid">
				<div class="container">
					<div class="logo"><a href="<?php echo Url::base();?>"><img src="<?php echo Url::img('coolcode.png'); ?>" alt=""></a></div>
					<div class="links-box">
						<ul class="links">
							<li class="link"><a href=""><i class="fa fa-home"></i> Home</a></li>
							<li class="link"><a href=""><i class="fa fa-product-hunt"></i> Profolio</a></li>
							<li class="link"><a href=""><i class="fa fa-whatsapp"></i> Contact</a></li>
							<li class="link"><a href=""><i class="fa fa-question-circle"></i> About</a></li>
							<li class="link"><a href=""><i class="fa fa-user"></i> Profile</a></li>
							<li class="link"><a href="" class="sign"><i class="fa fa-user-plus"></i> Sign(in,up)</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>

	