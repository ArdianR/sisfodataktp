<?php 
include "setting/conf.php"; 
$id_berita = $_GET['id_berita'];

$query = mysql_query("select * from berita where id_berita='$id_berita'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<div class="pi-col-sm-9 pi-padding-bottom-40">

				
				<h2 class="pi-weight-600">
					<?php echo $data['judul']; ?>
				</h2>
				
				<ul class="pi-meta">
					<li><i class="icon-user"></i>Oleh : <a href="#"><?php echo $data['pengirim']; ?></a></li>
				</ul>
				<div style="text-align:justify">
					<?php echo $data['isi']; ?>
				</div>
				<hr class="pi-divider pi-divider-dashed pi-divider-big">
				
				

				<h4 class="pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-20">
					Kotak Komentar
				</h4>
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