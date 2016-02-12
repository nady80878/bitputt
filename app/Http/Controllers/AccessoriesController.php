<?php namespace App\Http\Controllers;

use Libs\Classes\Url;
use Libs\Classes\View;

class AccessoriesController extends Controller{
	public function index(){
		View::show('accessories.index');
	}
}