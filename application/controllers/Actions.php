<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* ===================================================
* action class for all landing site functions
* @author Resty Alejo
* @version 1.0.0
* ===================================================
*/

class Actions extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function signup() {
		$status = FALSE;
		$response = "Something went wrong.";
		if(isset($_POST)) :
			var_dump($_POST['email']);
		endif;
	}

}