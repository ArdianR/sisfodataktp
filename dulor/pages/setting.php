<?php 
include "../setting/conf.php"; 
$id_set = 1;

$query = mysql_query("select * from setting where id_set='$id_set'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

                           <div class="portlet box blue ">
                              <div class="portlet-title">
                                 <h4><i class="icon-reorder"></i>Manajemen Aplikasi</h4>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="library/setting.php" method="POST" class="form-horizontal form-bordered form-row-stripped">
                                 <input type="hidden" name="id_set" value="<?php echo $id_set; ?>" />    
                                    <div class="control-group">
                                       <label class="control-label">Nama Aplikasi</label>
                                       <div class="controls">
                                          <input type="text" name="nama_set" placeholder="small" class="m-wrap span12" value="<?php echo $data['nama_set']; ?>" />
                                          <span class="help-inline">Nama Aplikasi System</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Alamat Instansi</label>
                                       <div class="controls">
                                          <input type="text" name="alamat_set" placeholder="small" class="m-wrap span12" value="<?php echo $data['alamat_set']; ?>" />
                                          <span class="help-inline">Alamat Instansi</span>
                                       </div>
                                    </div>


                                    <div class="control-group">
                                       <label class="control-label">Telepon</label>
                                       <div class="controls">
                                          <input type="text" name="telp_set" placeholder="medium" class="m-wrap span12" value="<?php echo $data['telp_set']; ?>"/>
                                          <span class="help-inline">Nomer Telepon Instansi</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">E-Mail</label>
                                       <div class="controls">
                                          <input type="text" name="email_set" placeholder="medium" class="m-wrap span12" value="<?php echo $data['email_set']; ?>"/>
                                          <span class="help-inline">Alamat surat elektronik Instansi</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Logo Title</label>
                                       <div class="controls">
                                          <input type="text" name="logo2_set" placeholder="medium" class="m-wrap span12" value="<?php echo $data['logo2_set']; ?>"/>
                                          <span class="help-inline">Nama instansi</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Base URL</label>
                                       <div class="controls">
                                          <input type="text" name="url_set" placeholder="medium" class="m-wrap span12" value="<?php echo $data['url_set']; ?>"/>
                                          <span class="help-inline">Alamat URL Website</span>
                                       </div>
                                    </div>

                                    <div class="control-group">
                                       <label class="control-label">Footer </label>
                                       <div class="controls">
                                          <input type="text" name="copy_set" placeholder="medium" class="m-wrap span12" value="<?php echo $data['copy_set']; ?>"/>
                                          <span class="help-inline">Setting Footer</span>
                                       </div>
                                    </div>
                                    <ul>
                                       <li><h5>Pengaturan Laman Social Media</h5></li>
                                    </ul>
                                    
                                    <div class="control-group">
                                       <label class="control-label">Facebook </label>
                                       <div class="controls">
                                          <input type="text" name="fb_set" placeholder="medium" class="m-wrap span12" value="<?php echo $data['fb_set']; ?>"/>
                                          <span class="help-inline">Laman Facebook Instansi</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Twitter </label>
                                       <div class="controls">
                                          <input type="text" name="twitter_set" placeholder="medium" class="m-wrap span12" value="<?php echo $data['twitter_set']; ?>"/>
                                          <span class="help-inline">Laman Twitter Instansi</span>
                                       </div>
                                    </div>

                                    
                                    <div class="form-actions">
                                       <button type="submit" name="submit" value="Simpan" class="btn blue"><i class="icon-ok"></i> Simpan</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                 <!-- END FORM-->  
                              </div>
                           </div>