<?php
include('../../setting/conf.php');

$kondisi1 ='';
$jml_data = count($kondisi);
$kondisi_dipilih = $_POST['kondisi'];
for ($b=0; $b < count($_POST['kondisi']); $b++) { 
	$kondisi1=$kondisi1.$kondisi_dipilih[$b].',';
}

$kondisi_to_sql=substr(strrev($kondisi1), 1);

$simpan = "INSERT INTO berita SET 	judul= '$_POST[judul]',
									isi= '$_POST[isi]',
									pengirim= '$_POST[pengirim]'
									";

$simpan2 = mysql_query("INSERT INTO berita VALUES ('$kondisi_to_sql')");

mysql_query($simpan);

header('location:../dashboard.php?hal=berita');

?>