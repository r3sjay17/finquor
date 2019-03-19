<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('google');
	}

	public function index() {
		$data['page'] = "Home";

		$this->load->view('layouts/header', $data);
		$this->load->view('public/home');
		$this->load->view('layouts/footer');
	}

	public function about() {
		$data['page'] = "About US";

		$this->load->view('layouts/header', $data);
		$this->load->view('public/about');
		$this->load->view('layouts/footer');
	}

	public function services() {
		$data['page'] = "Services";

		$this->load->view('layouts/header', $data);
		$this->load->view('public/services');
		$this->load->view('layouts/footer');
	}

	public function subscription() {
		$data['page'] = "Subscription";

		$this->load->view('layouts/header', $data);
		$this->load->view('public/subscription');
		$this->load->view('layouts/footer');
	}

	public function contact() {
		$data['page'] = "Contact";

		$this->load->view('layouts/header', $data);
		$this->load->view('public/contact');
		$this->load->view('layouts/footer');
	}

	public function signup() {
		$data['page'] = "Signup";

		$this->load->view('layouts/header', $data);
		$this->load->view('public/signup-main');
		$this->load->view('layouts/footer');
	}

	public function privacy_policy() {
		
	}

	public function terms_conditions() {
		
	}

	public function signupType() {
		$data['page'] = "Signup";
		$data['google_login_url'] = $this->google->get_login_url();
		$acceptedType = array(_ADVISOR, _CLIENT);
		$type = (!empty($this->uri->segment(2))) ? $this->uri->segment(2) : _CLIENT;
		$data['type'] = (in_array($type, $acceptedType)) ? $type : _CLIENT;

		$this->load->view('layouts/header', $data);
		$this->load->view('public/signup-option', $data);
		$this->load->view('layouts/footer');
	}

	public function signupForm() {
		$data['page'] = "Signup";
		$data['google_login_url'] = $this->google->get_login_url();
		$acceptedType = array(_ADVISOR, _CLIENT);
		$type = (!empty($this->uri->segment(2))) ? $this->uri->segment(2) : _CLIENT;
		$data['type'] = (in_array($type, $acceptedType)) ? $type : _CLIENT;

		$this->load->view('layouts/header', $data);
		$this->load->view('public/signup-form', $data);
		$this->load->view('layouts/footer');
	}

	/**
	 * verified signup account from link in email
	 * @return 
	 */
	public function accountVerified() {
		$data['page'] = "Verification";

		$this->load->view('public/account-verification');
	}

	/**
	 * error verification signup account from link in email
	 * @return 
	 */
	public function accountError() {
		$data['page'] = "Verification";
		$type = (!empty($this->uri->segment(2))) ? $this->uri->segment(2) : 'token';

		switch($type) {
			case 'expired':
				$message = 'Verification link already expired.';
				break;

			case 'verified':
				$message = 'Account already verified.';
				break;
			
			default:
				$message = 'Invalid verification token.';
				break;
		}
		$data['message'] = $message;

		$this->load->view('public/account-error', $data);
	}

	/**
	 * set error page
	 * @return
	 */
	public function errorpage() {
		$this->load->view('error');
	}

}