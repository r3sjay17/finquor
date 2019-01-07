<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {

	private $gcaptcha_skey = '6LdK0HwUAAAAAHPKFIKMJ7RE-Nf90U-cvTcsi0wC';

	public function __construct() {
		parent::__construct();
		//$this->load->model('sql');
	}

	public function process() {
		$status = FALSE;
		$response = "Error: something went wrong.";
		$email = $number = $fname = $lname = $bdate = $gender = $service = $company = $pwd = $provider = '';

		if(isset($_POST['data'])) {
			$fname = '';
			switch($_POST['provider']) {
				case 'facebook':
					$id = (!empty($_POST['data']['id'])) ? $_POST['data']['id'] : 0;
					$img = (!empty($_POST['data']['picture'])) ? $_POST['data']['picture']['data']['url'] : '';
					$email = (!empty($_POST['data']['email'])) ? $_POST['data']['email'] : '';
					$fname = (!empty($_POST['data']['short_name'])) ? $_POST['data']['short_name'] : '';
					break;
				case 'google':
					$id = (!empty($_POST['data']['Eea'])) ? $_POST['data']['Eea'] : 0;
					$img = (!empty($_POST['data']['Paa'])) ? $_POST['data']['Paa'] : '';
					$email = (!empty($_POST['data']['U3'])) ? $_POST['data']['U3'] : '';
					$name = (!empty($_POST['data']['ig'])) ? $_POST['data']['ig'] : '';
					$fname = (!empty($_POST['data']['ofa'])) ? $_POST['data']['ofa'] : '';
					$lname = (!empty($_POST['data']['wea'])) ? $_POST['data']['wea'] : '';
					break;
				default:
					$fname = (isset($_POST['name'])) ? $_POST['name'] : '';
					break; 
			}
			$pwd = $id;
			$provider = $_POST['provider'];
			$this->session->set_userdata('provider', $_POST['provider']);
			$this->session->set_userdata('name', $fname);
		} elseif(isset($_POST['email'])) {
			$email = (isset($_POST['email'])) ? $_POST['email'] : '';
			$number = (isset($_POST['number'])) ? $_POST['number'] : '';
			$fname = (isset($_POST['fname'])) ? $_POST['fname'] : '';
			$lname = (isset($_POST['lname'])) ? $_POST['lname'] : '';
			$bdate = (isset($_POST['bdate'])) ? $_POST['bdate'] : '';
			$gender = (isset($_POST['gender'])) ? $_POST['gender'] : '';
			$service = (isset($_POST['service'])) ? $_POST['service'] : '';
			$company = (isset($_POST['company'])) ? $_POST['company'] : '';
			$pword = (isset($_POST['pword'])) ? $_POST['pword'] : '';
			$provider = 'website';
		}

		$data = array(
			'email' => $email,
			'number' => $number,
			'fname' => $fname,
			'lname' => $lname,
			'bdate' => $bdate,
			'gender' => $gender,
			'service' => $service,
			'company' => $company,
			'pword' => $pword,
			'provider' => $provider
		);

		if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
				//verify response from google captcha
				$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $this->gcaptcha_skey . '&response=' . $_POST['g-recaptcha-response']);
				$responseData = json_decode($verifyResponse);
				if($responseData->success) {
					$status = TRUE;
					$response = "Your information was successfully saved.";
					/*if($this->sql->checkUser($email)) {
						if($this->sql->insertUser($data)) {
							$status = TRUE;
							$response = "Your information was successfully saved.";
						}
					} else {
						$response = "Error: email already exists.";
					}*/
				} else {
					$response = 'Error: captcha verification failed. Please try again.';
				}
			} else {
				$response = 'Please click on the reCAPTCHA box.';
			}

		/*if(!isset($_SESSION['name'])) {
			echo json_encode(array(
				'status' => $status, 
				'response' => base_url(),
				'provider' => $_POST['provider']
			));
		} else {
			echo json_encode(array(
				'status' => $status,
				'response' => $response
			));
		}*/

		echo json_encode(array(
			'status' => $status,
			'response' => $response
		));
	}

}