
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <section class="content-header">
      <h1>
        Data Master
      </h1>
    </section>
    <section class="content">	
		<a class="btn btn-info btn-xl" href="" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-circle"></i> Tambah</a>
        <br>
		<?php
        include "koneksi.php";
        error_reporting(0);

        $qry = mysqli_query($con,"select * from master order by kode asc");
        echo "<div class='table-responsive'>
              <div class='col-xs-10'>
              <table class='table table-striped'>
              <thead class='list'> <tr> <td> Kode </td> <td> Nama Roti </td> <td> Harga </td> <td> Action </td> </tr> </thead> <tbody>";
        while ($data=mysqli_fetch_array($qry)){
          echo "<tr> <td> ".$data['kode']."</td> <td>".$data['nama']."</td> <td> Rp. ".number_format($data['harga'])."</td> <td> <a class='btn btn-warning btn-xl' href='' data-toggle='modal' data-target='#ubah".$data['idMaster']."'><i class='fa fa-edit'></i> Ubah </a> </td> </tr>";
		  echo "		  
			<div class='modal fade' id='ubah".$data['idMaster']."' role='dialog'>
				<div class='modal-dialog'>
					<div class='modal-content'>
						<div class='modal-body'>
							<form action='prosesUbMas.php'>
								<h3>Ubah Data Master</h3>
								<hr>
								<label for='nama'>Nama Roti</label>
								<input type='text' placeholder='Masukkan Nama' name='nama' class='form-control' value='".$data['nama']."' required />
								<label for='harga'>Harga</label>
								<input type='text' placeholder='Masukkan Harga' name='harga' class='form-control' value='".$data['harga']."' required />
								<input type='hidden' name='id' class='form-control' value='".$data['idMaster']."'/>								
								<br>
								<div class='clearfix'>
									<button type='button' class='btn btn-danger' data-dismiss='modal'>Batal</button>
									<button type='submit' class='btn btn-primary btn-ok'>Ubah</button>
								</div>
							</form>						
						</div>
					</div>
				</div>
			</div>
		  ";
		  
        }
        echo "</tbody> </table> </div> </div>";
        ?>
	</section>	
		
		
<div class="modal fade" id="tambah" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
						<form action="prosesTamMas.php">
							<h3>Tambah Data Master</h3>
							<hr>
							<label for="nama">Nama Roti</label>
							<input type="text" placeholder="Masukkan Nama Roti" name="nama" class="form-control" required />

							<label for="harga">Harga</label>
							<input type="text" placeholder="Masukkan Harga" name="harga" class="form-control" required />

							<br>
							<div class="clearfix">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary btn-ok">Tambah</button>
							</div>
						</form>						
					
                </div>
            </div>
        </div>
</div>
</body>
</html>	

