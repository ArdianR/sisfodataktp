<?php 
include "../setting/conf.php"; 
$id_berita = $_GET['id_berita'];

$query = mysql_query("select * from berita where id_berita='$id_berita'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>
                           <div class="portlet box blue ">
                              <div class="portlet-title">
                                 <h4><i class="icon-reorder"></i>Tambah Layanan</h4>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="library/berita-update.php" method="POST" class="form-horizontal form-bordered form-row-stripped">    
                                 <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>" />  
                         
                                    <div class="control-group">
                                       <label class="control-label">Judul Berita</label>
                                       <div class="controls">
                                          <input type="text" name="judul" placeholder="jenis layanan" class="m-wrap span12" value="<?php echo $data['judul']; ?>"/>
                                          <span class="help-inline">Judul berita</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Isi Berita</label>
                                       <div class="controls">
                                          <textarea class="span12 ckeditor m-wrap" rows="10" name="isi"> <?php echo $data['isi']; ?> </textarea>
                                          <span class="help-inline">Isi berita</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Pengirim</label>
                                       <div class="controls">
                                          <input type="text" name="pengirim" placeholder="jenis layanan" class="m-wrap span12" value="<?php echo $data['pengirim']; ?>" disabled/>
                                          <span class="help-inline">Nama Pengirim berita</span>
                                       </div>
                                    </div>

                                    

                                    <div class="form-actions">
                                       <button type="submit" name="submit" value="Simpan" class="btn blue"><i class="icon-ok"></i> Simpan Layanan</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                 <!-- END FORM-->  
                              </div>
                           </div>