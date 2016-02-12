<?php namespace App\Http\Controllers;

use Libs\Classes\Url;
use Libs\Classes\View;

class ProductController extends Controller{
	public function index (){
		View::show('product.index');
	}
	public function sell(){
		View::show('product.sell');
	}
	public function order(){
		View::show('product.order');
	}
}