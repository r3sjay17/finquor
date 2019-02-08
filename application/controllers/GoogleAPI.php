<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GoogleAPI extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('google');
	}

	public function oauth2callback() {
		$gdata = $this->google->validate();
		if(!empty($gdata['email'])) :
			$data['page'] = "Signup";
			$data['pwd'] = $gdata['id'];
			$data['fname'] = $gdata['fname'];
			$data['lname'] = $gdata['lname'];
			$data['email'] = $gdata['email'];

			$this->load->view('layouts/header', $data);
			$this->load->view('public/api-form', $data);
			$this->load->view('layouts/footer');
		else:
			redirect(base_url('error'));
		endif;
	}

}