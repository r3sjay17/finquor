<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Main extends CI_Controller {

	private $gcaptcha_skey = '6LdK0HwUAAAAAHPKFIKMJ7RE-Nf90U-cvTcsi0wC';

	public function __construct() {
		parent::__construct();
		//$this->load->model('sql');

		$config = array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'finquor@gmail.com',
		    'smtp_pass' => '@dminfqtm123',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
	}

	public function index() {
		$data['page'] = "home";

		$this->load->view('layouts/header', $data);
		$this->load->view('index');
		$this->load->view('layouts/modal');
		$this->load->view('layouts/footer');
	}

	public function about() {
		$data['page'] = "about-us";

		$this->load->view('layouts/header', $data);
		$this->load->view('about');
		$this->load->view('layouts/modal');
		$this->load->view('layouts/footer');
	}

	public function services() {
		$data['page'] = "services";
		$data['service'] = $this->uri->segment(2);

		$this->load->view('layouts/header', $data);
		$this->load->view('services');
		$this->load->view('layouts/modal');
		$this->load->view('layouts/footer');
	}

	public function subscription() {
		$data['page'] = "subscription";

		$this->load->view('layouts/header', $data);
		$this->load->view('subscription');
		$this->load->view('layouts/modal');
		$this->load->view('layouts/footer');
	}

	public function contact() {
		$data['page'] = "contact";

		$this->load->view('layouts/header', $data);
		$this->load->view('contact');
		$this->load->view('layouts/modal');
		$this->load->view('layouts/footer');
	}

	public function logout() {
		//$this->session->unset_userdata('fb_access_token');
		$this->session->unset_userdata('provider');
		$this->session->unset_userdata('name');
		redirect(base_url());
	}

	/**
	* Send message through email
	* @param POST 		data from post input
	* @return mixed
	*/
	public function sendMessage() {
		$status = FALSE;
		$response = '<div>Error: something went wrong!</div>';
		if(isset($_POST)) {
			if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
				//verify response from google captcha
				$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $this->gcaptcha_skey . '&response=' . $_POST['g-recaptcha-response']);
				$responseData = json_decode($verifyResponse);
				if($responseData->success) {
					$name = (isset($_POST['name'])) ? $_POST['name'] : '';
					$email = (isset($_POST['email'])) ? $_POST['email'] : '';
					$subject = (isset($_POST['subject'])) ? $_POST['subject'] : '';
					$message = (isset($_POST['comments'])) ? $_POST['comments'] : '';

					$data = array(
						'name' => $name,
						'email' => $email,
						'subject' => $subject,
						'message' => $message
					);
					
					//if($this->sql->insertInquiry($data)) {
						$body = '
								Name: <strong>'.$name.'</strong>
								<br>
								Email: <strong>'.$email.'</strong>
								<br>
								Comment: <strong>'.$message.'</strong>
								';

						$this->email->from('no-reply@finquor.com', 'FinQuor Site');
						$this->email->to('restyjayalejo17@gmail.com');
						/*$this->email->to('finquor@gmail.com');//@dminfqtm123
						$this->email->cc('contact@finquor.com');*/
						$this->email->subject($subject . ' Inquiry');
						$this->email->message($body);
						$this->email->send();

						$status = TRUE;
						$response = '<div>Thank you for submitting your query,</div>
									<div>please wait for our response within 48 hours.</div>';
					//}
				} else {
					$response = '<div>Error: captcha verification failed. Please try again.</div>';
				}
			} else {
				$response = '<div>Please click on the reCAPTCHA box.</div>';
			}
		}
		echo json_encode(array(
			'status' => $status,
			'response' => $response
		));
	}

}