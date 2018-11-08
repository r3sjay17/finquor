<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['page'] = "home";

		$this->load->view('layouts/header', $data);
		$this->load->view('index');
		$this->load->view('layouts/footer');
	}

	public function about() {
		$data['page'] = "about-us";

		$this->load->view('layouts/header', $data);
		$this->load->view('about');
		$this->load->view('layouts/footer');
	}

	public function services() {
		$data['page'] = "services";
		$data['service'] = $this->uri->segment(2);

		$this->load->view('layouts/header', $data);
		$this->load->view('services');
		$this->load->view('layouts/footer');
	}

	public function subscription() {
		$data['page'] = "subscription";

		$this->load->view('layouts/header', $data);
		$this->load->view('subscription');
		$this->load->view('layouts/footer');
	}

	public function contact() {
		$data['page'] = "contact";

		$this->load->view('layouts/header', $data);
		$this->load->view('contact');
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
			$name = (isset($_POST['name'])) ? $_POST['name'] : '';
			$email = (isset($_POST['email'])) ? $_POST['email'] : '';
			$subject = (isset($_POST['subject'])) ? $_POST['subject'] : '';
			$comment = (isset($_POST['comments'])) ? $_POST['comments'] : '';
			
			$body = '
					Name: <strong>'.$name.'</strong>
					<br>
					Email: <strong>'.$email.'</strong>
					<br>
					Comment: <strong>'.$comment.'</strong>
					';

			$this->load->library('email');

			$config['mailtype'] = 'html';
			$this->email->initialize($config);

			$this->email->from('no-reply@finquor.com', 'FinQuor Site');
			$this->email->to('restyjayalejo17@gmail.com');
			$this->email->cc('contact@finquor.com');
			$this->email->subject($subject . ' Inquiry');
			$this->email->message($body);
			//$this->email->send();

			$status = TRUE;
			$response = '<div>Thank you for submitting your query,</div>
						<div>please wait for our response within 48 hours.</div>';
		}
		echo json_encode(array(
			'status' => $status,
			'response' => $response
		));
	}

}