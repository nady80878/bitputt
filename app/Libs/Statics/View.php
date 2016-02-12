<?php namespace App\Libs\Statics;

class View { 

	public static function show($path, $params = []) {
		foreach ($params as $key => $value) {
			if(is_numeric($key)){
				continue;
			}
			${$key} = $value;
		}
		$pagename = Func::multiexplode(['.','/','>','|'], $path)[0];
		require_once Url::view('header');
		require_once Url::view($path);
		require_once Url::view('footer');
	}
	public static function showNormal($path, $params = []) {
		foreach ($params as $key => $value) {
			if(is_numeric($key)){
				continue;
			}
			${$key} = $value;
		}
		$pagename = Func::multiexplode(['.','/','>','|'], $path)[0];
		require_once Url::view($path);
	}
}
