<?php
class M_minba_non extends CI_Model
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
        $this->datatables->select('id_minba_non,npm,jenis_minba');
        $this->datatables->from('minba_non');
        // // $this->datatables->join('agama', 'id_agama=id_agama');
        $this->datatables->add_column('view', '<button data-toggle="modal" data-target="#ModalUpdate" class="edit_record btn btn-info btn-xs" data-id_minba_non="$1" data-npm="$2" data-jenis_minba="$3">Edit</button>
          <button data-toggle="modal" data-target="#ModalHapus" class="hapus_record btn btn-danger btn-xs" data-id_minba_non="$1" data-npm="$2" data-jenis_minba="$3">Hapus</button>','id_minba_non,npm,jenis_minba');
        return $this->datatables->generate();
  }

}
