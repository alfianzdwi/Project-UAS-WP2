<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckoutModel extends CI_Model {
	
	//Fungsi untuk menyimpan data customer baru,ketika membuat akun
	public function save_customer_info(){
		$data = array();
		$data['cus_name'] = $this->input->post('cus_name');
		$data['cus_email'] = $this->input->post('cus_email');
		$data['cus_password'] = md5($this->input->post('cus_password'));
		$this->db->insert("customer",$data);
		$customerid = $this->db->insert_id();
		return $customerid;
	}


	public function select_customer_info_by_id($customer_id){
		$data = $this->db->select('*')
			->from('customer')
			->where("cus_id",$customer_id)
			->get()
			->row();
			return $data;
	}
	
	//Fungsi Untuk Memasukan Data Pengiriman Digunakan DiHalaman Shipping/Pengiriman
	public function insert_shipping(){
	$data = array();
		$data['cus_name'] = $this->input->post('cus_name');
		$data['cus_email'] = $this->input->post('cus_email');
		$data['cus_notelp'] = $this->input->post('cus_notelp');
		$data['cus_alamat'] = $this->input->post('cus_alamat');
		$data['cus_kec'] = $this->input->post('cus_kec');
		$data['cus_kota'] = $this->input->post('cus_kota');
		$data['cus_kodepos'] = $this->input->post('cus_kodepos');
	
		$this->db->insert("pengiriman",$data);
		$customer_ship_id = $this->db->insert_id();
		$sdata = array();
		$sdata['id_pengiriman'] = $customer_ship_id;
		$this->session->set_userdata($sdata);
	
	}

	public function get_user_login_by_email($cus_email){
		$data = $this->db->select('*')
			->from('customer')
			->where("cus_email",$cus_email)
			->get()
			->row();
			return $data;
	}

	//Fungsi Untuk Menyimpan Data Pembayaran Digunakan DiHalaman Payment/Pembayaran
	public function save_payment_info(){
		$data = array();
		$data['metode_pembayaran'] = $this->input->post('metode_pembayaran');
		$data['catatan_pembayaran'] = $this->input->post('catatan_pembayaran');
		$this->db->insert("pembayaran",$data);
		$sdata = array();
		$sdata['id_pembayaran'] = $this->db->insert_id();
		$this->session->set_userdata($sdata);
	}


	//Fungsi ini dipanggil difungsi place_order atau button pesan
	public function save_order_info(){
		$orderdata = array();
		$orderdata['cus_id'] = $this->session->userdata('cus_id');
		$orderdata['id_pengiriman'] = $this->session->userdata('id_pengiriman');
		$orderdata['id_pembayaran'] = $this->session->userdata('id_pembayaran');
		$orderdata['total_pesanan'] = $this->session->userdata('g_total');
		$this->db->insert("pesanan",$orderdata); //Memasukan Data Di Atas Ke Tabel Pesanan
		$id_pesanan = $this->db->insert_id();
		foreach ($this->cart->contents() as $order_product){
			$o_details_data['id_pesanan'] = $id_pesanan;
			$o_details_data['id_produk'] = $order_product['id'];
			$o_details_data['nama_produk'] = $order_product['name'];
			$o_details_data['harga_produk'] = $order_product['price'];
			$o_details_data['jumlah'] = $order_product['qty'];
			$this->db->insert("detail_pesanan",$o_details_data); //Memasukan Data Di Atas Ke Tabel Detail Pesanan
		}
		//$this->cart->destroy();										///Baris Ke 80 Memproses ketika produk di pesan jumlah stock produk di tabel produk admin akan berkurang
		$sql = "UPDATE produk, detail_pesanan
		SET produk.jumlah_pro = produk.jumlah_pro - detail_pesanan.jumlah 
		WHERE produk.id_pro = detail_pesanan.id_produk 
		AND detail_pesanan.id_pesanan = '$id_pesanan'";
		$this->db->query($sql);


	}
	
}