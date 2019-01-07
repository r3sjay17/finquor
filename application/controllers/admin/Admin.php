<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layouts/sidebar');
	}

	public function profile() {
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/profile');
		$this->load->view('admin/layouts/sidebar');
	}

}