<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Class Keranjang
class CartModel extends CI_Model {
	//Fungsi Untuk Mendapatkan Data Produk Yang Dimasukan Ke Keranjang
	public function select_product_info_by_id_produk($id_produk){
		$data = $this->db->select('*')
				->from("produk")
				->where("id_pro",$id_produk)
				->get()
				->row();
				return $data;
	}
}