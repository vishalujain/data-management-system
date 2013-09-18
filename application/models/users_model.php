<?php
class Users_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function authenticate($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('users');
		if($result->num_rows()>0){
			return $result->row();
		} else {
			return false;
		}
	}
	
	function get_user($id){
		$this->db->where('id',$id);
		$result = $this->db->get('users');
		if($result->num_rows()>0){
			return $result->row();
		} else {
			return false;
		}
	}
	
	function get_all_users(){
		$result = $this->db->get('users');
		if($result->num_rows()>0){
			return $result->result();
		} else {
			return false;
		}
	}
	
	function get_all_content_producers(){
		$this->db->where('role','0');
		$result = $this->db->get('users');
		if($result->num_rows()>0){
			return $result->result();
		} else {
			return false;
		}
	}
	
	function get_all_project_managers(){
		$this->db->where('role','1');
		$result = $this->db->get('users');
		if($result->num_rows()>0){
			return $result->result();
		} else {
			return false;
		}
	}
	
	function get_current_user(){
		return $this->get_user($this->session->userdata('user_id'));
	}
	
	function get_role($id){
		$this->db->where('id',$id);
		$result = $this->db->get('users');
		if($result->num_rows()>0){
			$result = $result->row();
			return $result->role;
		} else {
			return false;
		}
	}
}
?>