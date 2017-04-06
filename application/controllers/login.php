<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('form','html'));
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function login_check(){
		$this->load->model('login_model');
		
		$email = $this->input->post('email');
		$pwd = $this->input->post('password');
		
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('index');
		}else{
			if ($this->input->post('btn_login') == "Login"){
				
				$usr_result = $this->login_model->check_user_exists($email, $pwd);
				
				if ($usr_result['numrows'] > 0){
					$fname = $usr_result['data'][0]->fname;
					$lname = $usr_result['data'][0]->lname;
					$name = $fname.' '.$lname;
					$access_prev = $usr_result['data'][0]->access_prev;
					$sessiondata = array(
									'uemail' => $email,
									'uname' =>$name,
									'access'=>$access_prev
									);
					$this->session->set_userdata($sessiondata);
					if($access_prev == 1){
						redirect("test/adminhome");
					}else{
						redirect("test/home");
					}
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
					redirect('login');
				}
			}else{
				redirect('login');
			}
		}
	}
}