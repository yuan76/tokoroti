
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
        Kasir
      </h1>
    </section>
    <section class="content">	
		<a class="btn btn-info btn-xl" href="" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-circle"></i> Tambah </a>
        <a class="btn btn-success btn-xl" href="index.php?page=bayar&t=1"><i class="fa fa-money"></i> Bayar </a>        
		<br>
		<?php
        include "koneksi.php";
        error_reporting(0);
		$ambilParam = mysqli_query($con, "select * from parameter where idParam='1';");
		while ($data = mysqli_fetch_array($ambilParam)){
			$param=$data['param1'];
		}
		$qryTotal = mysqli_query($con, "select sum(total) as totalAll from jual where param1='$param';");
		while ($dataTotal = mysqli_fetch_array($qryTotal)){
			$totalAll=$dataTotal['totalAll'];
		}
		
        $qry = mysqli_query($con,"select jual.idJual as idJual,jual.kode as kode,master.nama as nama,jual.qty as qty,jual.total as total from $db.jual as jual join $db.master as master on jual.kode = master.kode where jual.param1='$param' order by jual.kode asc"); 
		echo "<div class='table-responsive'>
              <div class='col-xs-10'>
              <table class='table table-striped'>
              <thead class='list'> <tr> <td> Kode </td> <td> Nama produk </td> <td> Qty </td> <td> Total </td> <td> Action </td> </tr> </thead> <tbody>";
        while ($data=mysqli_fetch_array($qry)){
         echo "<tr> <td> ".$data['kode']."</td> <td> ".$data['nama']."</td> <td>".$data['qty']."</td> <td> Rp. ".number_format($data['total'])."</td> <td> <a class='btn btn-danger btn-xl' href='' data-toggle='modal' data-target='#hapus".$data['idJual']."'><i class='fa fa-trash-o'></i> Hapus </a> </td> </tr>";
		 echo "		  
			<div class='modal fade' id='hapus".$data['idJual']."' role='dialog'>
				<div class='modal-dialog'>
					<div class='modal-content'>
						<div class='modal-body'>
							<form action='hapusBar.php'>
								Anda yakin ingin membatalkan produk ini?<br><br>
								<input type='hidden' name='id' class='form-control' value='".$data['idJual']."'/>	
								<div class='clearfix'>
									<button type='button' class='btn btn-danger' data-dismiss='modal'>Tidak</button>
									<button type='submit' class='btn btn-primary btn-ok'>Ya, Hapus</button>
								</div>
							</form>						
						</div>
					</div>
				</div>
			</div>
		  ";
		}
		echo "<tr> <td> Total </td> <td> </td> <td> </td> <td> Rp. ".number_format($totalAll)."</td> <td> </td> </tr>";		
        echo "</tbody> </table> </div> </div>";
        ?>
	</section>	
		
		
<div class="modal fade" id="tambah" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
						<form action="prosesTamBar.php">
							<h3>Tambah Produk</h3>
							<hr>
							<label for="nama">Kode Produk</label>
							<input type="text" placeholder="Masukkan Kode Produk" name="kode" class="form-control" required />

							<label for="harga">Jumlah Pembelian</label>
							<input type="text" placeholder="Masukkan Jumlah Pembelian" name="jumlah" class="form-control" required />

							<input type="hidden" name="param" value="<?php echo $param;?>" class="form-control" required />

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

