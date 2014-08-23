<!-- Copyright area -->
<div class="pi-section-w pi-section-header-w pi-section-dark pi-border-top-light pi-border-bottom-strong-base pi-section-header-lg-w">
	<div class="pi-section pi-section-header pi-section-header-lg pi-center-text-2xs pi-clearfix">

		<!-- Social icons -->
		<div class="pi-header-block pi-pull-right pi-hidden-2xs">
			<ul class="pi-social-icons-simple pi-small clearFix">
				<li>
					<a href="<?php
							include "setting/conf.php";
				       		$query = mysql_query("select * from setting");
				      		while ($buff = mysql_fetch_array($query)) 
				        	{ echo $buff['fb_set']; }
		    				?>" class="pi-social-icon-facebook" target="_blank">
						<i class="icon-facebook">
						</i>
					</a>
				</li>
				<li>
					<a href="
						<?php
							include "setting/conf.php";
				       		$query = mysql_query("select * from setting");
				      		while ($buff = mysql_fetch_array($query)) 
				        	{ echo $buff['twitter_set']; }
		    			?>" class="pi-social-icon-twitter" target="_blank">
						<i class="icon-twitter"></i>
					</a>
				</li>
			</ul>
		</div>
		<!-- End social icons -->

		<!-- Footer logo -->
		<div class="pi-header-block pi-header-block-logo pi-header-block-bordered">
			<a href="#">
				<img src="<?php
							include "setting/conf.php";
				       		$query = mysql_query("select * from setting");
				      		while ($buff = mysql_fetch_array($query)) 
				        	{ 
				        		echo $buff['url_set'];
				        		echo $buff['footer_set']; 
				        	}
		    			?>" alt="">
			</a>
		</div>
		<!-- End footer logo -->

		<!-- Text -->
		<span class="pi-header-block pi-header-block-txt pi-hidden-xs">
			<?php
				include "setting/conf.php";
				$query = mysql_query("select * from setting");
				while ($buff = mysql_fetch_array($query)) 
				{ echo $buff['copy_set']; }
		    ?>
		</span>
		<!-- End text -->

	</div>
</div>
<!-- End copyright area -->