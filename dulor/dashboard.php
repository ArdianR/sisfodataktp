<?php
include('../setting/cek-login.php');
include('library/header.php');
?>
<!-- BEGIN BODY -->
<body class="fixed-top">
	<?php include "library/nav.php" ?>
	<!-- BEGIN CONTAINER -->	
	<div class="page-container row-fluid">
		<?php include "library/sidebar.php" ?>
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<?php include "../setting/sys-title.php" ?>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<?php include "../setting/system.php" ?>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->	
		</div>
		<!-- END PAGE -->	 	
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
			<?php
				include "../setting/conf.php";
				$query = mysql_query("select * from setting");
				while ($buff = mysql_fetch_array($query)) 
				{ echo $buff['copy_set']; }
		    ?>
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<?php include "library/script.php" ?>
</body>
<!-- END BODY -->
</html>
