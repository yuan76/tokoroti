<?php
include 'koneksi.php';

$kode = $_GET['kode'];
$jumlah = $_GET['jumlah'];
$param = $_GET['param'];

	$cekKode = mysqli_query($con, "select * from master where kode='$kode';");
	$ambilKode=mysqli_num_rows($cekKode);
	if ($ambilKode > 0) {
		while ($data = mysqli_fetch_array($cekKode)){
			//$nama=$data['nama'];
			$harga=$data['harga'];			
		}
	}
	$total=$jumlah*$harga;
	
	$sql = "INSERT INTO `jual`(`idJual`,`kode`,`qty`,`total`,`tgl`,`param1`) VALUES (null,'$kode','$jumlah','$total',NOW(),'$param')";
	$queryTambah=mysqli_query($con,$sql);
    		if($queryTambah){
    			echo "<script> alert('Data berhasil di tambahkan');
					window.location='index.php?page=kasir'</script>";
			} else {
				echo "<script> alert('Data Gagal di tambahkan');
					window.location='index.php?page=kasir'</script>";		
			}
	
?>
