<?php
include('../../setting/conf.php');

//tangkap data dari form
$id_set = $_POST['id_set'];
$nama_set = $_POST['nama_set'];
$alamat_set = $_POST['alamat_set'];
$telp_set = $_POST['telp_set'];
$email_set = $_POST['email_set'];
$logo2_set = $_POST['logo2_set'];
$url_set = $_POST['url_set'];
$copy_set = $_POST['copy_set'];
$fb_set = $_POST['fb_set'];
$twitter_set = $_POST['twitter_set'];


//update data di database sesuai user_id
$query = mysql_query("update setting set nama_set='$nama_set', alamat_set='$alamat_set',  telp_set='$telp_set', email_set='$email_set', logo2_set='$logo2_set', url_set='$url_set', copy_set='$copy_set', fb_set='$fb_set', twitter_set='$twitter_set' where id_set='$id_set'") or die(mysql_error());

if ($query) {
	header('location:../dashboard.php?hal=pengaturan');
}
?>