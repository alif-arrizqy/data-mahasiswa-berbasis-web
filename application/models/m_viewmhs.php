<?php 

class M_viewmhs extends CI_Model{
	function tampil_data(){
		return $this->db->get('mahasiswa');
		// $hasil=$this->db->query("SELECT * FROM mahasiswa");
		 // return $hasil;
		// $this->db->order_by("npm", "nama");
		// return $this->db->get('mahasiswa')->result();
	}
}