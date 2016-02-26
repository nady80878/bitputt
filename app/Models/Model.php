<?php namespace App\Models;

use App\Libs\Concretes\DB;

 class Model {
	public $db;
	function __construct() {
	   $this->db = DB::getInstance();
	}
}