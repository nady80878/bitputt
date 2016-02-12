<?php namespace App\Models;
class GoogleAuth extends Model{

	protected $payload;
	protected $client;

	public function __construct(Google_Client $client = null){
		parent::__construct();
		$this->client = $client;

		if($this->client){
			$this->client->setClientId('455053498627-vh4prtd0ap51thgeonfmg0vle2gfjvu9.apps.googleusercontent.com');
			$this->client->setClientSecret('z2Hrjtv-WRoEBzHlMAuNFUUt');
			$this->client->setRedirectUri(URL.'google');
			$this->client->setScopes('email');
		}
	}
	public function getAuthUrl(){
		return $this->client->createAuthUrl();
	}

	public function storeUserInformation(){
		if(isset($_GET['code'])){
			$this->client->authenticate($_GET['code']);
			$this->setToken($this->client->getAccessToken());
			$plus = new Google_Service_Plus($this->client);
			$person = $plus->people->get('me');

			//fetching user information

			$userId = $person['id'];
			$userName = $person['displayName'];
			$imageUrl = $person['image']['url'];
			$coverUrl = $person['modelData']['cover']['coverPhoto']['url'];
			$gender = $person['gender'];
			$placeLived = $person['modelData']['placesLived'][0]['value'];
			$company = $person['modelData']['organizations'][0]['name'];
			$email = $this->client->verifyIdToken()->getAttributes()['payload']['email'];
		
			if(!$this->isIdExist($userId)){
				$this->storeData($userId,$userName,$coverUrl,$email,$gender,'','','','','','','',$placeLived,$imageUrl,'');
			}else{
				$this->updateData($userName,$coverUrl,$email,$gender,'','','','','','','',$placeLived,$imageUrl,'',$userId);
			}
		}
	}

	private function setToken($token){
		$this->client->setAccessToken($token);
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


		$isDone = $this->db->setQuery("INSERT INTO users_google (username,fullname,cover,email,gender,company,telephone,fax,country,city,state,zip_code,street_address,avatar,description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
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
			Session::change("login","go");
			setCookie("login", "go", time () + (7 * 24 * 60 * 60 * 60) , '/');
			setCookie("username",$username, time () + (7 * 24 * 60 * 60 * 60) , '/');
		}
	}


	private function updateData( 		
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
	                           $username){		//varchar 120


		$isDone = $this->db->setQuery("UPDATE users_google SET fullname=?,cover=?,email=?,gender=?,company=?,telephone=?,fax=?,country=?,city=?,state=?,zip_code=?,street_address=?,avatar=?,description=? WHERE username=?",
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
			Session::change("login","go");
			setCookie("login", "go", time () + (7 * 24 * 60 * 60 * 60) , '/');
			setCookie("username",$username, time () + (7 * 24 * 60 * 60 * 60) , '/');
		}
	}

	private function isIdExist($id){
		$isDone = $this->db->setQuery("SELECT username FROM users_google WHERE username =?" , array($id));
		if($isDone && $this->db->countOfRows()==1){
			return true;
		}
		return false;
	}
}