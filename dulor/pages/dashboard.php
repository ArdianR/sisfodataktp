<?php
	if (isset($_SESSION['level'])) 
	{
		if ($_SESSION['level'] == "administrator") {
			echo '<div class="tiles">';
			
			//dashboard
			include "../setting/conf.php";
			$query = mysql_query("select * from setting");
			while ($buff = mysql_fetch_array($query)) 
			{ 
			echo '<a href="';
			echo $buff['url_set'];
			}
			echo '">';
				echo '<div class="tile double-down bg-blue">';
					echo '<div class="tile-body">';
						echo '<i class="icon-home"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Homepage';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//lihat berita
			echo '<a href="dashboard.php?hal=berita">';
				echo '<div class="tile bg-green">';
					echo '<div class="tile-body">';
						echo '<i class="icon-tasks"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Lihat Berita';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//pengaturan
			echo '<a href="dashboard.php?hal=pengaturan">';
				echo '<div class="tile double selected bg-blue">';
					echo '<div class="tile-body">';
						echo '<i class="icon-cog"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Pengaturan';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//user
			echo '<a href="dashboard.php?hal=user">';
				echo '<div class="tile selected bg-red">';
					echo '<div class="tile-body">';
						echo '<i class="icon-user"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'User';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//tambah kategori
			echo '<a href="dashboard.php?hal=tambah-kategori">';
				echo '<div class="tile double selected bg-purple">';
					echo '<div class="tile-body">';
						echo '<i class="icon-circle-blank"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Tambah Kategori';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//tambah berita
			echo '<a href="dashboard.php?hal=tambah-berita">';
				echo '<div class="tile bg-yellow">';
					echo '<div class="tile-body">';
						echo '<i class="icon-tasks"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Tambah Berita';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//lihat layanan
			echo '<a href="dashboard.php?hal=xlayanan">';
				echo '<div class="tile bg-grey">';
					echo '<div class="tile-body">';
						echo '<i class="icon-book"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Lihat Layanan';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//tambah layanan
			echo '<a href="dashboard.php?hal=tambah-layanan">';
				echo '<div class="tile bg-green">';
					echo '<div class="tile-body">';
						echo '<i class="icon-book"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Tambah Layanan';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//lihat kategori
			echo '<a href="dashboard.php?hal=kategori">';
				echo '<div class="tile double selected bg-grey">';
					echo '<div class="tile-body">';
						echo '<i class="icon-circle-blank"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Lihat Kategori';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';

			//logout
			echo '<a href="logout.php">';
				echo '<div class="tile bg-blue">';
					echo '<div class="tile-body">';
						echo '<i class="icon-key"></i>';
					echo '</div>';
					echo '<div class="tile-object">';
						echo '<div class="name">';
							echo 'Keluar';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';





			echo '</div>';
		} else {
			if ($_SESSION['level'] == "kontributor") 
			{
				echo '<div class="tiles">';
			
				//dashboard
				include "../setting/conf.php";
				$query = mysql_query("select * from setting");
				while ($buff = mysql_fetch_array($query)) 
				{ 
				echo '<a href="';
				echo $buff['url_set'];
				}
				echo '">';
					echo '<div class="tile double-down bg-blue">';
						echo '<div class="tile-body">';
							echo '<i class="icon-home"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Homepage';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//lihat berita
				echo '<a href="dashboard.php?hal=berita">';
					echo '<div class="tile bg-green">';
						echo '<div class="tile-body">';
							echo '<i class="icon-tasks"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Lihat Berita';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//pengaturan
				echo '<a href="#">';
					echo '<div class="tile double selected bg-blue">';
						echo '<div class="tile-body">';
							echo '<i class="icon-cog"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Pengaturan';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//user
				echo '<a href="dashboard.php?hal=ubah-user&user_id=';
							echo $_SESSION['user_id'];
							echo '">';
					echo '<div class="tile selected bg-red">';
						echo '<div class="tile-body">';
							echo '<i class="icon-user"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'User';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//tambah kategori
				echo '<a href="dashboard.php?hal=tambah-kategori">';
					echo '<div class="tile double selected bg-purple">';
						echo '<div class="tile-body">';
							echo '<i class="icon-circle-blank"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Tambah Kategori';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//tambah berita
				echo '<a href="dashboard.php?hal=tambah-berita">';
					echo '<div class="tile bg-yellow">';
						echo '<div class="tile-body">';
							echo '<i class="icon-tasks"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Tambah Berita';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//lihat layanan
				echo '<a href="dashboard.php?hal=xlayanan">';
					echo '<div class="tile bg-grey">';
						echo '<div class="tile-body">';
							echo '<i class="icon-book"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Lihat Layanan';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//tambah layanan
				echo '<a href="dashboard.php?hal=tambah-layanan">';
					echo '<div class="tile bg-green">';
						echo '<div class="tile-body">';
							echo '<i class="icon-book"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Tambah Layanan';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//lihat kategori
				echo '<a href="dashboard.php?hal=kategori">';
					echo '<div class="tile double selected bg-grey">';
						echo '<div class="tile-body">';
							echo '<i class="icon-circle-blank"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Lihat Kategori';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				//logout
				echo '<a href="logout.php">';
					echo '<div class="tile bg-blue">';
						echo '<div class="tile-body">';
							echo '<i class="icon-key"></i>';
						echo '</div>';
						echo '<div class="tile-object">';
							echo '<div class="name">';
								echo 'Keluar';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';





				echo '</div>';
			} 
			
		}
		
	}
?>
<br><br>
<hr>
<?php 
include "../setting/conf.php"; 
$id_catatan = 1;

$query = mysql_query("select * from catatan where id_catatan='$id_catatan'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>
                           <div class="portlet box blue ">
                              <div class="portlet-title">
                                 <h4><i class="icon-reorder"></i>Admin Notes</h4>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="library/catatan-insert.php" method="POST" class="form-horizontal form-bordered form-row-stripped">    
                                  <input type="hidden" name="id_catatan" value="<?php echo $id_catatan; ?>" />    
                                 
                                    <div class="control-group">
                                       <label class="control-label">Catatan</label>
                                       <div class="controls">
                                          <textarea class="span12 wysihtml5 m-wrap" rows="6" name="catatan"><?php echo $data['catatan']; ?></textarea>
                                       </div>
                                    </div>  
                                    <div class="form-actions">
                                       <button type="submit" name="submit" value="Simpan" class="btn blue"><i class="icon-ok"></i> Simpan Catatan</button>
                                    </div>
                                 </form>
                                 <!-- END FORM-->  
                              </div>
                           </div>