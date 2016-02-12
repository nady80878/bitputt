<?php namespace App\Libs\Statics;

class Input{

	public static function exists($type = 'post'){
		switch($type){
			case 'post' :
				 return ($_POST)? true : false;
			break;
			case 'get' :
				return ($_GET)? true : false;
			break;
			default : 
				return false;
		}
	}

	public static function get($item){
		return (self::has($item)) ? $_REQUEST[$item] : '' ;
	}

	public static function has($item){
		return (isset($_REQUEST[$item]));
	} 
}