<?php 
class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_mhs');
        $this->load->helper('url');
        // $this->load->library('form_validation');
        $this->load->library('datatables');
	}

	
	public function indux ()
	{
		$data = array(
			'title'		=> 'Data Buku',
			'data_buku'	=> $this->web->get_all_buku()
		);
		$this->load->view('table_mhs/index',$data);
	}

	function index() {
    $x['mahasiswa']=$this->m_mhs->get_kategori();
    $this->load->view('table_mhs/home',$x);
  	}

  	function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->m_mhs->get_all_produk();
   }

	function lama(){
		// $data['mahasiswa'] = $this->m_viewmhs->tampil_data()->result();
		// $data['table_mhs/body'] = 'table_mhs/body';

		// $x['data']=$this->m_viewmhs->tampil_data();
		// $this->load->view('table_mhs/home',$data);

		// $viewmhs = $this->m_viewmhs->getAll(); //memanggil methos All
		// $data['mahasiswa'] = $viewmhs;
		// $this->load->view('table_mhs/home', $data);
	}

}