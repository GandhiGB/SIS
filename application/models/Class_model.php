<?php
class Class_model extends CI_Model
 
{
/* we will use the function getUsers */
  function get_class($where)
  {
    /* all the queries relating to the data we want to retrieve will go in here. */
 
    $this->db->where($where);
    $this->db->select("class_id,adviser_id,school_year_id,semester_id,grade_level,section_name");
    $this->db->order_by("grade_code","asc");
    $q = $this->db->get('class');
 
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
}