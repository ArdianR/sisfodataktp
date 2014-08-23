<?php
include('../../setting/conf.php');

$kondisi1 ='';
$jml_data = count($kondisi);
$kondisi_dipilih = $_POST['kondisi'];
for ($b=0; $b < count($_POST['kondisi']); $b++) { 
	$kondisi1=$kondisi1.$kondisi_dipilih[$b].',';
}

$kondisi_to_sql=substr(strrev($kondisi1), 1);

$simpan = "INSERT INTO layanan SET 	jenis_layanan= '$_POST[jenis_layanan]',
									kat_layanan  = '$_POST[kat_layanan]',
									syarat_layanan  = '$_POST[syarat_layanan]',
									mekanisme_layanan  = '$_POST[mekanisme_layanan]',
									waktu_layanan  = '$_POST[waktu_layanan]',
									biaya_layanan  = '$_POST[biaya_layanan]',
									tempat_layanan  = '$_POST[tempat_layanan]'
									";

$simpan2 = mysql_query("INSERT INTO layanan VALUES ('$kondisi_to_sql')");

mysql_query($simpan);

header('location:../dashboard.php?hal=xlayanan');

?>