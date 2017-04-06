<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
	function _construct(){
		parent::_construct();
	}
	
	function check_user_exists($email, $pwd){
		$this->load->database();
		$sql = 'SELECT fname,lname,email,pwd,access_prev FROM users WHERE email = ? AND pwd = ? LIMIT 1';
		$data = $this->db->query($sql, array($email, $pwd));
		$udata['data'] = $data->result();
		$udata['numrows'] = $data->num_rows();
		return $udata;
	}
}