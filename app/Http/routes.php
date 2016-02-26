<?php

$route->get('/', 'Home@index','home');
$route->get('/test',function(){
		return Info::requestCharset();

});
