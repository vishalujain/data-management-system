<?php
class projects_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function get_projects(){
		$result = $this->db->get('projects');
		if($result->num_rows()>0){
			return $result->result();
		} else {
			return false;
		}
	}
	
	function get_project($id){
		$this->db->where('id',$id);
		$result = $this->db->get('projects');
		if($result->num_rows()>0){
			return $result->row();
		} else {
			return false;
		}
	}
	
	function add($data){
		$this->db->insert('projects', $data); 
	}
	
	
	function edit($id,$data){
		$this->db->where('id',$id);
		$this->db->set($data);
		$this->db->update('projects');
	}
	
	function get_status($id){
		$this->db->where('id',$id);
		$result = $this->db->get('projects');
		if($result->num_rows()>0){
			$result = $result->row();
			if($result==1){
				return "New";
			} elseif($result==2){
				return "On-Progress";
			} elseif($result==3){
				return "Pending";
			} elseif($result==4){
				return "Closed";
			} else {
				return "";
			}
		} else {
			return false;
		}
	}
}
?>