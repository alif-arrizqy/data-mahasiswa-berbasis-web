<?php 


class Crud extends CI_Controller{
	public function __construct ()
	{
		parent ::__construct ();
		$this->load->model('web'); //panggil model
	}

	public function index ()
	{
		$data = array(
			'title'		=> 'Data Buku',
			'data_buku'	=> $this->web->get_all_buku()
		);
		$this->load->view('home',$data);
	}

}