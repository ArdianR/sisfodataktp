<?php
include('../../setting/conf.php');
mysql_query("DELETE from berita WHERE id_berita='$_GET[id_berita]'");
header('location:../dashboard.php?hal=berita');
?>