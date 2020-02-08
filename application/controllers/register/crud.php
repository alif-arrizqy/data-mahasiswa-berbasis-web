<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_proses');
		$this->load->helper('url');

	}

	function index(){
		// $data['login'] = $this->m_proses->tampil_data()->result();
		$this->load->view('admin/home');
	}

	function tambah(){
		$this->load->view('register/home');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password= $this->input->post('password');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password
			);
		$this->m_proses->input_data($data,'login');
		redirect('register/crud/index');
	}

}