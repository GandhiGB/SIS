<?php
class Enrollment_model extends CI_Model
 
{
/* we will use the function getUsers */
  function get_enrollment_count($class_id)
  {
 
    $this->db->where('class_id', $class_id);
    $this->db->select('enrollment_id');
    $q = $this->db->get('enrollment');

    $rowcount = $q->num_rows();

    return $rowcount;

  }

  function get_enrollment($where)
  {
    /* all the queries relating to the data we want to retrieve will go in here. */

    $this->db->where($where);
    $this->db->select("student.lrn_number,student.last_name,student.first_name, student.gender,enrollment.scholar,enrollment.scholarship_type,enrollment.enrollment_status,");
  	$this->db->from('enrollment');
  	$this->db->join('student', 'student.student_id = enrollment.student_id');
    $this->db->order_by('student.last_name', 'ASC');
    $this->db->order_by('student.first_name', 'ASC');
  	$q = $this->db->get();
 
 
    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
    $data = [];
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }

    else {
      return $data;
    }

  }

  function add_enrollment($data){

    $this->db->insert('enrollment', $data);

    return $id = $this->db->insert_id();

  }
}