<?php
include('../../setting/conf.php');

$kondisi1 ='';
$jml_data = count($kondisi);
$kondisi_dipilih = $_POST['kondisi'];
for ($b=0; $b < count($_POST['kondisi']); $b++) { 
	$kondisi1=$kondisi1.$kondisi_dipilih[$b].',';
}

$kondisi_to_sql=substr(strrev($kondisi1), 1);

$simpan = "INSERT INTO kategori SET 	nama_kat='$_POST[nama_kat]'
										";

$simpan2 = mysql_query("INSERT INTO kategori VALUES ('$kondisi_to_sql')");

mysql_query($simpan);

header('location:../dashboard.php?hal=kategori');

?>