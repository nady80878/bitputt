<?php namespace App\Http\Controllers;

use Libs\Classes\Url;
use Libs\Classes\View;

class RegisterController extends Controller{
	public function index(){
		View::showNormal('register.index');
	}
}