<?php namespace App\Http\Controllers;

use App\Libs\Statics\View;

class HomeController extends Controller{
	public function index(){
		View::show('home.index');
	}
}