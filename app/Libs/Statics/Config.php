<?php namespace App\Libs\Statics;

class Config{
	public static function get($path = null){
		if($path){
			$config = include __DIR__.'/../../../config/setup.php';
			$path = Func::multiexplode(['|','/','-','>',',','.',' '],$path);

			foreach ($path as $key ) {
				$key = trim($key);
				if(isset($config[$key])){
					$config = $config[$key];
				}
			}
		}
		return $config;
	}
}