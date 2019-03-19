<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Query extends CI_Model{

	function __construct() {
		parent::__construct();
		$this->load->library('conn');
	}

	/**
	 * check if user already exist
	 * @param string email 			submitted email address
	 * @return bool
	 */
	public function checkEmail($email) {
		$query = "SELECT * FROM signups WHERE EmailAddress = :email";
		$param = array(
			':email' => $email
		);

		$result = $this->conn->query($query, $param);

		return ($result) ? TRUE : FALSE;
	}

	/**
	 * save signup info
	 * @param array param 		parameter fields from submitted POST
	 * @return mixed
	 */
	public function saveSignup($param) {
		$query = "INSERT INTO signups (SignUpType, FirstName, LastName, EmailAddress, Gender, BirthDate, SignUpStatus, CreatedBy, CreatedDate) VALUES (:stype, :fname, :lname, :email, :gender, :bdate, :status, :creator, :created)";

		$insert = $this->conn->query($query, $param);

		return ($insert) ? $insert : FALSE;
	}

	/**
	 * save verification info
	 * @param array param		parameters data from generated info
	 * @return bool
	 */
	public function saveVerificationDetails($param) {
		$query = "INSERT INTO signupverifications (SignUpId, VerificationLink, VerificationStatus, SignUpDate, ExpirationDate) VALUES (:sid, :vlink, :vstatus, :sdate, :exdate)";

		$insert = $this->conn->query($query, $param);

		return ($insert) ? TRUE : FALSE;
	}

	/**
	 * verify account from email link
	 * @param string token 			token given from email link
	 * @return array 			
	 */
	public function verifyAccount($token) {
		$query = "SELECT * FROM signupverifications WHERE VerificationLink = :token";
		$param = array(
			':token' => $token
		);

		$row = $this->conn->query($query, $param);

		return ($row) ? $row[0] : array();
	}

	/**
	 * update signup verification status
	 * @param int $vid 			verification id
	 * @param int $status 		verification status
	 * @return
	 */
	public function updateVerificationStatus($vid, $vstatus, $expired = NULL) {
		$query = "UPDATE signupverifications SET VerificationStatus = :vstatus, IsExpired = :expired WHERE Id = :vid";
		$param = array(
			':vstatus' => $vstatus,
			':expired' => $expired,
			':vid' => $vid
		);

		$update = $this->conn->query($query, $param);

		return $update;
	}

	/**
	 * update signup status
	 * @param int $sid 			signup id of the user
	 * @param int $status 		signup status
	 * @return
	 */
	public function updateSignupStatus($sid, $status) {
		$query = "UPDATE signups SET SignUpStatus = :status WHERE SignUpId = :sid";
		$param = array(
			':status' => $status,
			':sid' => $sid
		);

		$update = $this->conn->query($query, $param);

		return $update;
	}

	/**
	 * Clean data
	 * @param string $data
	 * @return string
	 */
	public function clean($data) {
		$data = htmlspecialchars(strip_tags($data), ENT_QUOTES, 'UTF-8');

		return $data;
	}

	/**
	 * generate random characters
	 * @param int $count 	number of characters to be returned
	 * @return random
	 */
	public function randChars($length = 16) {
		$rand = '';
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcedfghijklmnopqrstuvwxyz_-';
		for($x = 0; $x < $length; $x++) {
			$rand .= $characters[mt_rand(0, strlen($characters) - 1)];
		}
		return $rand;
	}

}