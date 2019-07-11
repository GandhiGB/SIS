<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller{

	function index() {

		unset($_SESSION["spc_lis"]);

		redirect('login', 'refresh');
			  		
	}		
}