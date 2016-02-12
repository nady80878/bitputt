<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yadawi | Login</title>
	<link rel="stylesheet" href="<?php echo Url::css('login');?>" />
	<link rel="stylesheet" href="<?php echo Url::css('font-awesome.min');?>" />
	<link rel="stylesheet" href="<?php echo Url::css('normalize');?>" />
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php echo Url::img('coolcode logo.png');?>" />
</head>
<body>
	<div class="error">
		<ul class="msg">
			<?php echo Session::flash ( 'error' ); ?>
		</ul>
	</div>
	<div class="wrapper">
		<div class="login-box">
			<div class="login-social">
				<?php require_once 'app/social/facebook.php';?>
				<?php require_once 'app/social/google.php';?>
				<a href="<?php echo $loginUrl; ?>" class="facebook"><img src="<?php echo Url::img('fb_login.png');?>" alt="facebook"></a>
				<a href="<?php echo $auth->getAuthUrl(); ?>" class="google-plus"><img src="<?php echo Url::img('login-google.png');?>" alt="google+"></a>
			</div>
			<form action="<?php echo Url::getUrl('login');?>" method="post">				
				<div class="login-username">
					<label for="username">Username: </label><br>
					<input id="username" type="text" name="username" placeholder="Username"/>
				</div>
				<div class="login-password">
					<label for="password">Password: </label><br>
					<input id="password" type="password" name="password" placeholder="Password"/>
				</div>
				<div class="login-remMe">				
					<input id="remMe" type="checkbox" name="remMe" />
					<label for="remMe">Remmber me next time.</label>
				</div>
				<div class="submit-box">
					<button type="submit"  class="login-btn"><span>Login</span></button>
				</div>
			</form>
		</div>
	</div>
<script type="text/javascript" src="<?php echo Url::js('jquery');?>"></script>
<script type="text/javascript" src="<?php echo Url::js('login');?>"></script>
</body>
</html>

