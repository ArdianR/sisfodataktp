<!-- BEGIN VALIDATION STATES-->
                  <div class="portlet box purple">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Tambah User</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="library/user-insert.php" method="POST" id="form_sample_1" class="form-horizontal">
                           <div class="alert alert-error hide">
                              <button class="close" data-dismiss="alert"></button>
                              Ada beberapa field yang belum diisi
                           </div>
                           <div class="control-group">
                              <label class="control-label">Username<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="name" data-required="1" class="span6 m-wrap"/>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Password<span class="required">*</span></label>
                              <div class="controls">
                                 <input name="password" type="password" class="span6 m-wrap"/>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Nama<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="nama" data-required="1" class="span6 m-wrap"/>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Email<span class="required">*</span></label>
                              <div class="controls">
                                 <input name="email" type="email" class="span6 m-wrap"/>
                              </div>
                           </div>
                           <div class="control-group">
                                       <label class="control-label" >Level</label>
                                          <div class="controls">
                                             <select class="span12 chosen" data-placeholder="Level user" tabindex="1" name="level">
                                                <option value=""></opotion>
                                                <option value="administrator">Administrator</option>
                                                <option value="kontributor">Kontributor</option>
                                             </select>
                                             <span class="help-inline">Nama Pengirim berita</span>
                                          </div>
                                    </div>
                           <div class="form-actions">
                              <button type="submit" class="btn purple" name="submit" value="Simpan" >Tambah</button>

                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END VALIDATION STATES-->