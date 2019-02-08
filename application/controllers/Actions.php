<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Actions extends CI_Controller {

	private $gcaptcha_skey = '6LdK0HwUAAAAAHPKFIKMJ7RE-Nf90U-cvTcsi0wC';

	public function __construct() {
		parent::__construct();

		$config = array(
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->load->model('query');
		$this->load->library('encryption');
	}

	public function signup() {
		$status = FALSE;
		$response = "Something went wrong.";
		if(isset($_POST)) :
			if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
				$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $this->gcaptcha_skey . '&response=' . $_POST['g-recaptcha-response']);
				$responseData = json_decode($verifyResponse);
				if($responseData->success) {
					$type = (isset($_POST['type'])) ? $this->query->clean($_POST['type']) : '';
					$email = (isset($_POST['email'])) ? $this->query->clean($_POST['email']) : '';
					$mobile = (isset($_POST['mobile'])) ? $this->query->clean($_POST['mobile']) : '';
					$fname = (isset($_POST['fname'])) ? $this->query->clean($_POST['fname']) : '';
					$lname = (isset($_POST['lname'])) ? $this->query->clean($_POST['lname']) : '';
					$bdate = (isset($_POST['bdate'])) ? $this->query->clean($_POST['bdate']) : '';
					$gender = (isset($_POST['gender'])) ? $this->query->clean($_POST['gender']) : 0;
					$pwd = (isset($_POST['pwd'])) ? $this->query->clean($_POST['pwd']) : '';

					if(!$this->query->checkEmail($email)) {
						$stype = ($type == _CLIENT) ? 1 : 2;
						$password = $this->encryption->encrypt($pwd);
						$param = array(
							':stype' => $stype,
							':fname' => $fname,
							':lname' => $lname,
							':email' => $email,
							':mobile' => $mobile,
							':bdate' => $bdate,
							':gender' => $gender,
							':pwd' => $password,
							':status' => 1,
							':creator' => $fname . ' ' . $lname,
							':created' => date('Y-m-d H:i:s')
						);

						if($insert = $this->query->saveSignup($param)) :
							$token = $this->query->randChars(32);
							$vlink = base_url('account/' . $token . '/verify');
							$verificationParam = array(
								':sid' => $insert,
								':vlink' => $token,
								':vstatus' => 1,
								':sdate' => date('Y-m-d H:i:s'),
								':exdate' => date('Y-m-d H:i:s', strtotime('+1 day', time()))
							);

							if($this->query->saveVerificationDetails($verificationParam)) {
								$status = TRUE;
								$response = "Kindly check your email for confirmation.";

								$data['name'] = $fname;
								$data['link'] = $vlink;
								$content = $this->load->view('email/verification', $data, TRUE);
								$this->sendMail('FinQuor User Verification', $content);
							}
						endif;
					} else {
						$response = "Email address already exist.";
					}
				} else {
					$response = 'Error: captcha verification failed. Please try again.';
				}
			} else {
				$response = 'Please click on the reCAPTCHA box.';
			}
		endif;

		echo json_encode(array(
			'status' => $status,
			'response' => $response
		));
	}

	public function sendMessage() {
		$status = FALSE;
		$response = "Something went wrong.";
		if(isset($_POST)) :
			if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
				$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $this->gcaptcha_skey . '&response=' . $_POST['g-recaptcha-response']);
				$responseData = json_decode($verifyResponse);
				if($responseData->success) {
					$data['name'] = (isset($_POST['name'])) ? $this->query->clean($_POST['name']) : '';
					$data['email'] = (isset($_POST['email'])) ? $this->query->clean($_POST['email']) : '';
					$data['subject'] = (isset($_POST['inquiry'])) ? $this->query->clean($_POST['inquiry']) : '';
					$data['message'] = (isset($_POST['comments'])) ? $this->query->clean($_POST['comments']) : '';

					$content = $this->load->view('email/inquiry', $data, TRUE);
					$this->sendMail('FinQuor Inquiry', $content);
					
					$status = TRUE;
					$response = "Thank you for submitting your query, please wait for our response within 48 hours.";
				} else {
					$response = 'Error: captcha verification failed. Please try again.';
				}
			} else {
				$response = 'Please click on the reCAPTCHA box.';
			}
		endif;

		echo json_encode(array(
			'status' => $status,
			'response' => $response
		));
	}

	/**
	 * verify signup account from link in email
	 * @param string token
	 * @return mixed
	 */
	public function verifyAccount() {
		$status = FALSE;
		$response = "token";
		$token = (!empty($this->uri->segment(2))) ? $this->query->clean($this->uri->segment(2)) : '';

		$verification = $this->query->verifyAccount($token);
		if(!empty($verification)) :
			if($verification['VerificationStatus'] == 3) {
				redirect(base_url('account/verified/error'));
			} elseif($verification['VerificationStatus'] == 2) {
				redirect(base_url('account/expired/error'));
			} else {
				$vid = $verification['Id'];
				$sid = $verification['SignUpId'];

				if(date('Y-m-d H:i:s') <= $verification['ExpirationDate']) {
					if($this->query->updateVerificationStatus($vid, 3)) :
						if($this->query->updateSignupStatus($sid, 3)) {
							redirect(base_url('account/verified'));
						}
					endif;
				} else {
					if($this->query->updateVerificationStatus($vid, 2, 1)) :
						if($this->query->updateSignupStatus($sid, 2, 1)) {
							redirect(base_url('account/expired/error'));
						}
					endif;
				}
			}
		else :
			redirect(base_url('account/token/error'));
		endif;
	}

	/**
	 * send email
	 * @param string subject 				subject matter
	 * @param string message 				content of the email
	 * @return
	 */
	private function sendMail($subject, $message, $recipient = 'gretarosario@gmail.com') {
		if(!empty($subject) && !empty($message)) :
			$this->email->from('no-reply@finquor.com', 'FinQuor');
			$this->email->to($recipient);
			$this->email->subject($subject);
			$this->email->message($message);
			if($_SERVER['SERVER_NAME'] != 'localhost') $this->email->send();
		endif;
	}

}