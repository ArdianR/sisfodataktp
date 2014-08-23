<center>
	<?php
		include "setting/conf.php";
		$kat_layanan = $_GET['kat_layanan'];
		$query = "SELECT * FROM layanan WHERE kat_layanan='$kat_layanan' ";
	    $hasil = mysql_query($query);
	    while ($qtabel = mysql_fetch_assoc($hasil))
	        {
	        	echo '<div class="pi-col-md-3"><p><a href="layanan.php?hal=detail&id_layanan='.$qtabel['id_layanan'].'" class="btn pi-btn-dark pi-btn-bigger">'.$qtabel['jenis_layanan'].'</a></p></div>';
	        }
	?>
</center>