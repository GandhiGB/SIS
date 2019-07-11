<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seniorhigh extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata('spc_lis')==FALSE){
            redirect('login', 'refresh');
        }
    }

    public function _remap($year, $sem) {

        $this->index($year, $sem);
    }

	public function indexxxx($year, $sem) {

        $this->load->model("class_model");
        $this->load->model("enrollment_model");

        $data["class"]=$this->class_model->get_class("(grade_level = 'GRADE 11' OR grade_level = 'GRADE 12') AND school_year_id = '".$year."' AND semester_id ='" . $sem[0] . "'");

        $data["enrollment_count"] = [];

        foreach ($data  as $value) {

            foreach ($value as $key => $x) {

                $data["enrollment_count"][$key] = $this->enrollment_model->get_enrollment_count($x->class_id);

            }

        }

        $this->load->view('view-header');
        $this->load->view('view-class', $data);
        $this->load->view('view-footer');
	}

    public function index($year, $sem) {
        
        $this->load->model("class_model");
        $this->load->model("enrollment_model");

        $session_data = $this->session->userdata('spc_lis');


        $adviser = $session_data['adviser_id'];

        if ($adviser == '772-160418-442') {

            $data["class"]=$this->class_model->get_class("(grade_level = 'GRADE 11' OR grade_level = 'GRADE 12') AND school_year_id = '".$year."' AND semester_id ='" . $sem[0] . "'");

            if (!empty($data['class'])) {
                $data["enrollment_count"] = [];

                foreach ($data  as $value) {

                    foreach ($value as $key => $x) {

                        $data["enrollment_count"][$key] = $this->enrollment_model->get_enrollment_count($x->class_id);

                    }

                }

            }
    
        } 

        else {

            $data["class"]=$this->class_model->get_class("(grade_level = 'GRADE 11' OR grade_level = 'GRADE 12') AND school_year_id = '".$year."' AND semester_id ='" . $sem[0] . "' AND adviser_id ='" . $adviser . "'");

            $data["enrollment_count"] = [];

            foreach ($data  as $value) {

                foreach ($value as $key => $x) {


                    $data["enrollment_count"][$key] = $this->enrollment_model->get_enrollment_count($x->class_id);

                }

            }

        }

        $this->load->view('view-header');
        $this->load->view('view-class', $data);
        $this->load->view('view-footer');

    }
}