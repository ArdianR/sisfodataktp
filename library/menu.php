<div class="pi-header-block pi-pull-right">
<ul class="pi-simple-menu pi-has-hover-border pi-full-height pi-hidden-sm">
<li>
	<a href="index.php">
		<span>Home</span>
	</a>
</li>

<li>
	<a href="blog.php?hal=list-berita">
		<span>Berita</span>
	</a>
	
</li>

<li>
	<a href="layanan.php?hal=layanan">
		<span>Semua Layanan</span>
	</a>
	
</li>

<li class="pi-has-dropdown  "><a href="#"><span>Kategori Layanan</span></a>
	<ul class="pi-submenu pi-has-border pi-items-have-borders pi-has-shadow pi-submenu-dark">
		<?php
			include "setting/conf.php";
			$query = "select * from kategori";
            $hasil = mysql_query($query);
            while ($qtabel = mysql_fetch_assoc($hasil))
                {
                    echo '<li><a href="layanan.php?hal=layanan-kategori&kat_layanan='.$qtabel['nama_kat'].'"><span>'.$qtabel['nama_kat'].'</span></a></li>';
                }
		?>
	</ul>
		
</li>


</ul>
</div>
<!-- End menu -->

<!-- Mobile menu button -->
<div class="pi-header-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only">
	<button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
		<i class="icon-menu pi-text-center"></i>
	</button>
</div>
<!-- End mobile menu button -->


	<!-- Mobile menu -->
	<div id="pi-main-mobile-menu" class="pi-section-menu-mobile-w pi-section-dark">
		<div class="pi-section-menu-mobile">

			<!-- Search form -->
			<form class="form-inline pi-search-form-wide ng-pristine ng-valid" role="form">
				<div class="pi-input-with-icon">
					<div class="pi-input-icon"><i class="icon-search-1"></i></div>
					<input type="text" class="form-control pi-input-wide" placeholder="Search..">
				</div>
			</form>
			<!-- End search form -->

			<ul class="pi-menu-mobile pi-items-have-borders pi-menu-mobile-dark">
				<li class="active"><a href="index.php"><span>Home</span></a></li>
				<li class=""><a href="blog.php?hal=list-berita"><span>Berita</span></a></li>
				<li class=""><a href="layanan.php?hal=layanan"><span>Semua Layanan</span></a></li>
				<li class=""><a href="#"><span>Kategori Layanan</span></a>
				<ul>
					<?php
						include "setting/conf.php";
						$query = "select * from kategori";
			            $hasil = mysql_query($query);
			            while ($qtabel = mysql_fetch_assoc($hasil))
			                {
			                    echo '<li><a href="layanan.php?hal=layanan-kategori&kat_layanan='.$qtabel['nama_kat'].'"><span>'.$qtabel['nama_kat'].'</span></a></li>';
			                }
					?>
				</ul>
			</li>
	
				
			</ul>

		</div>
	</div>