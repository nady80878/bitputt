<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yadawi | Sign up</title>
	<link rel="stylesheet" href="<?php echo Url::css('register');?>" />
	<link rel="stylesheet" href="<?php echo Url::css('font-awesome.min');?>" />
	<link rel="stylesheet" href="<?php echo Url::css('normalize');?>" />
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php echo Url::img('coolcode logo.png');?>" />
</head>
<body>
	<div class="wrapper">
		<div class="login-social">
			<button class="facebook"><img src="<?php echo Url::img('fb_login.png');?>" alt="facebook"></button>
			<button class="google-plus"><img src="<?php echo Url::img('login-google.png');?>" alt="google+"></button>
		</div>
		<form action="<?php echo Url::getUrl('register');?>" method="post">
			<div class="register-name">
				<div class="firstname">
					<label for="firstname">First name: </label><br>
					<input id="firstname" name="firstname" type="text" placeholder="First name" />
				</div>
				<div class="lastname">
					<label for="lastname">Last name: </label><br>
					<input id="lastname" name="lastname" type="text" placeholder="Last name" />
				</div>
			</div>
			<div class="username">
				<label for="username">Username: </label><br>
				<input id="username" name="username" type="text" placeholder="Username" />
			</div>
			<div class="email">
				<label for="email">Email: </label><br>
				<input id="email" name="email" type="email" placeholder="E-mail" />
			</div>
			<div class="register-password">
				<div class="password">
					<label for="password">Password: </label><br>
					<input id="password" name="password" type="password" placeholder="Password" />
				</div>
				<div class="conf-password">
					<label for="confPassword">Confirm password: </label><br>
					<input id="confPassword" name="confPassword" type="password" placeholder="Confirm password" />
				</div>
			</div>
			<div class="submit-box">
					<button type="submit" class="register-btn"><span>Register</span></button>
			</div>
		</form>
	</div>
</body>
</html>
	