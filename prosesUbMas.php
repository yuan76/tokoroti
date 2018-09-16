<?php
include 'koneksi.php';

$nama = $_GET['nama'];
$harga = $_GET['harga'];
$id = $_GET['id'];
	
	$sql = "update master set nama='$nama', harga='$harga' where idMaster='$id';";
	$queryUbah=mysqli_query($con,$sql);
    		if($queryUbah){
    			echo "<script> alert('Data Master berhasil di ubah');
					window.location='index.php?page=dataMaster'</script>";
			} else {
				echo "<script> alert('Data Master Gagal di ubah');
					window.location='index.php?page=dataMaster'</script>";		
			}

?>
