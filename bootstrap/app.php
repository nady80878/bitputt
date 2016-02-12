<?php

class App{

	public function __construct(){
		require_once 'init.php';
		$this->loadAliases();
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