<?php
include('../../setting/conf.php');

//tangkap data dari form
$id_berita = $_POST['id_berita'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];


//update data di database sesuai id_berita
$query = mysql_query("update berita set judul='$judul',  isi='$isi' where id_berita='$id_berita'") or die(mysql_error());

if ($query) {
	header('location:../dashboard.php?hal=berita');
}
?>