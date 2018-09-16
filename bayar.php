<?php
include 'koneksi.php';

$t = $_GET['t'];

	$ambilParam = mysqli_query($con, "select * from parameter where idParam='1';");
	$cekParam=mysqli_num_rows($ambilParam);
	if ($cekParam > 0) {
		while ($data = mysqli_fetch_array($ambilParam)){
			$angka=$data['param1'];
		}
		$jml=$angka+$t;
		$sql="update parameter set param1='$jml' where idParam='1';";
		$query=mysqli_query($con,$sql);
    		if($query){
    			echo "<script> alert('Transaksi Berhasil');
					window.location='index.php?page=kasir'</script>";
			} else {
				echo "<script> alert('Transaksi Gagal');
					window.location='index.php?page=kasir'</script>";		
			}
	} 	
?>
