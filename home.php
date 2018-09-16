<?php
include "koneksi.php";
$Qry1 = mysqli_query($con,"select sum(qty) from jual where date(tgl)=date(now())");
$data1 = mysqli_fetch_row($Qry1);
$Qry2 = mysqli_query($con,"select sum(total) from jual where date(tgl)=date(now())");
$data2 = mysqli_fetch_row($Qry2);
$Qry3 = mysqli_query($con,"select sum(qty) from jual where month(tgl)=month(date(now())) and year(tgl)=year(date(now()))");
$data3 = mysqli_fetch_row($Qry3);
$Qry4 = mysqli_query($con,"select sum(total) from jual where month(tgl)=month(date(now())) and year(tgl)=year(date(now()))");
$data4 = mysqli_fetch_row($Qry4);
?>
<section class="content-header">
  <h1>
    Halaman Utama
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <div class="small-box" style="background-color:#48c5a3; color:#FFFFFF">
        <div class="inner" style="text-align:center">
          <h3>
            <?php if (isset($data1[0])) {
              echo $data1[0];
            } else {
              echo "0";
            }
            ?>
			<sup style="font-size: 18px"> Produk</sup>
          </h3>
        </div>
        <div class="small-box-footer">
          Total Penjualan Hari Ini
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box" style="background-color:#af9c8b; color:#FFFFFF">
        <div class="inner" style="text-align:center">
          <h3>
			<sup style="font-size: 18px">Rp. </sup>
		     <?php if (isset($data2[0])) {
              echo $data2[0];
            } else {
              echo "0";
            }
            ?>			
		  </h3>
        </div>
        <div class="small-box-footer">
          Total Penjualan Hari Ini
        </div>
      </div>
    </div>
	<div class="col-lg-3 col-xs-6">
      <div class="small-box" style="background-color:#48c5a3; color:#FFFFFF">
        <div class="inner" style="text-align:center">
          <h3>
            <?php if (isset($data3[0])) {
              echo $data3[0];
            } else {
              echo "0";
            }
            ?>
			<sup style="font-size: 18px"> Produk</sup>
          </h3>
        </div>
        <div class="small-box-footer">
          Total Penjualan Bulan Ini
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box" style="background-color:#af9c8b; color:#FFFFFF">
        <div class="inner" style="text-align:center">
          <h3>
			<sup style="font-size: 18px">Rp. </sup>
		     <?php if (isset($data4[0])) {
              echo $data4[0];
            } else {
              echo "0";
            }
            ?>			
		  </h3>
        </div>
        <div class="small-box-footer">
          Total Penjualan Bulan Ini
        </div>
      </div>
    </div>    
  </div>
</section>
<section class="content">
    Download Laporan Penjualan Hari Ini <a class="btn btn-warning btn-xl" href="cetak.php"><i class="fa fa-print"></i> Cetak Laporan </a>   		  
</section>
