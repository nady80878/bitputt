<?php namespace App\Libs\Concretes;

use App\Libs\Statics\Config;
use App\Libs\Statics\Input;
use App\Libs\Statics\Token;
use App\Libs\Statics\Redirect;
use App\Libs\Statics\Func;
use Exception;

 class Router {

 	private $url ='';
 	private $routes = [];
 	private $namedRoutes = [];
 	private static $route ;

 	public function __construct(){
 		$this->url = trim(strtolower(Input::get('url')) , '/');
 		self::$route = $this;
 	}
 	public function get($path , $callable , $name = null){
 		return $this->addRoute($path , $callable , $name,'GET');
 	}
	 
	public function post($path , $callable , $name = null){
 		return $this->addRoute($path , $callable , $name,'POST');	
 	}

 	public function put($path , $callable , $name = null){
 		return $this->addRoute($path , $callable , $name,'PUT');
 	}

 	public function delete($path , $callable , $name = null){
 		return $this->addRoute($path , $callable , $name,'DELETE');
 	}

 	private function addRoute($path , $callable , $name , $method){
 		$route = new Route($path , $callable);
 		$this->routes[$method][] = $route;
 		if($name){
 			$this->namedRoutes[$name] = $path;
 		}
 		return $route;
 	}

 	public static function getUrl($name, $params = []){
 		if(isset(self::$route->namedRoutes[$name])){
 			$path = self::$route->namedRoutes[$name];
 			foreach($params as $k => $v){
				$path = str_replace(":$k", $v, $path);
			}
		return $path;
 		}
 		return '';
 	}

 	public function __destruct(){
 		 if(isset($_SERVER['REQUEST_METHOD'])){
 		 	
 		 	$request_method = $_SERVER['REQUEST_METHOD'];
 		 	$inputFlag = Input::has(Config::get('session>token_name'));
 		 	$tokenFlag = Token::match(Input::get(Config::get('session>token_name')));

 		 	switch($request_method){
 		 		case 'GET':
 		 		if($inputFlag&& !$tokenFlag){
 		 			throw new Exception('Token missmatch Exception! ');
 		 		}
 		 			break;
 		 		case 'POST':
 		 		if(!$inputFlag ||($inputFlag&& !$tokenFlag)){
 		 			throw new Exception('Token missmatch Exception! ');
 		 		}
 		 			if(isset($_POST['_method'])){
 		 				$request_method = $_POST['_method'];
 		 			}
 		 			break;
 		 	}

 		 	if(isset($this->routes[$request_method])){
	 		 	foreach ($this->routes[$request_method] as $route) {
	 				if($route->equals($this->url)){
	 					echo $route->exec();
	 					return ;
	 				}
	 			}
 		 	}

 			Redirect::to(404);
 		 }else{
 		 	throw new Exception('REQUEST_METHOD not found');
 		 }
 	}

}

class Route{
	private $path;
	private $params;
	private $matches = [];
	private $callable;
	
	public function __construct($path, $callable){
		$this->path = $path;
		$this->callable = $callable;
	}

	public function equals($url){
		 $this->path = trim(preg_replace_callback('/:([\w]+)/', [$this , 'fetchParams'] , $this->path),'/');
		 if(preg_match("#^{$this->path}$#" , $url,$this->matches)){
		 	array_shift($this->matches);
		 	return true;
		 }else{
		 	return false;
		 }
	}

	public function exec(){
		if(is_callable($this->callable)){

			return  call_user_func_array($this->callable , $this->matches);
		}else if(is_string($this->callable)){
			$parts = Func::multiexplode(['@', '>','.','#'] , $this->callable);
			$controller = "App\\Http\\Controllers\\$parts[0]Controller";
			$controller = new $controller;

			return call_user_func_array([$controller , $parts[1]] , $this->matches);
		}
	}

	public function with($param , $pattern){
		$this->params[$param] = $pattern ; 
	}

	public function getUrl($name = null){

	}

	private function fetchParams($match){
		if(isset($this->params[$match[1]])){
			return $this->params[$match[1]];
		}
		return "([^/]+)";
	}
}