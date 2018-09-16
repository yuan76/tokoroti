<?php
include 'koneksi.php';

$nama = $_GET['nama'];
$harga = $_GET['harga'];

	$cekKode = mysqli_query($con, "select * from master where kode like 'A-%';");
	$tamKode=mysqli_num_rows($cekKode);
	if ($tamKode <= 0) {
		$kode="A-001";
	} else {
		$ambil = mysqli_query($con,"select * from master where idMaster=(select max(idMaster) from master);");	
		while ($data = mysqli_fetch_array($ambil)){
			$kodeLama=$data['kode'];
		}
		$pisahKode=explode("-",$kodeLama);
		$angka=intval($pisahKode[1])+1;
		if ($angka < 10){
			$kode="A-00".$angka;
		} else if ($angka >= 10 && $angka < 100){
			$kode="A-0".$angka;
		} else if ($angka >= 100 && $angka < 1000){
			$kode="A-".$angka;
		}	
	}
	//echo $kode;
	
	$sql = "INSERT INTO `master`(`idMaster`,`kode`,`nama`,`harga`) VALUES (null,'$kode','$nama','$harga')";
	$queryTambah=mysqli_query($con,$sql);
    		if($queryTambah){
    			echo "<script> alert('Data Master berhasil di tambahkan');
					window.location='index.php?page=dataMaster'</script>";
			} else {
				echo "<script> alert('Data Master Gagal di tambahkan');
					window.location='index.php?page=dataMaster'</script>";		
			}
	
?>
