<?php 
	include "library/header.php";
	include "setting/conf.php";
?>
<body>
<div id="pi-all">

<!-- Header -->
<div class="pi-main-header-w">

<!-- Header row -->
<div class="pi-section-w pi-section-header-w pi-section-dark pi-section-header-sm-w">
	<?php include "library/head-row.php" ?>
</div>
<!-- End header row -->

<div class="pi-header-row-sticky-w">
<!-- Header row -->
<div class="pi-section-w pi-section-header-w pi-section-white pi-section-header-lg-w pi-header-row-sticky pi-shadow-bottom">
<div class="pi-section pi-section-header pi-section-header-lg pi-clearfix">

<!-- Logo -->
<div class="pi-header-block pi-header-block-logo">
	<a href="index.php"><img src="<?php
							include "setting/conf.php";
				       		$query = mysql_query("select * from setting");
				      		while ($buff = mysql_fetch_array($query)) 
				        	{ 
				        		echo $buff['url_set'];
				        		echo $buff['logo_set']; 
				        	}
		    			?>" alt=""></a>
</div>
<!-- End logo -->

<!-- Text -->
<div class="pi-header-block pi-header-block-txt pi-hidden-2xs">
	<?php
		include "setting/conf.php";
		$query = mysql_query("select * from setting");
		while ($buff = mysql_fetch_array($query)) 
		{ echo $buff['logo2_set']; }
	?>
</div>
<!-- End text -->

<!-- Menu -->
<?php include "library/menu.php" ?>
<!-- End mobile menu -->

</div>
</div>
<!-- End header row -->
</div>

</div>
<!-- End header -->

<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="tp-banner-container">
<div class="tp-banner pi-revolution-slider" >
	<?php include "library/slider.php" ?>
</div>
</div>

<span class="revolution-slider"></span>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-shadow-inside-top pi-section-dark">
	<div class="pi-texture" style="background: url(images/hexagon.png) repeat;"></div>
	<div class="pi-section pi-padding-top-50 pi-padding-bottom-30">
		<div>
			<center><h3 class="">LAYANAN TERPOPULER</h3></center>
		</div>
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
<?php 
	include "library/layanan.php"; 
	include "library/blog.php";
	include "library/widget.php";
	include "library/copyright.php";
?>
		
</div>
</div>
<div class="pi-scroll-top-arrow" data-scroll-to="0"></div>
<?php include "library/script.php" ?>


</body>
</html>