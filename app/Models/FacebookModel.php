<?php namespace App\Models;
class Facebook_Model extends Model{

	public $fb;
	public $helper;
	public $accessToken;

	function __construct(){
		parent::__construct();
		$this->fb = new Facebook\Facebook([
		                                  'app_id' => '628866373922560',
		                                  'app_secret' => '5744a682604b22be38db75b5498e51a9',
		                                  'default_graph_version' => 'v2.5'
		                                  ]);
	}
	public function setLoginHelper(){

		$this->helper = $this->fb->getRedirectLoginHelper(); 

		try {  
			$this->accessToken = $this->helper->getAccessToken();  
		} catch(Facebook\Exceptions\FacebookResponseException $e) {  
  // When Graph returns an error  
			echo 'Graph returned an error: ' . $e->getMessage();  
			exit;  
		} catch(Facebook\Exceptions\FacebookSDKException $e) {  
  // When validation fails or other local issues  
			echo 'Facebook SDK returned an error: ' . $e->getMessage();  
			exit;  
		}  
	}


	public function storeUserInformation(){

		if (isset($this->accessToken)) {  
			try {
  // Returns a `Facebook\FacebookResponse` object
				$res1 = $this->fb->get('/me/picture?type=large&redirect=false',$this->accessToken->getValue());
				$res2 = $this->fb->get('/me?fields=id,name,email,gender,cover,location',$this->accessToken->getValue());

			} catch(Facebook\Exceptions\FacebookResponseException $e) {
				echo 'Graph returned an error: ' . $e->getMessage();
				exit;
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				exit;
			}

			$picture = $res1->getGraphUser();
			$details = $res2->getGraphUser();
			$imageUrl =  $picture->getProperty('url');
			$name =  $details->getProperty('name');
			$email =  $details->getProperty('email');
			$id =  $details->getProperty('id');
			$gender= $details->getProperty('gender');
			$cover = $details->getProperty('cover')->getField('source');
			$address = $details->getProperty('location')->getField('name');

			if(!$this->isIdExist($id)){
				$this->storeData($id,$name,$cover,$email,$gender,'','','','','','','',$address,$imageUrl,'');
			}else{
				$this->updateData($name,$cover,$email,$gender,'','','','','','','',$address,$imageUrl,'',$id);
			}

		}  

	}

	private function storeData($username, 		//varchar 120
	                           $fullname, 		//varchar 70
	                           $cover,	  		//text
	                           $email,    		//varchar 40
	                           $gender,	  		//varchar 10
	                           $company,  		//varchar 30
	                           $telephone,		//varchar 20
	                           $fax,			//varchar 30
	                           $country,		//varchar 30
	                           $city,			//varchar 30
	                           $state,			//varchar 30
	                           $zip_code,		//varchar 10
	                           $street_address,	//text
	                           $avatar,			//text
	                           $description){	//text


		$isDone = $this->db->setQuery("INSERT INTO users_facebook (username,fullname,cover,email,gender,company,telephone,fax,country,city,state,zip_code,street_address,avatar,description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
						array( $username, 		//varchar 120
	                           $fullname, 		//varchar 70
	                           $cover,	  		//text
	                           $email,    		//varchar 40
	                           $gender,	  		//varchar 10
	                           $company,  		//varchar 30
	                           $telephone,		//varchar 20
	                           $fax,			//varchar 30
	                           $country,		//varchar 30
	                           $city,			//varchar 30
	                           $state,			//varchar 30
	                           $zip_code,		//varchar 10
	                           $street_address,	//text
	                           $avatar,			//text
	                           $description));	//text

		if($isDone){
			Session::change("username",$username);
			Session::change("login","fb");
			setCookie("login", "fb", time () + (7 * 24 * 60 * 60 * 60) , '/');
			setCookie("username",$username, time () + (7 * 24 * 60 * 60 * 60) , '/');
		}
	}


	public function updateData(		
	                           $fullname, 		//varchar 70
	                           $cover,	  		//text
	                           $email,    		//varchar 40
	                           $gender,	  		//varchar 10
	                           $company,  		//varchar 30
	                           $telephone,		//varchar 20
	                           $fax,			//varchar 30
	                           $country,		//varchar 30
	                           $city,			//varchar 30
	                           $state,			//varchar 30
	                           $zip_code,		//varchar 10
	                           $street_address,	//text
	                           $avatar,			//text
	                           $description,	//text
	                           $username){	//varchar 120


		$isDone = $this->db->setQuery("UPDATE users_facebook SET fullname=?,cover=?,email=?,gender=?,company=?,telephone=?,fax=?,country=?,city=?,state=?,zip_code=?,street_address=?,avatar=?,description=? WHERE username=?",
						array( $fullname, 		//varchar 70
	                           $cover,	  		//text
	                           $email,    		//varchar 40
	                           $gender,	  		//varchar 10
	                           $company,  		//varchar 30
	                           $telephone,		//varchar 20
	                           $fax,			//varchar 30
	                           $country,		//varchar 30
	                           $city,			//varchar 30
	                           $state,			//varchar 30
	                           $zip_code,		//varchar 10
	                           $street_address,	//text
	                           $avatar,			//text
	                           $description,	//text
	                           $username));		//varchar 120

		if($isDone){
			Session::change("username",$username);
			Session::change("login","fb");
			setCookie("login", "fb", time () + (7 * 24 * 60 * 60 * 60) , '/');
			setCookie("username",$username, time () + (7 * 24 * 60 * 60 * 60) , '/');
		}
	}

	private function isIdExist($id){
		$isDone = $this->db->setQuery("SELECT username FROM users_facebook WHERE username = ?" , array($id));
		if($isDone && $this->db->countOfRows()==1){
			return true;
		}
		return false;
	}
}




