<!-- - - - - - - - - - SECTION - - - - - - - - - -->
	
<div class="pi-section-w pi-section-white piCaptions">
	<div class="pi-section pi-padding-bottom-30">
		
		<h2 class="h4 pi-weight-700 pi-uppercase pi-has-bg pi-letter-spacing pi-margin-bottom-30">
			Galeri
		</h2>
		
		<!-- Portfolio gallery -->
		<div class="pi-row pi-liquid-col-xs-2 pi-liquid-col-sm-3 pi-gallery pi-gallery-small-margins pi-padding-bottom-20">
			
			<!-- Portfolio item -->
			<div class="pi-gallery-item pi-padding-bottom-30">
				<div class="pi-img-w pi-img-round-corners pi-img-shadow">
					<a href="images/ktp/kdw.jpg" class="pi-colorbox">
						<img src="images/ktp/kdw2.jpg" alt="">
						<div class="pi-img-overlay pi-img-overlay-darker">
							<div class="pi-caption-centered">
								<div>
										<span class="pi-caption-icon pi-caption-scale icon-search"></span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<h3 class="h6 pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-5"><a href="#" class="pi-link-dark">Ekspedisi Kendawangan</a></h3>
			</div>
			<!-- End portfolio item -->
			
			<!-- Portfolio item -->
			<div class="pi-gallery-item pi-padding-bottom-30">
				<div class="pi-img-w pi-img-round-corners pi-img-shadow">
					<a href="images/ktp/jawi.jpg" class="pi-colorbox">
						<img src="images/ktp/jawi2.jpg" alt="">
						<div class="pi-img-overlay pi-img-overlay-darker">
							<div class="pi-caption-centered">
								<div>
									<span class="pi-caption-icon pi-caption-scale icon-plus"></span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<h3 class="h6 pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-5"><a href="#" class="pi-link-dark">Pantai Sungai Jawi</a></h3>
				
			</div>
			<!-- End portfolio item -->
			
			<!-- Portfolio item -->
			<div class="pi-gallery-item pi-padding-bottom-30">
				<div class="pi-img-w pi-img-round-corners pi-img-shadow">
					<a href="images/ktp/kelapa.jpg" class="pi-colorbox">
						<img src="images/ktp/kelapa2.jpg" alt="">
						<div class="pi-img-overlay pi-img-overlay-darker">
							<div class="pi-caption-centered">
								<div>
									<span class="pi-caption-icon pi-caption-scale icon-search"></span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<h3 class="h6 pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-5"><a href="#" class="pi-link-dark">Coconut Dragon</a></h3>
				
			</div>
			<!-- End portfolio item -->
			
		</div>
		<!-- End portfolio gallery -->
		
		<!-- Row -->
		<div class="pi-row pi-padding-bottom-20">
			
			<!-- Col 4 -->
			<div class="pi-col-sm-6 pi-col-md-4 pi-padding-bottom-30">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-has-bg pi-letter-spacing pi-margin-bottom-30">
					Berita Terbaru
				</h2>
				
				
				
				<?php
					include "setting/conf.php";

					$query = mysql_query('SELECT * FROM berita ORDER BY id_berita DESC LIMIT 0,2');
					while($output = mysql_fetch_assoc($query))
					{
						echo '<div class="pi-img-w pi-img-round-corners pi-img-shadow pi-img-left" style="width: 75px;">
				';
						echo '<a href="#">';
						echo '<img src="images/pemda.jpg" alt="">';
						echo '<span class="pi-img-overlay pi-img-overlay-white pi-no-padding">';
						echo '</span>';
						echo '</a>';
						echo '</div>';
						echo '<h2 class="h6 pi-weight-600 pi-margin-top-minus-5 pi-margin-bottom-5">';
						echo '<a href="blog.php?hal=lihat&id_berita=';
						echo $output['id_berita'].'" class="pi-link-dark">';
						echo $output['judul'].'</a>';
						echo "</h2>";
						echo '<ul class="pi-meta pi-margin-bottom-10">';
						echo '<li><i class="icon-clock"></i>';
						echo "oleh :" . $output['pengirim'].'</li></ul>';
						echo "<p>";
						echo substr($output['isi'], 0,100);
						echo '</p><p><a href="blog.php?hal=lihat&id_berita=';
						echo $output['id_berita'].'"> Selanjutnya</a></p>';
						echo '<hr class="pi-divider pi-divider-dashed">';
					}
				?>


				
				
				
			</div>
			<!-- End col 4 -->
			
			<!-- Col 4 -->
			<div class="pi-col-sm-6 pi-col-md-4 pi-padding-bottom-30">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-15">
					Tentang Kami
				</h2>
				
				<!-- Accordion -->
				<div class="pi-accordion">
					
					<!-- Accordion item -->
					<div class="pi-accordion-item pi-default-open">
						<h5 class="pi-accordion-title"><a href="#"><span class="pi-accordion-toggle"></span>The PITheme
							Philosophy</a></h5>

						<div class="pi-accordion-content">
							<div>
								<p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo
									vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor sit.</p>
							</div>
						</div>
					</div>
					<!-- End accordion item -->
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title"><a href="#"><span class="pi-accordion-toggle"></span>The PITheme Promise</a>
						</h5>

						<div class="pi-accordion-content">
							<div>
								<p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo
									vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor.</p>
							</div>
						</div>
					</div>
					<!-- End accordion item -->
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title"><a href="#"><span class="pi-accordion-toggle"></span>We Can Deliver On
							Projects</a></h5>

						<div class="pi-accordion-content">
							<div><p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo
								vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor sit.</p></div>
						</div>
					</div>
					<!-- End accordion item -->
					
				</div>
				<!-- End accordion -->
				
			</div>
			<!-- End col 4 -->

			<div class="pi-clearfix pi-visible-sm"></div>

			<!-- Col 4 -->
			<div class="pi-col-sm-6 pi-col-md-4 pi-padding-bottom-30">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-has-bg pi-letter-spacing pi-margin-bottom-30">
					Apa Kata Mereka
				</h2>
				
				<!-- Testimonial -->
				<div class="pi-testimonial pi-testimonial-author-with-photo">
					<div class="pi-testimonial-content pi-testimonial-content-big pi-testimonial-base pi-testimonial-content-quotes">
						<p><a href="#" class="pi-link-white">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius.</a></p>
					</div>
					<div class="pi-testimonial-author pi-clearfix">
						<span class="pi-testimonial-author-photo pi-img-round"><img src="img_external/testimonials/client-photo-1.jpg" alt="" /></span>
						<div>
							<h6 class="pi-weight-700 pi-no-margin-bottom">Brian Kochar</h6>
							<p class="pi-italic pi-no-margin-bottom">Project Manager <a href="#">Company LTD</a></p>
						</div>
					</div>
				</div>
				<!-- End testimonial -->
				
			</div>
			<!-- End col 4 -->
			
		</div>
		<!-- End row -->
		
		<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20">
			Partner
		</h2>
		
		<!-- Logos gallery -->
		<div class="pi-row pi-liquid-col-2xs-2 pi-liquid-col-sm-6 pi-gallery pi-gallery-small-margins pi-column-fix">

			<!-- Logo -->
			<a href="http://indonesia.go.id/" target="_blank">
				<div class="pi-gallery-item">
					<div class="pi-img-w">
						<span class="pi-img-opacity-30">
							<img src="images/partner/1.png" alt="">
						</span>
					</div>
				</div>
			</a>
			<!-- End logo -->
			
			<!-- Logo -->
			<a href="https://www.mpr.go.id/" target="_blank">
				<div class="pi-gallery-item">
					<div class="pi-img-w">
						<span class="pi-img-opacity-30">
							<img src="images/partner/2.png" alt="">
						</span>
					</div>
				</div>
			</a>
			<!-- End logo -->
			
			<!-- Logo -->
			<a href="http://www.dpr.go.id/" target="_blank">
				<div class="pi-gallery-item">
					<div class="pi-img-w">
						<span class="pi-img-opacity-30">
							<img src="images/partner/3.png" alt="">
						</span>
					</div>
				</div>
			</a>
			<!-- End logo -->
			
			<!-- Logo -->
			<a href="http://www.kalbarprov.go.id/" target="_blank">
				<div class="pi-gallery-item">
					<div class="pi-img-w">
						<span class="pi-img-opacity-30">
							<img src="images/partner/4.png" alt="">
						</span>
					</div>
				</div>
			</a>
			<!-- End logo -->
			
			<!-- Logo -->
			<a href="http://ketapangkab.go.id/" target="_blank">
				<div class="pi-gallery-item">
					<div class="pi-img-w">
						<span class="pi-img-opacity-30">
							<img src="images/partner/5.png" alt="">
						</span>
					</div>
				</div>
			</a>
			<!-- End logo -->
			
			<!-- Logo -->
			<a href="http://mediacreativindo.com" target="_blank">
				<div class="pi-gallery-item">
					<div class="pi-img-w">
						<span class="pi-img-opacity-30">
							<img src="images/partner/6.png" alt="">
						</span>
					</div>
				</div>
			</a>
			<!-- End logo -->

		</div>
		<!-- End logos gallery -->
				
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->