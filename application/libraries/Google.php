<?php 
require_once('Google/autoload.php');

class Google {
	protected $CI;

	public function __construct(){
		$this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->config->load('google');
        $this->client = new Google_Client();
		$this->client->setClientId($this->CI->config->item('client_id', 'google'));
		$this->client->setClientSecret($this->CI->config->item('client_secret', 'google'));
		$this->client->setRedirectUri($this->CI->config->item('redirect_url', 'google'));
		$this->client->setScopes(array(
			"https://www.googleapis.com/auth/plus.login",
			"https://www.googleapis.com/auth/plus.me",
			"https://www.googleapis.com/auth/userinfo.email",
			"https://www.googleapis.com/auth/userinfo.profile"
			)
		);
  

	}

	public function get_login_url(){
		return  $this->client->createAuthUrl();

	}

	public function validate(){		
		$info = array();
		if(isset($_GET['code'])) {
		  	//if($this->client->authenticate($_GET['code'])) {
		  	$this->client->authenticate($_GET['code']);
			  	$access_token = $this->client->getAccessToken();

			   	$this->client->setAccessToken($access_token);
			  	$plus = new Google_Service_Plus($this->client);
				$person = $plus->people->get('me');
				$info['id'] = $person['id'];
				$info['email'] = $person['emails'][0]['value'];
				$info['name'] = $person['displayName'];
				$info['fname'] = $person['name']['givenName'];
				$info['lname'] = $person['name']['familyName'];
				$info['link'] = $person['url'];
				$info['profile_pic'] = substr($person['image']['url'],0,strpos($person['image']['url'],"?sz=50")) . '?sz=800';
			/*} else {
				redirect(base_url('error'));
			}*/
		}

	   	return  $info;
	}

}