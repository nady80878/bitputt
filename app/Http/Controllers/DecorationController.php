<?php namespace App\Http\Controllers;

use App\Libs\Statics\Url;
use App\Libs\Statics\View;

class DecorationController extends Controller{
	public function index(){
		View::show('decoration.index');
	}
}