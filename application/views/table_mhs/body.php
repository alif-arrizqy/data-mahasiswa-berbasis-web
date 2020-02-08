<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <div class="main-content">
                <div class="container">
                    <div class="col-md-12">
                    <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                                    <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                    <i class="zmdi zmdi-plus"></i>add item</button> -->
                                    <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                                <!-- <table class="table table-data2"> -->
                                <table class="table table-striped" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NPM</th>
                                            <th>Nama</th>
                                            <!-- <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th> -->
                                            <th>Agama</th>
                                            <th>Gender</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>
                                            <button class="edit_record btn btn-info btn-xs data-toggle="modal" data-target="#myModalAdd">Add New</button>
                                            </th>
                                        </tr>
                                    </tbody> -->
                                </table>
                            </div>                
                    <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Produk-->
        <form id="add-row-form" action="<?php echo base_url().'mahasiswa/crud/simpan'?>" method="post">
             <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">Add New</h4>
                       </div>
                       <div class="modal-body">
                            <div class="form-group">
                               <input type="text" name="npm" class="form-control" placeholder="NPM" required>
                            </div>
                            <div class="form-group">
                               <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                               <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="form-group">
                               <input type="text" name="tgl_lahir" class="form-control" placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="form-group">
                               <input type="text" name="agama" class="form-control" placeholder="Agama" required>
                            </div>
                            <div class="form-group">
                               <input type="text" name="gender" class="form-control" placeholder="Gender" required>
                            </div>
                            <div class="form-group">
                               <!-- <input type="text" name="alamat" class="form-control" placeholder="Alamat" required> -->
                               <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                            </div>
                       </div>
                       <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" id="add-row" class="btn btn-success">Save</button>
                       </div>
                        </div>
                </div>
             </div>
        </form>

        <!-- Modal Update Produk-->
        <form id="add-row-form" action="<?php echo base_url().'mahasiswa/crud/update'?>" method="post">
            <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">Update Data</h4>
                       </div>
                       <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="id_mhs" class="form-control" placeholder="ID" readonly>
                            </div>
                            <div class="form-group">
                               <input type="text" name="npm" class="form-control" placeholder="NPM" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                           </div>
                           <div class="form-group">
                                <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" required>
                           </div>
                           <div class="form-group">
                                <input type="text" name="tgl_lahir" class="form-control" placeholder="yyyy-mm-dd" required>
                           </div>
                           <div class="form-group">
                                <input type="text" name="id_agama" class="form-control" placeholder="agama" required>
                           </div>
                           <div class="form-group">
                                <input type="text" name="id_gender" class="form-control" placeholder="gender" required>
                           </div>
                           <div class="form-group">
                                <!-- <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required> -->
                                <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                           </div>
                       </div>
                       <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" id="add-row" class="btn btn-success">Update</button>
                       </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Modal Hapus Produk-->
        <form id="add-row-form" action="<?php echo base_url().'mahasiswa/crud/delete'?>" method="post">
            <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="id_mhs" class="form-control" placeholder="id" readonly>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="npm" class="form-control" readonly>
                            <strong>Anda yakin mau menghapus record ini?</strong>
                        </div>
                       <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                       </div>
                    </div>
                </div>
            </div>
        </form>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/wow/wow.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/template/back/js') ?>/main.js"></script>   

    <!-- datatable -->
    <script src="<?php echo base_url().'assets/template/back/js/jquery-2.1.4.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/template/back/js/bootstrap.js'?>"></script>
    <script src="<?php echo base_url().'assets/template/back/js/jquery.datatables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/template/back/js/dataTables.bootstrap.js'?>"></script>

<script>
    $(document).ready(function(){
        // Setup datatables
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      };

      var table = $("#mytable").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "tunggu..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'mahasiswa/crud/get_guest_json'?>", "type": "POST"},
                    columns: [
                        {"data": "id_mhs"},
                        {"data": "npm"},
                        {"data": "nama"},
                        // {"data": "tmp_lahir"},
                        // {"data": "tgl_lahir"},
                        {"data": "id_agama"},
                        {"data": "id_gender"},
                        {"data": "alamat"},
                        //render harga dengan format angka
                        // {"data": "barang_harga", render: $.fn.dataTable.render.number(',', '.', '')},
                        // {"data": "kategori_nama"},Aq
                        {"data": "view"}
                  ],
                order: [[0, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
            }
      });
        // end setup datatables
        // get Edit Records
            $('#mytable').on('click','.edit_record',function(){
            var id_mhs=$(this).data('id_mhs');
            var npm=$(this).data('npm');
            var nama=$(this).data('nama');
            var tmp_lahir=$(this).data('tmp_lahir');
            var tgl_lahir=$(this).data('tgl_lahir');
            var id_agama=$(this).data('id_agama');
            var id_gender=$(this).data('id_gender');
            var alamat=$(this).data('alamat');
                        // var kategori=$(this).data('kategori');
            $('#ModalUpdate').modal('show');
            $('[name="id_mhs"]').val(id_mhs);
            $('[name="npm"]').val(npm);
            $('[name="nama"]').val(nama);
            $('[name="tmp_lahir"]').val(tmp_lahir);
            $('[name="tgl_lahir"]').val(tgl_lahir);
            $('[name="id_agama"]').val(id_agama);
            $('[name="id_gender"]').val(id_gender);
            $('[name="alamat"]').val(alamat);
            });
        // End Edit Records

            // get Hapus Records
            $('#mytable').on('click','.hapus_record',function(){
            var id_mhs=$(this).data('id_mhs');
            var npm=$(this).data('npm');
            $('#ModalHapus').modal('show');
            $('[name="id_mhs"]').val(id_mhs);
            $('[name="npm"]').val(npm);
            });
            // End Hapus Records

    });
</script>

</body>
