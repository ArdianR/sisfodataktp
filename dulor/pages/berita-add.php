<?php 
    include "../setting/conf.php";
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
                                 <form action="library/berita-insert.php" method="POST" class="form-horizontal form-bordered form-row-stripped">    
                                    <div class="control-group">
                                       <label class="control-label">Judul Berita</label>
                                       <div class="controls">
                                          <input type="text" name="judul" placeholder="jenis layanan" class="m-wrap span12"/>
                                          <span class="help-inline">Judul berita</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Isi Berita</label>
                                       <div class="controls">
                                          <textarea class="span12 ckeditor m-wrap" rows="10" name="isi"></textarea>
                                          <span class="help-inline">Isi berita</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label" >Pengirim</label>
                                          <div class="controls">
                                             <select class="span12 chosen" data-placeholder="Nama Pengirim" tabindex="1" name="pengirim">
                                                <?php
                                                   $query = "select * from user";
                                                   $hasil = mysql_query($query);
                                                   while ($qtabel = mysql_fetch_assoc($hasil))
                                                   {
                                                      echo '<option value=""></opotion>';
                                                      echo '<option value="'.$qtabel['fullname'].'">'.$qtabel['fullname'].'</option>';
                                                     }
                                                ?>
                                             </select>
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