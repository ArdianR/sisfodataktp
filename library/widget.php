<?php 
include "setting/conf.php"; 
$id_set = 1;

$query = mysql_query("select * from setting where id_set='$id_set'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>
<!-- Widget area -->
<div class="pi-section-w pi-border-bottom pi-border-top-light pi-section-dark">
	<div class="pi-section pi-padding-bottom-10">

		<!-- Row -->
		<div class="pi-row">

			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-padding-bottom-30">

				<h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
					<a href="#" class="pi-link-no-style">Sisfopeda</a>
				</h6>

				<!-- Twitter -->
				<div id="pi-footer-tweets">
					<ul class="pi-bullets-circle pi-bullets-base pi-bullets pi-list-big-margins">
						<li>
							<span class="pi-bullet-icon">
								<i class="icon-attach"></i>
							</span>
							<a href="page.php?hal=tentang" target="_blank">
								Tentang Layanan
							</a> 
						</li>
						<li>
							<span class="pi-bullet-icon">
								<i class="icon-attach"></i>
							</span>
							<a href="page.php?hal=tentang" target="_blank">
								Bagi Unsur Pemerintah
							</a> 
						</li>
						<li>
							<span class="pi-bullet-icon">
								<i class="icon-attach"></i>
							</span>
							<a href="page.php?hal=tentang" target="_blank">
								Bagi Unsur Masyarakat
							</a> 
						</li>
					</ul>
				</div>


			</div>
			<!-- End col 4 -->

			<div class="pi-clearfix pi-hidden-lg-only pi-hidden-md-only"></div>

			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-col-sm-6 pi-padding-bottom-30" style="background-image: url('images/ktp/base.png'); background-position: 50% 55px; background-repeat: no-repeat;">

				<h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
					Kontak Kami
				</h6>

				<!-- Contact info -->
				<ul class="pi-list-with-icons pi-list-big-margins">

					<li>
						<span class="pi-bullet-icon"><i class="icon-location"></i></span>
						<strong>Alamat:</strong> <?php echo $data['alamat_set']; ?>
					</li>

					<li>
						<span class="pi-bullet-icon"><i class="icon-phone"></i></span>
						<strong>Telepon:</strong> <?php echo $data['telp_set']; ?>
					</li>

					<li>
						<span class="pi-bullet-icon"><i class="icon-mail"></i></span>
						<strong>Email:</strong> <a href="mailto:<?php echo $data['email_set']; ?>"><?php echo $data['email_set']; ?></a>
					</li>

					

				</ul>
				<!-- End contact info -->

			</div>
			<!-- End col 4 -->

			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-col-sm-6 pi-padding-bottom-30">

				<h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
					Kirim Pesan
				</h6>

				<!-- Contact form -->
				<form role="form" action="handlers/formFooter.php" class="pi-footer-form">
					<div class="pi-error-container"></div>
					<div class="pi-row pi-grid-small-margins">
						<div class="pi-col-2xs-6">
							<div class="form-group">
								<div class="pi-input-with-icon">
									<div class="pi-input-icon"><i class="icon-user"></i></div>
									<input class="form-control form-control-name" id="exampleInputName"
										   placeholder="Name">
								</div>
							</div>
						</div>
						<div class="pi-col-2xs-6">
							<div class="form-group">
								<div class="pi-input-with-icon">
									<div class="pi-input-icon"><i class="icon-mail"></i></div>
									<input type="email" class="form-control form-control-email" id="exampleInputEmail"
										   placeholder="Email">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="pi-input-with-icon">
							<div class="pi-input-icon"><i class="icon-pencil"></i></div>
							<textarea class="form-control form-control-comments" id="exampleInputMessage"
									  placeholder="Message"
									  rows="3"></textarea>
						</div>
					</div>
					<p>
						<button type="submit" class="btn pi-btn-base pi-btn-no-border">Kirim</button>
					</p>
				</form>
				<!-- End contact form -->

			</div>
			<!-- End col 4 -->

		</div>
		<!-- End row -->

	</div>
</div>
<!-- End widget area -->