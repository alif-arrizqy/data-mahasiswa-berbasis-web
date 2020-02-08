<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <div class="main-content">
                <div class="container">
                    <div class="col-md-12">
                    <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">data table prestasi akademik</h3>
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
                                            <th>Prestasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>                
                    <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Produk-->
        <form id="add-row-form" action="<?php echo base_url().'presaka/crud/simpan'?>" method="post">
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
                               <!-- <input type="text" name="alamat" class="form-control" placeholder="Alamat" required> -->
                               <textarea name="jenis_prestasi" class="form-control" placeholder="Jenis Prestasi"></textarea>
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
        <form id="add-row-form" action="<?php echo base_url().'presaka/crud/update'?>" method="post">
            <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">Update Data</h4>
                       </div>
                       <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="id_presaka" class="form-control" placeholder="ID" readonly>
                            </div>
                            <div class="form-group">
                               <input type="text" name="npm" class="form-control" placeholder="NPM" required>
                            </div>
                            <div class="form-group">
                                <!-- <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required> -->
                                <textarea name="jenis_prestasi" class="form-control" placeholder="Jenis Prestasi"></textarea>
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
        <form id="add-row-form" action="<?php echo base_url().'presaka/crud/delete'?>" method="post">
            <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="id_presaka" class="form-control" placeholder="id" readonly>
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
              ajax: {"url": "<?php echo base_url().'presaka/crud/get_guest_json'?>", "type": "POST"},
                    columns: [
                        {"data": "id_presaka"},
                        {"data": "npm"},
                        {"data": "jenis_prestasi"},
                        {"data": "view"}
                  ],
                order: [[1, 'asc']],
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
            var id_presaka=$(this).data('id_presaka');
            var npm=$(this).data('npm');
            var jenis_prestasi=$(this).data('jenis_prestasi');
            $('#ModalUpdate').modal('show');
            $('[name="id_presaka"]').val(id_presaka);
            $('[name="npm"]').val(npm);
            $('[name="jenis_prestasi"]').val(jenis_prestasi);
            });
        // End Edit Records

            // get Hapus Records
            $('#mytable').on('click','.hapus_record',function(){
            var id_presaka=$(this).data('id_presaka');
            var npm=$(this).data('npm');
            $('#ModalHapus').modal('show');
            $('[name="id_presaka"]').val(id_presaka);
            $('[name="npm"]').val(npm);
            });
            // End Hapus Records

    });
</script>

</body>
