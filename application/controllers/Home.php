<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("HomeModel");
		$this->load->library('pagination');
	}

	public function index(){
		$this->homepage();
	}
	public function productpage(){
		$data =array();
		$data['slider'] = $this->load->view('front/advertise_top','',true);

// Start pagination
		$config['base_url'] = base_url().'/Home/productpage/';
		$config['total_rows'] = $this->db->count_all("produk");
		$config['per_page'] = 6;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';	
		$config["first_link"] = "&laquo;";
		$config["first_tag_open"] = "<li>";
		$config["first_tag_close"] = "</li>";
		$config["last_link"] = "&raquo;";
		$config["last_tag_open"] = "<li>";
		$config["last_tag_close"] = "</li>";
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '<li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '<li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$this->load->view('front/index',$data);
	}

	//Fungsi Menampilkan Halaman Home
	public function homepage(){
		$data =array();
		$data['slider'] = $this->load->view('front/slider','',true);
		$data['feature'] = $this->load->view('front/feature','',true);
		$this->load->view('front/index',$data);
	}

	//Fungsi Untuk Menampilkan Halaman Detail Produk
	public function product_details($id_produk){
		$data =array();
		$data['slider'] = "";
		$data['product_info'] = $this->HomeModel->get_product_by_id($id_produk);
		$data['feature'] = $this->load->view('front/product_details',$data,true);
		$this->load->view('front/index',$data);
	}

	//Fungsi Untuk Menampilkan Halaman Error Not Found 404
	public function _404_page(){
		$this->load->view('front/404');
	}


}
