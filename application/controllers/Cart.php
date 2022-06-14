<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model("CartModel");
	}
	//Menambahkan Produk Ke Keranjang yaitu ke Array 
	public function add_to_cart(){
		$id_produk = $this->input->post("id_pro");
		$qty = $this->input->post("qty");
		$product_info = $this->CartModel->select_product_info_by_id_produk($id_produk);
		$data = array(
        'id'      => $product_info->id_pro,
        'qty'     => $qty,
        'price'   => $product_info->harga_pro,
        'name'    => $product_info->judul_pro,
        'options' => array('gambar_pro' => $product_info->gambar_pro)
			);

		$this->cart->insert($data);
		return redirect("show-cart");
	}

	//Menampilkan tampilan keranjang beserta datanya
	public function show_cart(){
		$data['main_content'] = $this->load->view('front/view_cart','',true);
		$this->load->view('front/index',$data);
	}

	//Menghapus Data Keranjang Di tampilan view_cart dengan Cara mengubah data qty menjadi 0 tidak di destroy
	public function delete_to_cart($row_id){
		$data = array(
        'rowid' => $row_id,
        'qty'   => 0
			);
		$this->cart->update($data);
		return redirect("show-cart");
	}

	//Mengubah Data Keranjang Antara Mengurangi Atau Menambah serta nantinya digunakan untuk menyimpan data sementara jumlah barang yang dibeli sbelum nantinya akan dimasukan ke database detail_pesanan pada halaman payment
	public function update_cart_quantity(){
		$quantity = $this->input->post('qty',true);
		$row_id = $this->input->post('rowid',true);
		$data = array(
        'rowid' => $row_id,
        'qty'   => $quantity
			);
		$this->cart->update($data);
		return redirect("show-cart");

	}

	public function update_cart_quantity_payment(){
		$quantity = $this->input->post('qty',true);
		$row_id = $this->input->post('rowid',true);
		$data = array(
        'rowid' => $row_id,
        'qty'   => $quantity
			);
		$this->cart->update($data);
		return redirect("payment");

	}
	public function delete_to_cart_payment($row_id){
		$data = array(
        'rowid' => $row_id,
        'qty'   => 0
			);
		$this->cart->update($data);
		return redirect("payment");
	}

}

?>