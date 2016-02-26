<?php

return [
	'mysql' => [
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'db' => 'coolcode',
	],
	'remember' => [
		'cookie_name' => 'hash',
		'cookie_expiry' => '+1 week',
	],
	'session' => [
		'session_name' => 'user',
		'token_name' => '_token',
	],
	'url' =>  'http://localhost/coolcode/',
];