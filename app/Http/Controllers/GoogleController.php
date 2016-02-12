<?php namespace App\Http\Controllers;

use Libs\Classes\Url;
use Libs\Classes\View;

class GoogleController extends Controller{

	public function __construct(){
		$client = new Google_Client;
		$auth = new GoogleAuth($client);
		$auth->storeUserInformation();
		$this->home();
	}
}


