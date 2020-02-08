<?php 

class Menu extends CI_Controller{

	function __construct(){
		parent::__construct();	
		// $this->load->helper('url');	
		// $this->load->model('m_login');

	}
	public function table_mhs(){
		$this->load->view('table_mhs/home');
	}

	function table_prestasi_aka(){
		$this->load->view('table_prestasi/akademik/home');
	}
	function table_prestasi_non(){
		$this->load->view('table_prestasi/nonakademik/home');
	}
	function table_minba_aka(){
		$this->load->view('table_minba/akademik/home');
	}
	function table_minba_non(){
		$this->load->view('table_minba/nonakademik/home');
	}
}