<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Web extends CI_Model
 {
 	public function get_all_buku()
 	{
 	$query = $this->db->order_by('id_mhs','DESC')->get('mahasiswa');
 	return $query->result();
 	}
 }