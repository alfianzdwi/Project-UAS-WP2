<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Class Login Admin
class LoginModel extends CI_Model {

	//Fungsi Untuk Mengecek Login Admin
	public function checkuserlogin($useremail){
		$user_details = $this->db->select('*')
							->from('user')
							->where('user_email',$useremail)
							->get()
							->row();
		return 	$user_details;
	}
}