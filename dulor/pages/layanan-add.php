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
                                 <form action="library/layanan-insert.php" method="POST" class="form-horizontal form-bordered form-row-stripped">    
                                    <div class="control-group">
                                       <label class="control-label">Jenis Layanan</label>
                                       <div class="controls">
                                          <input type="text" name="jenis_layanan" placeholder="jenis layanan" class="m-wrap span12"/>
                                          <span class="help-inline">Jenis Layanan</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label" >Kategori Layanan</label>
                                          <div class="controls">
                                             <select class="span12 chosen" data-placeholder="Choose a Category" tabindex="1" name="kat_layanan">
                                                <?php
                                                   $query = "select * from kategori";
                                                   $hasil = mysql_query($query);
                                                   while ($qtabel = mysql_fetch_assoc($hasil))
                                                   {
                                                      echo '<option value=""></opotion>';
                                                      echo '<option value="'.$qtabel['nama_kat'].'">'.$qtabel['nama_kat'].'</option>';
                                                     }
                                                ?>
                                             </select>
                                             <span class="help-inline">Kategori Layanan</span>
                                          </div>
                                    </div>


                                    <div class="control-group">
                                       <label class="control-label">Syarat Layanan</label>
                                       <div class="controls">
                                          <textarea class="span12 wysihtml5 m-wrap" rows="6" name="syarat_layanan"></textarea>
                                          <span class="help-inline">Persyaratan Layanan</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Prosedur Layanan</label>
                                       <div class="controls">
                                          <textarea class="span12 ckeditor m-wrap" rows="6" name="mekanisme_layanan"></textarea>
                                          <span class="help-inline">Sistem, Mekanisme dan Prosedur Layanan</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Waktu Layanan</label>
                                       <div class="controls">
                                          <input type="text" name="waktu_layanan" placeholder="5 hari kerja" class="m-wrap span12"/>
                                          <span class="help-inline">Jangka Waktu Penyelesaian</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Biaya Layanan</label>
                                       <div class="controls">
                                          <input type="text" name="biaya_layanan" placeholder="20000" class="m-wrap span12"/>
                                          <span class="help-inline">Biaya / Tarif Layanan</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Tempat Pengurusan Layanan</label>
                                       <div class="controls">
                                          <textarea class="span12 ckeditor m-wrap" rows="6" name="tempat_layanan"></textarea>
                                          <span class="help-inline">Tempat Pengurusan Layanan</span>
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