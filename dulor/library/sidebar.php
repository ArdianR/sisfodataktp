<?php
	if (isset($_SESSION['level'])) 
	{
		if ($_SESSION['level'] == "administrator") {
			echo '<div class="page-sidebar nav-collapse collapse">';
				echo "<ul>";
					echo "<li>";
						echo '<div class="sidebar-toggler hidden-phone"></div>';
					echo "</li>";

					//dashboard
					echo '<li class="start ">';
						echo '<a href="index.php">';
							echo '<i class="icon-home"></i> ';
							echo '<span class="title">Dashboard</span>';
						echo '</a>';
					echo '</li>';

					//berita
					echo '<li class="has-sub ">';
						echo '<a href="javascript:;">';
							echo '<i class="icon-tasks"></i> ';
							echo '<span class="title">Berita</span>';
							echo '<span class="arrow "></span>';
						echo '</a>';
						echo '<ul class="sub">';
							echo '<li ><a href="dashboard.php?hal=berita">Lihat Berita</a></li>';
							echo '<li ><a href="dashboard.php?hal=tambah-berita">Tambah Berita</a></li>';
						echo '</ul>';
					echo '</li>';

					//layanan
					echo '<li class="has-sub ">';
						echo '<a href="javascript:;">';
							echo '<i class="icon-book"></i> ';
							echo '<span class="title">Layanan</span>';
							echo '<span class="arrow "></span>';
						echo '</a>';
						echo '<ul class="sub">';
							echo '<li ><a href="dashboard.php?hal=xlayanan">Lihat Layanan</a></li>';
							echo '<li ><a href="dashboard.php?hal=tambah-layanan">Tambah Layanan</a></li>';
						echo '</ul>';
					echo '</li>';

					//kategori
					echo '<li class="has-sub ">';
						echo '<a href="javascript:;">';
							echo '<i class="icon-circle-blank"></i> ';
							echo '<span class="title">Kategori</span>';
							echo '<span class="arrow "></span>';
						echo '</a>';
						echo '<ul class="sub">';
							echo '<li ><a href="dashboard.php?hal=kategori">Lihat Kategori</a></li>';
							echo '<li ><a href="dashboard.php?hal=tambah-kategori">Tambah Kategori</a></li>';
						echo '</ul>';
					echo '</li>';

					//pengaturan
					echo '<li class="">';
						echo '<a href="dashboard.php?hal=pengaturan">';
							echo '<i class="icon-cog"></i> ';
							echo '<span class="title">Pengaturan</span>';
						echo '</a>';
					echo '</li>';


					//user
					echo '<li class="">';
						echo '<a href="dashboard.php?hal=user">';
							echo '<i class="icon-user"></i> ';
							echo '<span class="title">User</span>';
						echo '</a>';
					echo '</li>';

					//keluar
					echo '<li class="">';
						echo '<a href="logout.php">';
							echo '<i class="icon-key"></i> ';
							echo '<span class="title">Keluar</span>';
						echo '</a>';
					echo '</li>';



				echo '</ul>';
			echo "</div>";
		} else {
			if ($_SESSION['level'] == "kontributor") 
			{
					echo '<div class="page-sidebar nav-collapse collapse">';
					echo "<ul>";
						echo "<li>";
							echo '<div class="sidebar-toggler hidden-phone"></div>';
						echo "</li>";

						//dashboard
						echo '<li class="start ">';
							echo '<a href="index.php">';
								echo '<i class="icon-home"></i> ';
								echo '<span class="title">Dashboard</span>';
							echo '</a>';
						echo '</li>';

						//berita
						echo '<li class="has-sub ">';
							echo '<a href="javascript:;">';
								echo '<i class="icon-tasks"></i> ';
								echo '<span class="title">Berita</span>';
								echo '<span class="arrow "></span>';
							echo '</a>';
							echo '<ul class="sub">';
								echo '<li ><a href="dashboard.php?hal=berita">Lihat Berita</a></li>';
								echo '<li ><a href="dashboard.php?hal=tambah-berita">Tambah Berita</a></li>';
							echo '</ul>';
						echo '</li>';

						//layanan
						echo '<li class="has-sub ">';
							echo '<a href="javascript:;">';
								echo '<i class="icon-book"></i> ';
								echo '<span class="title">Layanan</span>';
								echo '<span class="arrow "></span>';
							echo '</a>';
							echo '<ul class="sub">';
								echo '<li ><a href="dashboard.php?hal=xlayanan">Lihat Layanan</a></li>';
								echo '<li ><a href="dashboard.php?hal=tambah-layanan">Tambah Layanan</a></li>';
							echo '</ul>';
						echo '</li>';

						//kategori
						echo '<li class="has-sub ">';
							echo '<a href="javascript:;">';
								echo '<i class="icon-circle-blank"></i> ';
								echo '<span class="title">Kategori</span>';
								echo '<span class="arrow "></span>';
							echo '</a>';
							echo '<ul class="sub">';
								echo '<li ><a href="dashboard.php?hal=kategori">Lihat Kategori</a></li>';
								echo '<li ><a href="dashboard.php?hal=tambah-kategori">Tambah Kategori</a></li>';
							echo '</ul>';
						echo '</li>';

						//user
						echo '<li class="">';
							echo '<a href="dashboard.php?hal=ubah-user&user_id=';
							echo $_SESSION['user_id'];
							echo '">';
								echo '<i class="icon-user"></i> ';
								echo '<span class="title">Ubah User</span>';
							echo '</a>';
						echo '</li>';

						//keluar
						echo '<li class="">';
							echo '<a href="logout.php">';
								echo '<i class="icon-key"></i> ';
								echo '<span class="title">Keluar</span>';
							echo '</a>';
						echo '</li>';



					echo '</ul>';
				echo "</div>";
			} 
			
		}
		
	}
?>