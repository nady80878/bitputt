<?php namespace App\Libs\Statics;

class Func {
	public static function escape($string){
		return htmlentities($string, ENT_QUOTES, 'UTF-8');
	}

	/**
	 * explode the the given string according to the specified array of delimiters
	 * @param array $delimiters 
	 * @param string $string 
	 * @return array
	 */
	public static function multiexplode (array $delimiters,$string) {
		$ready = str_replace($delimiters, $delimiters[0], $string);
		$launch = explode($delimiters[0], $ready);
		return  $launch;
	}

	public static function dd()
	{
		$args = func_get_args();
		call_user_func_array('var_dump', $args);
		die();
	}
}


