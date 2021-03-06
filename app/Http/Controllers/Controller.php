<?php namespace App\Http\Controllers;
/**
 * @name base controller
 * @author nady
 * @desc it have the global settings and the variables that's important for all child controllers
 */
abstract class Controller {
	public function home() {
		header ( 'Location: ' . URL . 'home' );
	}

	public function refreshCurrentPage($numOfSecs){
		header("Refresh: $numOfSecs");
	}

	public function checkPageUrl($page){
		$url = trim (strtolower($_SERVER['REQUEST_URI']), '/' );
		$url = explode ( '/', $url );
		$pageIndex = array_search($page, $url);
		if(!isset($url[$pageIndex+1])){
			return true;
		}else if(isset($url[$pageIndex+1]) && !method_exists($page , $url[$pageIndex+1])){
			return true;
		}
		return false;
	}
}