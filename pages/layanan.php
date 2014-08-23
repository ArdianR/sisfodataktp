<center>
	<?php
		include "setting/conf.php";
		$query = "select * from kategori";
	    $hasil = mysql_query($query);
	    while ($qtabel = mysql_fetch_assoc($hasil))
	        {
	        	echo '<div class="pi-col-md-3"><p><a href="layanan.php?hal=layanan-kategori&kat_layanan='.$qtabel['nama_kat'].'" class="btn pi-btn-dark pi-btn-bigger">'.$qtabel['nama_kat'].'</a></p></div>';
	        }
	?>
</center>