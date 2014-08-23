<?php
	include "setting/conf.php";
	include "fungsi.php";

	$query = mysql_query('SELECT * FROM berita ORDER BY id_berita DESC LIMIT 0,2');
		while($output = mysql_fetch_assoc($query))
		{
		   echo $output['judul'].'<br />';
		   echo selengkapnya($output['isi']).'<br / >';
		   echo "Pengirim :".$output['pengirim'].'<br / >';
		   echo date('Y', $output['tanggal']).'<br / >';
		    echo '<hr />';
		}

?>