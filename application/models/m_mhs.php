<?php
class M_mhs extends CI_Model
{
  function get_agama(){
    $agm=$this->db->get('agama');
    return $agm;
  }

  function get_gender(){
    $hsl=$this->db->get('gender');
    return $hsl;
  }

  function delete_mhs($id_mhs){
    $hasil=$this->db->query("delete from mahasiswa where id_mhs='$id_mhs'");
  }

  function get_all_produk() {
        $this->datatables->select('id_mhs,npm,nama,tmp_lahir,tgl_lahir,id_agama,id_gender,alamat');
        $this->datatables->from('mahasiswa');
        // // $this->datatables->join('agama', 'id_agama=id_agama');
        $this->datatables->add_column('view', '<button data-toggle="modal" data-target="#ModalUpdate" class="edit_record btn btn-info btn-xs" data-id_mhs="$1" data-npm="$2" data-nama="$3" data-tmp_lahir="$4" data-tgl_lahir="$5" data-id_agama="$6" data-id_gender="$7" data-alamat="$8">Edit</button>
          <button data-toggle="modal" data-target="#ModalHapus" class="hapus_record btn btn-danger btn-xs" data-id_mhs="$1" data-npm="$2" data-nama="$3" data-tmp_lahir="$4" data-tgl_lahir="$5" data-id_agama="$6" data-id_gender="$7" data-alamat="$8">Hapus</button>','id_mhs,npm,nama,tmp_lahir,tgl_lahir,id_agama,id_gender,alamat');
        return $this->datatables->generate();

        // $this->datatables->select('id_mhs,npm,nama,id_agama');
        // $this->datatables->from('mahasiswa');
        // $this->datatables->join('tbl_agama', 'id_agama=id_agama');
        // $this->datatables->add_column('view', '<a href="javascript:void(0);" 
        //   class="edit_record btn btn-info btn-xs" data-id_mhs="$1" data-npm="$2" data-nama="$3" data-agama="$4" >Edit</a>  
        //   <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" 
        //   data-id_mhs="$1">Hapus</a>','id_mhs,npm,nama,id_agama');
        // return $this->datatables->generate();

        // $hsl=$this->db->get('mahasiswa');
        // return $hsl;
  }

}
