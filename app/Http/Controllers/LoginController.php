<?php namespace App\Http\Controllers;

use Libs\Classes\Url;
use Libs\Classes\View;

class LoginController extends Controller{
	public function index(){
		View::showNormal('login.index');
	}
}