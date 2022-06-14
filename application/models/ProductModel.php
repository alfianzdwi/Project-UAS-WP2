<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Class Produk Untuk Sebagian Sisi Customer dan Mayoritas Sisi Admin
class ProductModel extends CI_Model {

	//Fungsi Untuk Menambahkan Produk
	public function add_product_model($product_image){
		$data['judul_pro'] = $this->input->post('judul_pro',true);
		$data['desk_pro'] = $this->input->post('desk_pro',true);
		$data['harga_pro'] = $this->input->post('harga_pro',true);
		$data['jumlah_pro'] = $this->input->post('jumlah_pro',true);
		$data['ketersediaan_pro'] = $this->input->post('ketersediaan_pro',true);
		$data['status_pro'] = $this->input->post('status_pro',true);
		$data['gambar_pro'] = $product_image;
		$data['pro_top'] = $this->input->post('pro_top',true);

		
		$this->db->insert('produk',$data);	
	}

	//Fungsi Untuk Mengambil Data Produk Yang Nantinya Dipanggil Di File View 'feature' dan Akan Ditampilkan Pada Sisi Customer
	public function get_all_product_limit(){
		$data = $this->db->select('*')
			->from('produk')
			->order_by('id_pro','desc')
			->limit("6") //Untuk Melimit Produk Yang Tampil
			->get()
			->result();
			return $data;
	}
	
	//Fungsi Untuk Mendapatkan Data Produk Top
	public function get_all_pro_top(){
		$data = $this->db->select('*')
			->from('produk')
			->order_by('id_pro','desc')
			->where('pro_top','1')
			->limit("4")
			->get()
			->result();
			return $data;
	}
	
	//Fungsi Untuk Mendapatkan Data Semua Produk
	public function get_all_product(){
		$data = $this->db->select('*')
			->from('produk')
			->order_by('id_pro','desc')
			->get()
			->result();
			return $data;
	}

	//Fungsi Untuk Masuk Ke Produk Yang ingin diedit,Proses ini terjadi pada saat kira klik button edit di list produk admin
	public function edit_product_model($id_produk){
		$data = $this->db->select('*')
			->from('produk')
			->order_by('id_pro','desc')
			->where('id_pro',$id_produk)
			->get()
			->row();
			return $data;
	}

	//Fungsi Untuk Mengubah Data Produk
	public function update_product_model($product_image){
		$id_produk = $this->input->post('id_pro',true);
		$data['judul_pro'] = $this->input->post('judul_pro',true);
		$data['desk_pro'] = $this->input->post('desk_pro',true);
		$data['harga_pro'] = $this->input->post('harga_pro',true);
		$data['jumlah_pro'] = $this->input->post('jumlah_pro',true);
		$data['ketersediaan_pro'] = $this->input->post('ketersediaan_pro',true);
		$data['status_pro'] = $this->input->post('status_pro',true);
		$data['gambar_pro'] = $product_image;
		$data['pro_top'] = $this->input->post('pro_top',true);
		$this->db->where('id_pro',$id_produk);
		$this->db->update('produk',$data);
		
	}

	//Fungsi Untuk Menghapus Produk 
	public function delete_product_model($id_produk){
		$product_image = $this->edit_product_model($id_produk);
		unlink($product_image->gambar_pro);
		$this->db->where('id_pro', $id_produk);
		$this->db->delete('produk');
	}
	

}
