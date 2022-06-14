<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Category Controller
*/
class Invoice extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!isset($this->session->userid) && ($this->session->userstatus !=1)){
			redirect('Login');
		}
		$data =array();
		$this->load->model('InvoiceModel');
	}

	//Fungsi Untuk Menampilkan Daftar Pesanan
	public function manage_order(){
		$data['all_order'] = $this->InvoiceModel->get_all_order();
		$data['main_content'] = $this->load->view('back/order_list',$data,true);
		$this->load->view('back/adminpanel',$data);
	}

	//Fungsi Untuk Menampilkan Detail Pesanan
	public function view_order($id_pesanan){
		$data['order_info'] = $this->InvoiceModel->get_order_info_by_id($id_pesanan);
		$order_info = $this->InvoiceModel->get_order_info_by_id($id_pesanan);
		$customer_id = $order_info->cus_id;
		$id_pengiriman = $order_info->id_pengiriman;
		$data['cus_info'] = $this->InvoiceModel->get_customer_info_by_id($customer_id);
		$data['ship_info'] = $this->InvoiceModel->get_shipping_info_by_id($id_pengiriman);
		$data['order_details_info'] = $this->InvoiceModel->get_all_order_details_by_id($id_pesanan);
		$data['main_content'] = $this->load->view('back/order_details',$data,true);
		$this->load->view('back/adminpanel',$data);
	}

	//Fungsi Untuk Menghapus Pesanan
	public function delete_order($id_pesanan){
		$order_info = $this->InvoiceModel->get_order_info_by_id($id_pesanan);

		$id_pesanan = $order_info->id_pesanan;
		$id_pengiriman = $order_info->id_pengiriman;
		$id_pembayaran = $order_info->id_pembayaran;
		$this->InvoiceModel->delete_order_info_by_id($id_pesanan,$id_pengiriman,$id_pembayaran);
		$this->session->set_flashdata("flsh_msg","<font class='success'>Pesanan Berhasil Dihapus</font>");
		redirect('manage-order');
	}
}