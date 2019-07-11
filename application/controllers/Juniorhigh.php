<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juniorhigh extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata('spc_lis')==FALSE){
            redirect('login', 'refresh');
        }
    }

	public function _remap($year) {

        $this->index($year);
    }

    public function index($year) {
        
        $this->load->model("class_model");
        $this->load->model("enrollment_model");

        $session_data = $this->session->userdata('spc_lis');


        $adviser = $session_data['adviser_id'];

        if ($adviser == '772-160418-442') {

            $data["class"]=$this->class_model->get_class("(grade_level = 'GRADE 7' OR grade_level = 'GRADE 8' OR grade_level = 'GRADE 9' OR grade_level = 'GRADE 10') AND school_year_id = '".$year."'"); 

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

            $data["class"]=$this->class_model->get_class("(grade_level = 'GRADE 7' OR grade_level = 'GRADE 8' OR grade_level = 'GRADE 9' OR grade_level = 'GRADE 10') AND school_year_id = '".$year."' AND adviser_id = '".$adviser."'"); 

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