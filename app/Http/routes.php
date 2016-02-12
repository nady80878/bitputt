<?php
use App\Libs\Statics\Func;
// Setting up routes for the pages
$route->get('/', 'Home@index','home');
$route->get('/accessories','Accessories@index','accessories' );
$route->get('/wedding','Wedding@index','wedding' );
$route->get('/decoration','Decoration@index','decoration' );
$route->get('/clothing','Clothing@index','clothing' );
$route->get('/login','Login@index','login' );
$route->get('/register','Register@index','register' );
$route->get('/product','Product@index','product' );
$route->get('/product/sell','Product@sell','product.sell' );
$route->get('/product/order','Product@order','product.order' );
$route->get('/profile','Profile@view','profile.view' );
$route->get('/profile/admin','Profile@admin','profile.admin' );

$route->get('/test', function() use ($route){
	// create a variable $i initializing its value to 1
	$i = 1;
	// output the value of $i
	echo 'This is the value of \$i: $i <br>';
	echo "This is the value of \$i : $i<br>";

	// store $_SERVER values in the variable $i
	$i = $_SERVER["SERVER_NAME"];
	echo "This is the value of \$i=SERVER_NAME: $i<br>";

	$i = $_SERVER["SERVER_SOFTWARE"];
	echo "This is the value of \$i=SERVER_SOFTWARE: $i<br>";

	$i = $_SERVER["SERVER_PORT"];
	echo "This is the value of \$i=SERVER_PORT: $i<br>";

	$i = $_SERVER["REMOTE_ADDR"];
	echo "This is the value of \$i=REMOTE_ADDR: $i<br>";

	// output all values in $_SERVER
	$indicesServer = array('PHP_SELF',
						   'argv',
						   'argc',
						   'GATEWAY_INTERFACE',
						   'SERVER_ADDR',
						   'SERVER_NAME',
						   'SERVER_SOFTWARE',
						   'SERVER_PROTOCOL',
						   'REQUEST_METHOD',
						   'REQUEST_TIME',
						   'REQUEST_TIME_FLOAT',
						   'QUERY_STRING',
						   'DOCUMENT_ROOT',
						   'HTTP_ACCEPT',
						   'HTTP_ACCEPT_CHARSET',
						   'HTTP_ACCEPT_ENCODING',
						   'HTTP_ACCEPT_LANGUAGE',
						   'HTTP_CONNECTION',
						   'HTTP_HOST',
						   'HTTP_REFERER',
						   'HTTP_USER_AGENT',
						   'HTTPS',
						   'REMOTE_ADDR',
						   'REMOTE_HOST',
						   'REMOTE_PORT',
						   'REMOTE_USER',
						   'REDIRECT_REMOTE_USER',
						   'SCRIPT_FILENAME',
						   'SERVER_ADMIN',
						   'SERVER_PORT',
						   'SERVER_SIGNATURE',
						   'PATH_TRANSLATED',
						   'SCRIPT_NAME',
						   'REQUEST_URI',
						   'PHP_AUTH_DIGEST',
						   'PHP_AUTH_USER',
						   'PHP_AUTH_PW',
						   'AUTH_TYPE',
						   'PATH_INFO',
						   'ORIG_PATH_INFO') ;

	echo '<table cellpadding="10">' ;
	foreach ($indicesServer as $arg) {
		if (isset($_SERVER[$arg])) {
			echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
		}
		else {
			echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
		}
	}
	echo '</table>' ; 
});