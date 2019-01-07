<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Sql extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->library('encryption');
	}

	public function insertUser($data) {
		$param = array(
			'email' => (isset($data['email'])) ? trim($this->security->xss_clean($data['email'])) : '',
			'pword' => (isset($data['pword'])) ? $this->encryption->encrypt(trim($this->security->xss_clean($data['pword']))) : '',
			'lname' => (isset($data['lname'])) ? trim($this->security->xss_clean($data['lname'])) : '',
			'fname' => (isset($data['fname'])) ? trim($this->security->xss_clean($data['fname'])) : '',
			'bdate' => (isset($data['bdate'])) ? trim($this->security->xss_clean($data['bdate'])) : '',
			'gender' => (isset($data['gender'])) ? trim($this->security->xss_clean($data['gender'])) : '',
			'contact_number' => (isset($data['number'])) ? trim($this->security->xss_clean($data['number'])) : '',
			'service' => (isset($data['service'])) ? trim($this->security->xss_clean($data['service'])) : '',
			'company' => (isset($data['company'])) ? trim($this->security->xss_clean($data['company'])) : '',
			'provider' => (isset($data['provider'])) ? trim($this->security->xss_clean($data['provider'])) : ''
		);

		$this->db->insert('users', $param);
		return ($this->db->affected_rows() != 1) ? FALSE : TRUE;
	}

	public function checkUser($email) {
		$email = (isset($email)) ? trim($this->security->xss_clean($email)) : '';
		
		$this->db->select('*');
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		
		return ($query->num_rows() == 0) ? TRUE : FALSE;
	}

	public function insertInquiry($data) {
		$param = array(
			'name' => trim($this->security->xss_clean($data['name'])),
			'email' => trim($this->security->xss_clean($data['email'])),
			'subject' => trim($this->security->xss_clean($data['subject'])),
			'message' => trim($this->security->xss_clean($data['message'])),
		);

		$this->db->insert('message', $param);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

}