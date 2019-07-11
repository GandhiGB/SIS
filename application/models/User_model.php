<?php 
class User_model extends CI_Model {

	function login($username, $password) {
    	
	   $this -> db -> select('adviser_id, first_name, middle_name, last_name');
	   $this -> db -> from('user');
	   $this->db->where("username like binary",$username);
	   $this->db->where("password like binary",$password);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	}
} 