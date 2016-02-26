<?php

class App{

	public function __construct(){
		//starting the sessions
		session_start();

		//autoloading classes
		require_once 'vendor/autoload.php';

		// loading initialization file
		require_once 'init.php';

		//loading the aliases for classes
		$this->loadAliases();

		// setting up routes to pages
		$route = new  App\Libs\Concretes\Router;
		require_once 'app/Http/routes.php';
	}

	private function loadAliases(){
		$aliases = include_once 'config/alias.php';
		foreach ($aliases as $alias => $class) {
			if(class_exists($class)){
				class_alias($class,$alias);
			}
		}
	}
}