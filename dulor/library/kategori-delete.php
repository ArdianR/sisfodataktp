<?php
include('../../setting/conf.php');
mysql_query("DELETE from kategori WHERE id_kat='$_GET[id_kat]'");
header('location:../dashboard.php?hal=kategori');
?>