<?php 
include "setting/conf.php"; 
$id_layanan = $_GET['id_layanan'];

$query = mysql_query("select * from layanan where id_layanan='$id_layanan'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<hr class="pi-divider-gap-50">		
		
		<h2 class="h4 pi-weight-700 pi-uppercase pi-has-bg pi-margin-bottom-25">
			<?php echo $data['jenis_layanan']; ?>
		</h2>
		
		
		
		<hr class="pi-divider-gap-20">
		
		<!-- Tabs -->
		<div class="pi-tabs-vertical pi-responsive-sm">
			
			<!-- Tabs navigation -->
			<ul class="pi-tabs-navigation pi-tabs-navigation-big" id="myTabs-6">
				<li class="pi-active"><a href="#About-6"><i class="icon-users"></i>Syarat Layanan</a></li>
				<li><a href="#Services-6"><i class="icon-cog"></i>Mekanisme Layanan</a></li>
				<li><a href="#Choose-6"><i class="icon-thumbs-up"></i>Info Lain</a></li>
				<li><a href="#Assets-6"><i class="icon-download"></i>Tempat Layanan</a></li>
			</ul>
			<!-- End tabs navigation -->
			
			<!-- Tabs content -->
			<div class="pi-tabs-content pi-tabs-content-shadow">
				
				<!-- Tabs content item -->
				<div class="pi-tab-pane pi-active" id="About-6">
					<?php echo $data['syarat_layanan']; ?>
				</div>
				<!-- End tabs content item -->
				
				<!-- Tabs content item -->
				<div class="pi-tab-pane" id="Services-6">
					<?php echo $data['mekanisme_layanan']; ?>
				</div>
				<!-- End tabs content item -->
				
				<!-- Tabs content item -->
				<div class="pi-tab-pane" id="Choose-6">
					<div class="pi-row">
						<strong>Jangka Waktu :</strong> <?php echo $data['waktu_layanan']; ?> <br>
						<strong>Tarif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong> <?php echo $data['waktu_layanan']; ?>
					</div>
				</div>
				<!-- End tabs content item -->
				
				<!-- Tabs content item -->
				<div class="pi-tab-pane" id="Assets-6">
					<?php echo $data['tempat_layanan']; ?>
					
				</div>
				<!-- End tabs content item -->
				
			</div>
			<!-- End tabs content -->	
		
		</div>
		<!-- End tabs -->


		<div id="disqus_thread"></div>
					 <script type="text/javascript">
			        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			        var disqus_shortname = 'katakutu'; // required: replace example with your forum shortname

			        /* * * DON'T EDIT BELOW THIS LINE * * */
			        (function() {
			            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			        })();
			    </script>
			    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
			</div>