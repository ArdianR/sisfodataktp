<?php 
include "../setting/conf.php"; 
$id_kat = $_GET['id_kat'];

$query = mysql_query("select * from kategori where id_kat='$id_kat'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<!-- BEGIN VALIDATION STATES-->
                  <div class="portlet box purple">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Ubah Kategori</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="library/kategori-update.php" method="POST" id="form_sample_1" class="form-horizontal">
                        <input type="hidden" name="id_kat" value="<?php echo $id_kat; ?>" />  
                              <div class="control-group">
                              <label class="control-label">Kategori<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="nama_kat" data-required="1" class="span6 m-wrap" value="<?php echo $data['nama_kat']; ?>"/>
                              </div>
                           </div>
                           
                           
                           <div class="form-actions">
                              <button type="submit" class="btn purple" name="submit" value="Simpan" >Ubah</button>

                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END VALIDATION STATES-->