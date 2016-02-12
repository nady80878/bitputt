<?php namespace App\Libs\Statics;
use App\Libs\Concretes\Router;

class Url{
	public static function base(){
		return Config::get('url');
	}
	public static function css($file){
		return self::base() . "public/css/$file.css";
	}
	public static function img($file){
		return self::base() . "public/images/$file";
	}
	public static function js($file){
		return self::base() . "public/js/$file.js";
	}
	public static function view($file){
		$file = Func::multiexplode(['.','/','>','|'], $file);
		$file = implode('/',$file);
		return __DIR__."/../../../resourses/views/$file.php";
	}	

	public static function getUrl($name, $params = []){
		return trim(self::base(),'/').Router::getUrl($name, $params);
	}
}
