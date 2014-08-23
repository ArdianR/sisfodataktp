<?php 
include "../setting/conf.php"; 
$id_layanan = $_GET['id_layanan'];

$query = mysql_query("select * from layanan where id_layanan='$id_layanan'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<div class="span12">
	<center>
		<h3>
			<?php echo $data['jenis_layanan']; ?>
			<hr>
		</h3>
	</center>
</div>
<br><br>
<div class="span3">
	<ul class="ver-inline-menu tabbable margin-bottom-10">
		<li class="active">
			<a data-toggle="tab" href="#tab_1">
				<i class="icon-briefcase"></i>
				Syarat Layanan
			</a> 
			<span class="after"></span>
		</li>
		<li><a data-toggle="tab" href="#tab_2"><i class="icon-group"></i> Mekanisme Layanan</a></li>
		<li><a data-toggle="tab" href="#tab_3"><i class="icon-leaf"></i> Jangka Waktu</a></li>
		<li><a data-toggle="tab" href="#tab_4"><i class="icon-info-sign"></i> Tarif Layanan</a></li>
		<li><a data-toggle="tab" href="#tab_5"><i class="icon-tint"></i> Tempat Layanan</a></li>
	</ul>
</div>
<div class="span8">
	<div class="tab-content">
		<div id="tab_1" class="tab-pane active">
			<div style="height: auto;" id="accordion1" class="accordion collapse">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a href="#collapse_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
							Syarat Layanan - Pembuatan <?php echo $data['jenis_layanan']; ?>
						</a>
					</div>
					<div class="accordion-body collapse in" id="collapse_1">
						<div class="accordion-inner">
							<?php echo $data['syarat_layanan']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="tab_2" class="tab-pane">
			<div style="height: auto;" id="accordion2" class="accordion collapse">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a href="#collapse_2_1" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
							Sistem, Mekanisme dan Prosedur - Pembuatan <?php echo $data['jenis_layanan']; ?>
						</a>
					</div>
					<div class="accordion-body collapse in" id="collapse_2_1">
						<div class="accordion-inner">
							<?php echo $data['mekanisme_layanan']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="tab_3" class="tab-pane">
			<div style="height: auto;" id="accordion3" class="accordion collapse">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a href="#collapse_3_1" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
							Jangka Waktu penyelesaian - Pembuatan <?php echo $data['jenis_layanan']; ?>
						</a>
					</div>
					<div class="accordion-body collapse in" id="collapse_3_1">
						<div class="accordion-inner">
							Jangka Waktu :  <?php echo $data['waktu_layanan']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="tab_4" class="tab-pane">
			<div style="height: auto;" id="accordion3" class="accordion collapse">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a href="#collapse_4_1" data-parent="#accordion4" data-toggle="collapse" class="accordion-toggle collapsed">
							Tarif Layanan - Pembuatan <?php echo $data['jenis_layanan']; ?>
						</a>
					</div>
					<div class="accordion-body collapse in" id="collapse_3_1">
						<div class="accordion-inner">
							Tarif Layanan : Rp. <?php echo $data['biaya_layanan']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="tab_5" class="tab-pane">
			<div style="height: auto;" id="accordion3" class="accordion collapse">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a href="#collapse_5_1" data-parent="#accordion5" data-toggle="collapse" class="accordion-toggle collapsed">
							Tempat - Pembuatan <?php echo $data['jenis_layanan']; ?>
						</a>
					</div>
					<div class="accordion-body collapse in" id="collapse_3_1">
						<div class="accordion-inner">
							<?php echo $data['tempat_layanan']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>