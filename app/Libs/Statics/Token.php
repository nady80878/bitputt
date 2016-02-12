<?php namespace App\Libs\Statics;

class Token{
	public static function generate(){
		return Session::put(Config::get('session>token_name'),trim(base64_encode(md5(uniqid(rand())))),'=');
	} 

	public static function match($token){
		
		$token_name = Config::get('session>token_name');

		if(Session::has($token_name) && strcmp($token , Session::get($token_name)) == 0){
			Session::delete($token_name);
			return true;
		}

		return false;
	}
}