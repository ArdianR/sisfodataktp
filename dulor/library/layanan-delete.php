<?php
include('../../setting/conf.php');
mysql_query("DELETE from layanan WHERE id_layanan='$_GET[id_layanan]'");
header('location:../dashboard.php?hal=xlayanan');
?>