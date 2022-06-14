<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("CheckoutModel");
	}


	public function shipping(){
			$data['main_content'] = $this->load->view('front/shipping','',true);
			$this->load->view('front/index',$data);
	}
	

	public function payment(){
	$customer_id = $this->session->userdata('cus_id');
	if($customer_id==NUll){
		redirect("login");
	}else{
		$data['main_content'] = $this->load->view('front/payment','',true);
		$this->load->view('front/index',$data);
		}
	}


	public function insert_shipping(){
		$this->form_validation->set_rules('cus_notelp', 'No Telepon', 'trim|required');
		 $this->form_validation->set_rules('cus_alamat', 'Alamat', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('cus_kec', 'Kec', 'trim|required');
		 $this->form_validation->set_rules('cus_kodepos', 'Kode Pos', 'trim|required|min_length[4]');
		 $this->form_validation->set_rules('cus_email', 'Email', 'trim|required|valid_email');
		 $this->form_validation->set_rules('cus_name', 'Nama', 'trim|required');
			if($this->form_validation->run()){
			$this->CheckoutModel->insert_shipping();
			redirect("payment");
		}else{
			$this->shipping();
		}
	}


	public function place_order(){
		$payment_method = $this->input->post('metode_pembayaran',true);
		if($payment_method!=NUll){
			$this->CheckoutModel->save_payment_info();
			if($payment_method=='cash_on_delivery'){
				$this->CheckoutModel->save_order_info();

		// Mendestroy Data Keranjang Ketika Fungsi Ini Dipanggil di Button Pesan Pada View Payment
		$this->cart->destroy();
				redirect('order-success');
			}
			if($payment_method=='paypal'){
				
			}
		}else{
			$this->session->set_flashdata("flash_msg","<font class='btn-warning alert alert-danger'>Mohon Pilih Metode Pembayaran</font>");
			redirect("payment");
		}
	}


	public function order_success(){
		$data =array();
		$data['slider'] = $this->load->view('front/slider','',true);
		$data['main_content'] = $this->load->view('front/order_success','',true);
		$this->load->view('front/index',$data);
	}

}
