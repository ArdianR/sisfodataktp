<?php
	include "setting/conf.php";
	include "setting/pagination.php";
	include "setting/fungsi.php";

	error_reporting(0);
	$per_page = 4;        // number of results to show per page
	$result = mysql_query("SELECT * FROM berita ORDER BY id_berita DESC");
	$total_results = mysql_num_rows($result);
	$total_pages = ceil($total_results / $per_page);//total pages we going to have

	//-------------if page is setcheck------------------//
	if (isset($_GET['page'])) {
	    $show_page = $_GET['page'];             //it will telles the current page
	    if ($show_page > 0 && $show_page <= $total_pages) {
	        $start = ($show_page - 1) * $per_page;
	        $end = $start + $per_page;
	    } else {
	        // error - show first set of results
	        $start = 0;              
	        $end = $per_page;
	    }
	} else {
	    // if page isn't set, show first set of results
	    $start = 0;
	    $end = $per_page;
	}
	// display pagination
	$page = intval($_GET['page']);

	$tpages=$total_pages;
	if ($page <= 0)
	    $page = 1;
?>

<div class="pi-col-sm-9">
				
				<!-- Post -->
				

					<?php
            			for ($i = $start; $i < $end; $i++) {
                        // make sure that PHP doesn't try to show results that don't exist
                        if ($i == $total_results) {
                            break;
                        }
                        	echo '<div class="pi-row">';
            				echo '<div class="pi-col-sm-4">';
            				echo '<div class="pi-img-w pi-img-round-corners pi-img-shadow">';
            				echo '<a href="images/pemda.jpg" class="pi-colorbox">';
            				echo '<img src="images/pemda.jpg" alt="">';
            				echo '<div class="pi-img-overlay pi-img-overlay-dark">';
            				echo '<div class="pi-caption-centered"><div>';
            				echo '<span class="pi-caption-icon pi-caption-scale icon-search"></span>';
            				echo "</div></div></div></a></div></div>";

            				echo '<div class="pi-col-sm-8">';
            				echo '<h2 class="h3 pi-margin-top-minus-5">';
            				echo '<a href="';
            				echo 'blog.php?hal=lihat&id_berita='.mysql_result($result, $i, 'id_berita'). '" class="pi-link-dark">';
            				echo mysql_result($result, $i, 'judul') .'</a></h2>';
            				echo '<ul class="pi-meta">';
            				echo '<li><i class="icon-user"></i>Oleh <a href="#">';
            				echo mysql_result($result, $i, 'pengirim').'</a></li></ul>';
            				echo '<p>';
            				echo selengkapnya(mysql_result($result, $i, 'isi'));
            				echo '</p>';
            				echo '<p>';
            				echo '<a href="';
            				echo 'blog.php?hal=lihat&id_berita='.mysql_result($result, $i, 'id_berita');
            				echo '" class="btn pi-btn-base">';
            				echo 'Berita Selengkapnya </a></p>';
            				echo '</div>';
            				echo '</div>';
            				echo '<hr class="pi-divider pi-divider-dashed pi-divider-big">';
            			} 


            			$reload = $_SERVER['PHP_SELF'] . "?hal=list-berita&tpages=" . $tpages;
	                    echo '<center><div class="pi-pagenav pi-padding-bottom-40"><ul>';
	                    if ($total_pages > 1) {
	                        echo paginate($reload, $show_page, $total_pages);
	                    }
	                    echo "</ul></div></center>";
	            	?>
			
				
			</div>