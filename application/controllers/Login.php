<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__FILE__) . '/../ExhibitionController.php';

class Login extends ExhibitionController {

	public function show_login()
	{
		$this->output_admin('Login/Login');
	}

}