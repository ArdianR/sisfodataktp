<?php
include('../../setting/conf.php');
mysql_query("DELETE from user WHERE user_id='$_GET[user_id]'");
header('location:../dashboard.php?hal=user');
?>