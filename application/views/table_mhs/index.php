<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

<div class="container" style="margin-top: 20px">
	<div class="col-md-12">
		<h2 style="text-align: center;margin-bottom: 30px"> Data Buku Dengan Codeignter & Datatables</h2>
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th> No. </th>
					<th> NPM </th>
					<th> Nama </th>
					<th style="width: 125px;"> Action</p> </th>
				</tr>
			</thead>
			<tbody>
				<?php
				    include 'koneksi.php';
				    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
				    $no=1;
				    foreach ($mahasiswa as $row){
				        // $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
				        echo "<tr>
				            
				            <td>".$no++."</td>
				            <td>".$row['npm']."</td>
				            <td>".$row['nama']."</td>
				            
				              </tr>";
				        // $no++;
				    }
				?>
			</tbody>
		</table>
	</div>
</div>






<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>