<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {



	public function index() {

		if (isset($this->session->userdata['spc_lis'])) {

			$this->load->view('view-header');
			$this->load->view('view-home');
			$this->load->view('view-footer');
		} 

		else {

			redirect('login', 'refresh');

		}

		
	}
}
