
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yadawi | <?php echo $pagename ;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Url::css($pagename);?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo Url::css('header');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo Url::css('font-awesome.min');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo Url::css('normalize');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo Url::css('footer');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo Url::css('jquery.raty');?>" />
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon"
	href="<?php echo Url::img('coolcode logo.png');?>" />
</head>
<body>
	<div class="main-bar clear">
		<h1>Call us: <span>(800) 2345-6789</span> </h1>
		<div class="page-setup">
			<ul>
				<li>
					<div id="google_translate_element"></div>
				</li>
				<li>
					<select name="cur">
						<option value="pound">Pound</option>
						<option value="dolar">Dolar</option>
					</select>
				</li>
			</ul>	
		</div>
	</div>
	<div class="cart-bin">
		<div class="cart-block-key">
			<div class="cart-img"><img src="<?php echo Url::img('cart-icon.png')?>" alt=""></div>	
		</div>
		<div class="cart-main-info clear">
			<div class="cart-subtotal">
				Subtotal: <span class="subtotal-money">$6812</span>
			</div>		
			<div class="cart-items-num">
				Cart Items: <span class="item-num">6</span>
			</div>
		</div>
		<div class="cart-items">
			
			<div class="cart-item">
				<div class="cart-item-controls">
					<span class="edit fa fa-pencil"></span>
					<span class="close fa fa-times"></span>
				</div>
				<div class="cart-item-content">
					<div class="cart-item-img">
						<img src="<?php echo Url::img('product.png')?>" alt="">				
					</div>
					<div class="cart-item-label">
						Sample Cart Item
					</div>
					<div class="cart-item-num">
						3 X <span class="cart-item-money">$987</span>
					</div>
				</div>
			</div>
			<div class="cart-item">
				<div class="cart-item-controls">
					<span class="edit fa fa-pencil"></span>
					<span class="close fa fa-times"></span>
				</div>
				<div class="cart-item-content">
					<div class="cart-item-img">
						<img src="<?php echo Url::img('product.png')?>" alt="">				
					</div>
					<div class="cart-item-label">
						Sample Cart Item
					</div>
					<div class="cart-item-num">
						3 X <span class="cart-item-money">$987</span>
					</div>
				</div>
			</div>
			<div class="cart-item">
				<div class="cart-item-controls">
					<span class="edit fa fa-pencil"></span>
					<span class="close fa fa-times"></span>
				</div>
				<div class="cart-item-content">
					<div class="cart-item-img">
						<img src="<?php echo Url::img('product.png')?>" alt="">				
					</div>
					<div class="cart-item-label">
						Sample Cart Item
					</div>
					<div class="cart-item-num">
						3 X <span class="cart-item-money">$987</span>
					</div>
				</div>
			</div>
			<div class="cart-item">
				<div class="cart-item-controls">
					<span class="edit fa fa-pencil"></span>
					<span class="close fa fa-times"></span>
				</div>
				<div class="cart-item-content">
					<div class="cart-item-img">
						<img src="<?php echo Url::img('product.png')?>" alt="">				
					</div>
					<div class="cart-item-label">
						Sample Cart Item
					</div>
					<div class="cart-item-num">
						3 X <span class="cart-item-money">$987</span>
					</div>
				</div>
			</div>
			<div class="cart-item">
				<div class="cart-item-controls">
					<span class="edit fa fa-pencil"></span>
					<span class="close fa fa-times"></span>
				</div>
				<div class="cart-item-content">
					<div class="cart-item-img">
						<img src="<?php echo Url::img('product.png')?>" alt="">				
					</div>
					<div class="cart-item-label">
						Sample Cart Item
					</div>
					<div class="cart-item-num">
						3 X <span class="cart-item-money">$987</span>
					</div>
				</div>
			</div>
			<div class="cart-item">
				<div class="cart-item-controls">
					<span class="edit fa fa-pencil"></span>
					<span class="close fa fa-times"></span>
				</div>
				<div class="cart-item-content">
					<div class="cart-item-img">
						<img src="<?php echo Url::img('product.png')?>" alt="">				
					</div>
					<div class="cart-item-label">
						Sample Cart Item
					</div>
					<div class="cart-item-num">
						3 X <span class="cart-item-money">$987</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container clear">

		<header class="header-body">
			<div class="error">
				<ul class="msg">
					<?php echo Session::flash ( 'error' ); ?>
				</ul>
			</div>
			<div class="header-content clear">
				<div class="logo"><img src="<?php echo Url::img('yadawi.png')?>" alt="Markitya Logo"/></div>
				<div class="main-wedgits">

					<div class="links">
						<a href="#" class="user-avatar"><img class="user-avatar-img" src="<?php echo Url::img('user.png')?>" alt=""></a>
						<h4>Welcome <span class="user-fullname">to our online store !</span></h4>
						<navbar>
							<ul>
								
								<span class="user-controls">
									<?php //if(Session::exist('username') && Session::exist("login")){?>
										<li><a href="<?php //echo URL.'profile/user/'.Session::get('username').'/'.Session::get('login');?>" title="My account" class="user-account">My account</a></li>
										<li><a href="<?php //echo URL;?>logout" title="Logout" class="logout-btn">Logout</a></li>			
									<?php //}else{?>
										<li><a href="#" title="Sign-up" class="signup-btn">Sign-up</a></li>
										<li><a href="#" title="Login" class="login-btn">Login</a></li>
									<?php //} ?>
								</span>
							</ul>
						</navbar>						
					</div>
					<div class="search">
						<form action="<?php //echo URL; ?>search" method="get" accept-charset="utf-8">
							<input type="text" name="q" spellcheck="false" class="search-field" placeholder="Search your mind ...">
							<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
						</form>
					</div>
				</div>
			</div>
			<div class="navbar">
				<ul class="menu clear">
					<li class="home"><a href="<?php echo Url::getUrl('home'); ?>" >home</a></li>
					<li class="articles"><a href="<?php echo Url::getUrl('articles'); ?>" >articles &nbsp;<i class="fa fa-caret-down"></i></a>
						<ul class="sub-menu">
							<li><a href="">item one</a></li>
							<li><a href="">item two</a></li>
							<li><a href="">item three</a></li>
							<li><a href="">item four</a></li>
						</ul>
					</li>
					<li class="accessories"><a href="<?php echo Url::getUrl('accessories'); ?>" >accessories</a></li>
					<li class="decoration"><a href="<?php echo Url::getUrl('decoration'); ?>" >decoration</a></li>
					<li class="upload-product"><a href="<?php echo Url::getUrl('articles'); ?>" >upload product &nbsp;<i class="fa fa-caret-down"></i></a>
						<ul class="sub-menu">
							<li><a href="">make special order</a></li>
							<li><a href="">publish new product</a></li>
						</ul>
					</li>
					<li class="about"><a href="<?php echo Url::getUrl('about'); ?>" >about</a></li>
				</ul>
			</div>
		</header>
