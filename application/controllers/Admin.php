<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!isset($this->session->userid) && ($this->session->userstatus !=1)){
			redirect('Login');
		}
		$this->load->model('LoginModel');
	}
	public function index(){
		$this->admindashboard();
	}
	public function admindashboard(){
		$data = array();
		$data['main_content'] = $this->load->view('back/add_product','',TRUE);
		$this->load->view('back/adminpanel',$data);
	}
	
}
