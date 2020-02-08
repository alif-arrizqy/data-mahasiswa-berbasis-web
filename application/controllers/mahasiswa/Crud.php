<?php
class Crud extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('m_mhs');
  }
  function index(){
    $x['mahasiswa']=$this->m_mhs->get_all_produk();
    $this->load->view('table_mhs/home',$x);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->m_mhs->get_all_produk();

  }

  function simpan(){ //function simpan data
    $data=array(
        'npm' => $this->input->post('npm'),
        'nama' => $this->input->post('nama'),
        'tmp_lahir' => $this->input->post('tmp_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'id_agama' => $this->input->post('agama'),
        'id_gender' => $this->input->post('gender'),
        'alamat' => $this->input->post('alamat')
    );
    $this->db->insert('mahasiswa', $data);
    redirect('menu/menu/table_mhs');
  }

  function update(){ //function update data
    $kode=$this->input->post('id_mhs');
    $data=array(
        'npm' => $this->input->post('npm'),
        'nama' => $this->input->post('nama'),
        'tmp_lahir' => $this->input->post('tmp_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'id_agama' => $this->input->post('id_agama'),
        'id_gender' => $this->input->post('id_gender'),
        'alamat' => $this->input->post('alamat')
      // 'barang_harga'    => $this->input->post('harga'),
      // 'barang_kategori_id' => $this->input->post('kategori')
    );
    $this->db->where('id_mhs',$kode);
    $this->db->update('mahasiswa', $data);
    redirect('menu/menu/table_mhs');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('id_mhs');
    $this->m_mhs->delete_mhs($id_mhs);
    // $this->db->delete('mahasiswa');
    // $this->db->where('id_mhs',$kode);
    
    redirect('menu/menu/table_mhs');
  }

}
