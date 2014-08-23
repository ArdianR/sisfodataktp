<?php 
include "setting/conf.php"; 
$id_berita = $_GET['id_berita'];

$query = mysql_query("select * from berita where id_berita='$id_berita'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<!-- Title bar -->
<div class="pi-section-w pi-shadow-inside-top pi-section-dark">
	<div class="pi-texture" style="background: url(images/hexagon.png) repeat;"></div>
	<div class="pi-section" style="padding: 30px 40px 26px;">
	
		<div class="pi-row">
			<div class="pi-col-sm-4 pi-center-text-xs">
				<h1 class="h2 pi-weight-300 pi-margin-bottom-5"><?php echo $data['judul']; ?></h1>
			</div>
		</div>
		
	</div>
</div>
<!-- End title bar -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb pi-center-text-xs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php?hal=list-berita">Berita</a></li>
				<li><?php echo $data['judul']; ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->