<?php
include('../../setting/conf.php');

//tangkap data dari form
$id_kat = $_POST['id_kat'];
$nama_kat = $_POST['nama_kat'];



//update data di database sesuai user_id
$query = mysql_query("update kategori set nama_kat='$nama_kat' where id_kat='$id_kat'") or die(mysql_error());

if ($query) {
	header('location:../dashboard.php?hal=kategori');
}
?>