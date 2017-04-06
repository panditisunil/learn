<?php
class test extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	
	public function home(){
		if($this->check_loggedin_status()){
			if($this->session->access != 1){
				$d['v'] = 'home';
				$d['title'] = 'Home';
				$this->load->view('template', $d);
			}else{
				redirect('test/adminhome');
			}
		}else{
			redirect('login');
		}
	}
	
	public function adminhome(){
		if($this->check_loggedin_status()){
			if($this->check_access_prev() == 1){
				$d['v'] = 'admincontrol';
				$d['title'] = 'Admin Home';
				$this->load->view('template', $d);
			}else{
				redirect('test/home');
			}
		}else{
			redirect('login');
		}
	}
	
	public function addnewuser(){
		if($this->check_loggedin_status()){
			if($this->check_access_prev() == 1){
				$this->load->helper('form');
				$d['v'] = 'addnewuser';
				$d['title'] = 'Admin - Add User';
				$this->load->view('template', $d);
			}else{
				redirect('test/home');
			}
		}else{
			redirect('login');
		}
	}
	
	public function logout(){
		if($this->check_loggedin_status()){
			$ses_arr = array('uemail','uname');
			$this->session->unset_userdata($ses_arr);
			redirect('login');
		}else{
			redirect('login');
		}
		
	}
	
	public function check_loggedin_status(){
		if($this->session->has_userdata('uemail')){
			return true;
		}else{
			return false;
		}
	}
	
	public function check_access_prev(){
		if($this->session->has_userdata('access')){
			if($this->session->access === '1'){
				return 1;
			}else{
				return 0;
			}
		}else{
			$this->logout();
		}
	}
}