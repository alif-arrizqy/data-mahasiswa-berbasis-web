<?php
class Crud extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('m_minba_non');
  }
  function index(){
    $x['minba_non']=$this->m_minba_non->get_all_produk();
    $this->load->view('table_minba/nonakademik/home',$x);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->m_minba_non->get_all_produk();

  }

  function simpan(){ //function simpan data
    $data=array(
        'npm' => $this->input->post('npm'),
        'jenis_minba' => $this->input->post('jenis_minba')
        // 'alamat' => $this->input->post('alamat')
    );
    $this->db->insert('minba_non', $data);
    redirect('menu/menu/table_minba_non');
  }

  function update(){ //function update data
    $kode=$this->input->post('id_minba_non');
    $data=array(
        'npm' => $this->input->post('npm'),
        'jenis_minba' => $this->input->post('jenis_minba')
      // 'barang_harga'    => $this->input->post('harga'),
      // 'barang_kategori_id' => $this->input->post('kategori')
    );
    $this->db->where('id_minba_non',$kode);
    $this->db->update('minba_non', $data);
    redirect('menu/menu/table_minba_non');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('id_minba_non');
    $data=array(
      'npm' => $this->input->post('npm')
    );
    // $this->m_presaka->delete_mhs($id_mhs);
    $this->db->where('id_minba_non',$kode);
    $this->db->delete('minba_non',$data);
    // $where = array('id_presaka'=>$id_presaka);
    // $this->m_presaka->delete_data($where,'presaka');
    redirect('menu/menu/table_minba_non');
  }

}
