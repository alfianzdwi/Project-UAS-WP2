<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}


	public function index(){
		if (isset($this->session->userid)) {
		redirect('Admin/admindashboard');
		} else {
			$this->load->view('front/404');
		}	
	}

	//Fungsi Untuk Tampilan Login
	public function login(){
		$data['main_content'] = $this->load->view('front/login','',true);
		$this->load->view('front/index',$data);
	}

	//Fungsi Untuk Proses Logout Admin
	public function admin_logout(){
		$this->session->sess_destroy();
		$data['main_content'] = $this->load->view('front/login','',true);
		$this->load->view('front/index',$data);
	}

	//Fungsi Untuk melakukan registrasi
	public function customer_registration(){		
		$this->form_validation->set_rules('cus_name', 'Nama Customer', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('cus_email', 'Email', 'required|valid_email|is_unique[customer.cus_email]');
		$this->form_validation->set_rules('cus_password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('con_pass', 'Konfirmasi Password', 'trim|required|matches[cus_password]');
		if($this->form_validation->run()){
		   $customer_id = $this->CheckoutModel->save_customer_info();
		   $sdata = array();
		   $sdata['cus_id'] = $customer_id;
		   $sdata['cus_name'] = $this->input->post('cus_name');
		   $sdata['cus_email'] = $this->input->post('cus_email');
		   $sdata['cus_id'] = $this->session->set_userdata($sdata);
		   redirect("home");
	   }else{
			   $this->login();//checkout means login page
		   }
	   }

	
	//Fungsi Untuk Proses Login Customer
	public function customer_login(){
		$cus_email = $this->input->post('cus_email',true);
		$cus_pass = md5($this->input->post('cus_password',true));
		$user_details = $this->CheckoutModel->get_user_login_by_email($cus_email);
		if($cus_pass==$user_details->cus_password){
			$sdata['cus_id'] = $user_details->cus_id;
			$sdata['cus_name'] =$user_details->cus_name;
			$sdata['cus_email'] =$user_details->cus_email;
			$sdata['cus_id'] = $this->session->set_userdata($sdata);
			redirect("home");
		}else{
			$this->session->set_flashdata('flash_msg','Email Atau Password Salah..!');
			redirect("Login/login");
		}
	}
	

	//Fungsi Untuk Proses Logout Customer
	public function customer_logout(){
		$this->session->sess_destroy();
		redirect("Home");
	}
	
	
	//Fungsi Untuk Check Login Admin
	public function checklogin(){
		$data = array();
		$useremail = $this->input->post('user_email',TRUE);
		$userpassword = $this->input->post('user_password',TRUE);
		//$encryppass = password_hash($userpassword,PASSWORD_DEFAULT);
		$this->load->model('LoginModel');
		$user_details = $this->LoginModel->checkuserlogin($useremail);
		if(password_verify($userpassword,$user_details->user_password)){
			if ($user_details->user_status == 1) {
				$session_data['userid'] 	= $user_details->user_id;
				$session_data['username']	= $user_details->username;
				$session_data['useremail']	= $user_details->user_email;
				$session_data['userrole'] 	= $user_details->user_role;
				$session_data['userstatus']	= $user_details->user_status;
				$this->session->set_userdata($session_data);
				redirect("Admin");
			} else {
				$data['error_message'] = "U Are Not An Active User...!";
				$this->load->view('login',$data);
			}
		}else{
			$this->session->set_flashdata('flash_msg_adm','Email Atau Password Salah..!');
			redirect('login');
		}
	}
}
