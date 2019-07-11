<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller{

	function __construct() {
        parent::__construct();
        if($this->session->userdata('spc_lis')==FALSE){
            redirect('login', 'refresh');
        }
    }

	function index() {

	}

	function adds($class_id) {

		echo $this->input->post('birthdate');
		echo $this->input->post('gender');
	}


	function add($class_id) {

		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		$this->form_validation->set_rules('lrn','LRN', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('first_name','Firstname', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('middle_name','Middlename', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('last_name','Lastname', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('gender','Gender', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('birth_date','Birth Date', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('mother_tongue','Mother Tongue', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('ethnic_group','Ethnic Group', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('religion','Religion', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('previous_school','Previous School', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('barangay','Barangay', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('city','City', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('province','Province', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('mother_first_name','Mother Firstname', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('mother_middle_name','Mother Middlename', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('mother_last_name','Mother Lastname', 'required|trim|max_length[50]');
    	$this->form_validation->set_rules('mother_contact','Mother Contact', 'required|trim|max_length[50]');


		if($this->form_validation->run() == FALSE){
			$data['class_id'] = $class_id;
			$this->load->view('view-student-add', $data);

		}

		else{
			$this->load->model('student_model');
			$data = array(
					'lrn_number' => strtolower($this->input->post('lrn')),
					'first_name' => strtolower($this->input->post('first_name')),
					'middle_name' => strtolower($this->input->post('middle_name')),
					'last_name' => strtolower($this->input->post('last_name')),
					'ext_name' => strtolower($this->input->post('ext_name')),
					'gender' => strtolower($this->input->post('gender')),
					'birth_date' => strtolower($this->input->post('birth_date')),
					'mother_tongue' => strtolower($this->input->post('mother_tongue')),
					'ethnic_group' => strtolower($this->input->post('ethnic_group')),
					'religion' => strtolower($this->input->post('religion')),

					'barangay' => strtolower($this->input->post('barangay')),
					'city' => strtolower($this->input->post('city')),
					'province' => strtolower($this->input->post('province')),

					'father_first_name' => strtolower($this->input->post('father_first_name')),
					'father_middle_name' => strtolower($this->input->post('father_middle_name')),
					'father_last_name' => strtolower($this->input->post('father_last_name')),
					'father_contact' => strtolower($this->input->post('father_contact')),

					'mother_first_name' => strtolower($this->input->post('mother_first_name')),
					'mother_middle_name' => strtolower($this->input->post('mother_middle_name')),
					'mother_last_name' => strtolower($this->input->post('mother_last_name')),
					'mother_contact' => strtolower($this->input->post('mother_contact')),

					'guardian_first_name' => strtolower($this->input->post('guardian_first_name')),
					'guardian_middle_name' => strtolower($this->input->post('guardian_middle_name')),
					'guardian_last_name' => strtolower($this->input->post('guardian_last_name')),
					'guardian_relationship' => strtolower($this->input->post('guardian_relationship'))



			);

			$id = $this->student_model->add_student($data);

			if ($id) {
				$this->load->model('enrollment_model'); 

				$data = array(
					'student_id' => $id,
					'class_id' => $class_id,
					'previous_school' => strtolower($this->input->post('prevschool'))
				);

				$st_id = $this->enrollment_model->add_enrollment($data);

				if ($st_id) {
					redirect(site_url() . 'students/view/' . $class_id);
				}

				else{
					$this->load->view('view->erroradding');
				}
			}
			else{
				$this->load->view('view->erroradding');
			}
		}
	}


	function view($class_id) {

		$this->load->model("enrollment_model");
		$this->load->model("class_model");
		$session_data = $this->session->userdata('spc_lis');

		$adviser = $session_data['adviser_id'];


		if ($adviser == '772-160418-442') {
				
			$data["enrollment"]=$this->enrollment_model->get_enrollment("class_id = $class_id"); 
			$data["class_id"] = $class_id;


			$this->load->view('view-header');
			$this->load->view('view-students', $data);
			$this->load->view('view-footer');

		}

		else {

			$classes = $this->class_model->get_class("class_id = '".$class_id."' AND adviser_id ='".$adviser."'");
 

			if ($classes) {
				$data["enrollment"]=$this->enrollment_model->get_enrollment("class_id = $class_id");
				$data["class_id"] = $class_id; 

				$this->load->view('view-header');
				$this->load->view('view-students', $data);
				$this->load->view('view-footer');
			}

			else {

				$this->load->view('view-notallowed');
			}

		}

	}

}

?>