<?php namespace App\Http\Controllers;

use Libs\Classes\Url;
use Libs\Classes\View;

class ProfileController extends controller{
	public function admin(){
		View::show('profile.admin');
	}
	public function view(){
		View::show('profile.view');
	}
}