<?php
class Crud extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('m_presaka');
  }
  function index(){
    $x['mahasiswa']=$this->m_presaka->get_all_produk();
    $this->load->view('table_prestasi/akademik/home',$x);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->m_presaka->get_all_produk();

  }

  function simpan(){ //function simpan data
    $data=array(
        'npm' => $this->input->post('npm'),
        'jenis_prestasi' => $this->input->post('jenis_prestasi')
        // 'alamat' => $this->input->post('alamat')
    );
    $this->db->insert('presaka', $data);
    redirect('menu/menu/table_prestasi_aka');
  }

  function update(){ //function update data
    $kode=$this->input->post('id_presaka');
    $data=array(
        'npm' => $this->input->post('npm'),
        'jenis_prestasi' => $this->input->post('jenis_prestasi')
      // 'barang_harga'    => $this->input->post('harga'),
      // 'barang_kategori_id' => $this->input->post('kategori')
    );
    $this->db->where('id_presaka',$kode);
    $this->db->update('presaka', $data);
    redirect('menu/menu/table_prestasi_aka');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('id_presaka');
    $data=array(
      'npm' => $this->input->post('npm')
    );
    // $this->m_presaka->delete_mhs($id_mhs);
    $this->db->where('id_presaka',$kode);
    $this->db->delete('presaka',$data);
    // $where = array('id_presaka'=>$id_presaka);
    // $this->m_presaka->delete_data($where,'presaka');
    redirect('menu/menu/table_prestasi_aka');
  }

}
