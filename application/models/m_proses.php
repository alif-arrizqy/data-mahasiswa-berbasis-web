<?php 

class M_proses extends CI_Model{
	function tampil_data(){
		return $this->db->get('login');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}