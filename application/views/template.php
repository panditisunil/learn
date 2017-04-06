<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$data['pagetitle'] = $title;
$this->load->view('templates/header', $data);
$this->load->view($v);
$this->load->view('templates/footer');