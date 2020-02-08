<?php
class Crud extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('m_presnon');
  }
  function index(){
    $x['presnon']=$this->m_presnon->get_all_produk();
    $this->load->view('table_prestasi/nonakademik/home',$x);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->m_presnon->get_all_produk();
  }

  function simpan(){ //function simpan data
    $data=array(
        'npm' => $this->input->post('npm'),
        'jenis_prestasi' => $this->input->post('jenis_prestasi')
        // 'alamat' => $this->input->post('alamat')
    );
    $this->db->insert('presnon', $data);
    redirect('menu/menu/table_prestasi_non');
  }

  function update(){ //function update data
    $kode=$this->input->post('id_presnon');
    $data=array(
        'npm' => $this->input->post('npm'),
        'jenis_prestasi' => $this->input->post('jenis_prestasi')
      // 'barang_harga'    => $this->input->post('harga'),
      // 'barang_kategori_id' => $this->input->post('kategori')
    );
    $this->db->where('id_presnon',$kode);
    $this->db->update('presnon', $data);
    redirect('menu/menu/table_prestasi_non');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('id_presnon');
    $data=array(
      'npm' => $this->input->post('npm')
    );
    // $this->m_presaka->delete_mhs($id_mhs);
    $this->db->where('id_presnon',$kode);
    $this->db->delete('presnon',$data);
    // $where = array('id_presaka'=>$id_presaka);
    // $this->m_presaka->delete_data($where,'presaka');
    redirect('menu/menu/table_prestasi_non');
  }

}
