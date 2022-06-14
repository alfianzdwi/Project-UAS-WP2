<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Class Untuk Menampilkan Data Produk Dari Sisi Customer
class HomeModel extends CI_Model {
	//Fungsi Untuk Mendapatkan Data Produk Berdasarkan Id,Bergubna Saat Melihat Detail Produk Dari Sisi Customer
    public function get_product_by_id($id_produk){
		$this->db->select('produk.*');
	    $this->db->from('produk');
		 $this->db->where('id_pro',$id_produk);
	    $query = $this->db->get();
	    return $query->row();
	}
}