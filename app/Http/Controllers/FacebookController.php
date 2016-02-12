<?php namespace App\Http\Controllers;

use Libs\Classes\Url;
use Libs\Classes\View;

class FacebookController extends Controller{
	public function __construct(){
		$fb = new Facebook_Model();
		$fb->setLoginHelper();
		$fb->storeUserInformation();
		$this->home();
	}
}