<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.php">
				<span>
					ADMINISTRATOR
				</span>	
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="assets/img/avatar1_small.jpg" />
						<span class="username"><?php echo $_SESSION['username']; ?></span>
						<i class="icon-angle-down"></i>
						</a>

						<ul class="dropdown-menu">
							<li><a href="<?php
											include "../setting/conf.php";
								       		$query = mysql_query("select * from setting");
								      		while ($buff = mysql_fetch_array($query)) 
								        	{ 
								        		echo $buff['url_set'];
								        	}
						    			?>
		    			" target="_blank"><i class="icon-home"></i> Homepage</a></li>
							<li><a href="logout.php"><i class="icon-key"></i> Keluar</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->