<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModel extends CI_Model {
	
	//Fungsi Unruk Mendapatkan Data Yang Dicari
	public function get_search(){
	$match = $this->input->post('search');
	  $this->db->like('judul_pro',$match);
	  $this->db->or_like('desk_pro',$match);
	  $query = $this->db->get('produk');
	  return $query->result();
	}
}