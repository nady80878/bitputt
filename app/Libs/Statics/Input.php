<?php namespace App\Libs\Statics;

class Input{

	public static function isPost()
	{
		 return ($_POST && !self::has('_method'))? true : false;
	}

	public static function isGet()
	{
		return ($_GET && !self::has('_method'))? true : false;
	}

	public static function isPut()
	{
		return (self::isPost() && self::get('_method') === 'PUT')? true : false;
	}

	public static function isDelete()
	{
		return (self::isPost() && self::get('_method') === 'DELETE')? true : false;
	}

	public static function get($item){
		return (self::has($item)) ? $_REQUEST[$item] : '' ;
	}

	public static function has($item){
		return (isset($_REQUEST[$item]));
	} 
}