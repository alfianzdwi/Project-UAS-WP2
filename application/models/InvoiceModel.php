<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvoiceModel extends CI_Model {
	//Fungsi Untuk Mengambil Data Pesanan Yang Berada DiTabel Pesanan Dan Mengambil Data Pada Tabel Customer Yang Sesuai Dengan cus_id pada tabel Customer dan cus_id pada tabel Pesanan
	//Serta Mengambil Data Pada Tabel Pembayaran dengan ketentuan id_pembayaran pada tabel Pembayaran dan id_pembayaran pada tabel Pesanan Sesuai
	public function get_all_order(){
		$data = $this->db->select('*')
						->from('pesanan')
						->join('customer', 'customer.cus_id = pesanan.cus_id')
						->join('pembayaran', 'pembayaran.id_pembayaran = pesanan.id_pembayaran')
						->get()
						->result();
						return $data;
	}

	public function get_order_info_by_id($id_pesanan){
		$data = $this->db->select('*')
						->from('pesanan')
						->where('id_pesanan',$id_pesanan)
						->get()
						->row();
						return $data;
	}
	public function get_customer_info_by_id($customer_id){
		$data = $this->db->select('*')
						->from('customer')
						->where('cus_id',$customer_id)
						->get()
						->row();
						return $data;
	}
	public function get_shipping_info_by_id($id_pengiriman){
		$data = $this->db->select('*')
						->from('pengiriman')
						->where('id_pengiriman',$id_pengiriman)
						->get()
						->row();
						return $data;
	}
	public function get_all_order_details_by_id($id_pesanan){
		$data = $this->db->select('*')
						->from('detail_pesanan')
						->where('id_pesanan',$id_pesanan)
						->get()
						->result();
						return $data;
	}

	//Fungsi Untuk Menghapus Data Pesanan
	public function delete_order_info_by_id($id_pesanan,$id_pengiriman,$id_pembayaran){
		$this->db->where('id_pesanan',$id_pesanan);
		$this->db->delete('pesanan');
		$this->db->where('id_pesanan',$id_pesanan);
		$this->db->delete('detail_pesanan');
		$this->db->where('id_pengiriman',$id_pengiriman);
		$this->db->delete('pengiriman');
		$this->db->where('id_pembayaran',$id_pembayaran);
		$this->db->delete('pembayaran');
	}
}