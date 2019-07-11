<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{


	function index() {


		if($this->session->userdata('spc_lis')) {
			redirect(site_url(), 'refresh');
		}

		else{

			$this->load->library('form_validation');

			$this->form_validation->set_rules('username','Username', 'required|trim|max_length[50]');
	    	$this->form_validation->set_rules('password','Password', 'required|trim|max_length[50]|callback_checkdatabase');

			if($this->form_validation->run() == FALSE){

				$this->load->view('view-login');
				    
			}

			else{

				redirect(site_url(), 'refresh');
			}
		}
	   
	}


	function checkdatabase(){

		$this->load->model('user_model');

		$username = $this->input->post('username');

		$password = $this->input->post('password');

		$result = $this->user_model->login($username, $password);


		if($result){
			
		     $sess_array = array();

		     foreach($result as $row)
		     {
		       $sess_array = array(
		         'adviser_id' => $row->adviser_id,
		         'first_name' => $row->first_name,
		         'middle_name' => $row->middle_name,
		         'last_name' => $row->last_name
		       );
		       $this->session->set_userdata('spc_lis', $sess_array);
		     }
		     return TRUE;
		}

		else{
			$this->form_validation->set_message('checkdatabase', 'Invalid Username or Password!');
			return FALSE;
		}

	}
}

?>