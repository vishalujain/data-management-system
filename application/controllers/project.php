<?php
class Project extends CI_Controller{
	
	var $ckeditor1 = array();
	var $ckeditor2 = array();
	var $ckeditor3 = array();
	var $ckeditor4 = array();
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){
			redirect(site_url('login'));
		}
		$this->load->model('users_model');
		$this->load->model('projects_model');
		$this->load->helper('ckeditor');
		
		$this->ckeditor1 = array('id'=>'description','path'=>'js/ckeditor','config'=>array('toolbar'=>"Full",'width'=>"550px",'height'=>'100px'));
		$this->ckeditor2 = array('id'=>'comments','path'=>'js/ckeditor','config'=>array('toolbar'=>"Full",'width'=>"550px",'height'=>'100px'));
		$this->ckeditor3 = array('id'=>'tags','path'=>'js/ckeditor','config'=>array('toolbar'=>"Full",'width'=>"550px",'height'=>'100px'));
		$this->ckeditor4 = array('id'=>'keywords','path'=>'js/ckeditor','config'=>array('toolbar'=>"Full",'width'=>"550px",'height'=>'100px'));
	}
	
	function index(){
		$data['user'] 		= $this->users_model->get_current_user();
		$data['projects'] 	= $this->projects_model->get_projects();
		$this->load->view('template/header',$data);
		$this->load->view('view');
		$this->load->view('template/footer');
	}
	
	function add(){
		$data['ckeditor1'] 				= $this->ckeditor1;
		$data['ckeditor2'] 				= $this->ckeditor2;
		$data['ckeditor3'] 				= $this->ckeditor3;
		$data['ckeditor4'] 				= $this->ckeditor4;
		$data['content_producers']		= $this->users_model->get_all_content_producers();
		$data['current_user']			= $this->session->userdata('user_id');
		if(isset($_POST['submit'])){
			$data = $_POST;
			unset($data['submit']);
			$this->projects_model->add($data);
			redirect('project');
		} else {
			$this->load->view('template/header');
			$this->load->view('add',$data);
			$this->load->view('template/footer');
		}
	}
	
	function edit($id){
		$data['ckeditor1'] 				= $this->ckeditor1;
		$data['ckeditor2'] 				= $this->ckeditor2;
		$data['ckeditor3'] 				= $this->ckeditor3;
		$data['ckeditor4'] 				= $this->ckeditor4;
		$data['project']				= $this->projects_model->get_project($id);
		$data['content_producers']		= $this->users_model->get_all_content_producers();
		$data['current_user']			= $this->session->userdata('user_id');
		$data['role']					= $this->users_model->get_role($data['current_user']->id);
		if(isset($_POST['submit'])){
			$data = $_POST;
			unset($data['submit']);
			$data['last_update'] = date("Y-m-d");
			$this->projects_model->edit($id,$data);
			redirect('project');
		} else {
			$this->load->view('template/header');
			$this->load->view('edit',$data);
			$this->load->view('template/footer');
		}
	}
}
?>