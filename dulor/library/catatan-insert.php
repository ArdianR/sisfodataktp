<?php
include('../../setting/conf.php');

//tangkap data dari form
$id_catatan = $_POST['id_catatan'];
$catatan = $_POST['catatan'];



//update data di database sesuai id_catatan
$query = mysql_query("update catatan set catatan='$catatan' where id_catatan='$id_catatan'") or die(mysql_error());

if ($query) {
	header('location:../dashboard.php?hal=home');
}
?>