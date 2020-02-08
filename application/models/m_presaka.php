<?php
class M_presaka extends CI_Model
{
  function get_agama(){
    $agm=$this->db->get('agama');
    return $agm;
  }

  function get_gender(){
    $hsl=$this->db->get('gender');
    return $hsl;
  }

  function get_all_produk() {
        $this->datatables->select('id_presaka,npm,jenis_prestasi');
        $this->datatables->from('presaka');
        // // $this->datatables->join('agama', 'id_agama=id_agama');
        $this->datatables->add_column('view', '<button data-toggle="modal" data-target="#ModalUpdate" class="edit_record btn btn-info btn-xs" data-id_presaka="$1" data-npm="$2" data-jenis_prestasi="$3">Edit</button>
          <button data-toggle="modal" data-target="#ModalHapus" class="hapus_record btn btn-danger btn-xs" data-id_presaka="$1" data-npm="$2" data-jenis_prestasi="$3">Hapus</button>','id_presaka,npm,jenis_prestasi');
        return $this->datatables->generate();
  }

}
