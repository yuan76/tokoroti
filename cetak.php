<?php 
include "koneksi.php";
require_once('dompdf/dompdf_config.inc.php');

$date=date("m/d/Y");
//echo "$date";
												
					$qryData = mysqli_query($con, "SELECT jual.kode as kode,master.nama as nama,sum(jual.qty) as qty,sum(jual.total) as total 
												FROM $db.jual as jual join $db.master as master on jual.kode=master.kode 
												WHERE date(jual.tgl)=date(NOW()) group by jual.kode,master.nama ORDER BY jual.kode ASC;");
					if (mysqli_num_rows($qryData) > 0) {	
							$html =
							'<html><body>'.
							'<h2><center>Laporan Penjualan Harian Bakery Yuan</center></h2>'.
							'<h4><center>Tanggal '.$date.'</center></h4><br>'.
							'<center><table>'.
							'<tr> <td width="150px"> Kode Produk </td> <td width="250px"> Nama Produk </td> <td width="150px"> Quantity </td> <td width="150px"> Total </td> </tr>';								
						while($baris=mysqli_fetch_array($qryData)){		
							$html .=
							'<tr> <td>'.$baris['kode'].'</td> <td>'.$baris['nama'].'</td> <td>'.$baris['qty'].'</td> <td> Rp. '.number_format($baris['total']).'</td> </tr>';								
						}				
						$html .= '</table></center>'.'<br>'.'<br>'.'<br>'.
							'</body></html>';	
					}
						
						
$dompdf= new dompdf();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('Laporan Tanggal '.$date.'.pdf',array("Attachment=>0"));
header("Location:index.php?page=halUtama");
?>