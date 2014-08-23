<?php
include('../../setting/conf.php');

//tangkap data dari form
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$email = $_POST['email'];


//update data di database sesuai user_id
$query = mysql_query("update user set password='$password',  email='$email' where user_id='$user_id'") or die(mysql_error());

if ($query) {
	header('location:../dashboard.php?hal=user');
}
?>