<?php
class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	}
	
	function index(){
		$this->load->view('login');
	}
	
	function authenticate(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$auth = $this->users_model->authenticate($username,$password);
		if($auth){
			$this->session->set_userdata('user_id',$auth->id);
			redirect(site_url('project'));
		} else {
			redirect(site_url('login'));
		}
	}
}
?>