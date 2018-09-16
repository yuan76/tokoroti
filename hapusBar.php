<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "delete from jual where idJual='$id';";
$query=mysqli_query($con,$sql);
	if($query){
		echo "<script> alert('Data berhasil di hapus');
			window.location='index.php?page=kasir'</script>";
	} else {
		echo "<script> alert('Data Gagal di hapus');
			window.location='index.php?page=kasir'</script>";		
	}

?>
