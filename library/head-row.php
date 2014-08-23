<div class="pi-section pi-section-header pi-section-header-sm pi-clearfix">

		<!-- Phone -->
		<div class="pi-header-block pi-header-block-txt">
			<i class="pi-header-block-icon icon-phone pi-icon-base pi-icon-square"></i>
			Telepon : 
			<strong>
				<?php
					include "setting/conf.php";
		       		$query = mysql_query("select * from setting");
		      		while ($buff = mysql_fetch_array($query)) 
		        	{ echo $buff['telp_set']; }
		    	?>
			</strong>
		</div>
		<!-- End phone -->

		<!-- Email -->
		<div class="pi-header-block pi-header-block-txt pi-hidden-xs"><i
				class="pi-header-block-icon icon-mail pi-icon-base pi-icon-square"></i>
				Email: 
				<a href="#">
					<?php
						include "setting/conf.php";
			       		$query = mysql_query("select * from setting");
			      		while ($buff = mysql_fetch_array($query)) 
			        	{ echo $buff['email_set']; }
		    		?>
				</a>
		</div>
		<!-- End email -->

		<!-- Social icons -->
		<div class="pi-header-block pi-pull-right pi-hidden-2xs">
			<ul class="pi-social-icons pi-stacked pi-jump pi-full-height pi-bordered pi-small pi-colored-bg clearFix">
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
				<li>
					<a href="
						<?php
							include "setting/conf.php";
				       		$query = mysql_query("select * from setting");
				      		while ($buff = mysql_fetch_array($query)) 
				        	{ echo $buff['fb_set']; }
		    			?>" class="pi-social-icon-facebook" target="_blank">
						<i class="icon-facebook"></i>
					</a>
				</li>
			</ul>
		</div>
		<!-- End social icons -->

		<!-- Text -->
		<div class="pi-header-block pi-header-block-txt pi-pull-right pi-hidden-xs">Follow Kami:</div>
		<!-- End text -->

	</div>