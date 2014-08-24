<?php 
include "../setting/conf.php"; 
$user_id = $_GET['user_id'];

$query = mysql_query("select * from user where user_id='$user_id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<!-- BEGIN VALIDATION STATES-->
                  <div class="portlet box purple">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Ubah User</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="library/user-update2.php" method="POST" id="form_sample_1" class="form-horizontal">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />  
                           <div class="alert alert-error hide">
                              <button class="close" data-dismiss="alert"></button>
                              Ada beberapa field yang belum diisi
                           </div>
                           <div class="control-group">
                              <label class="control-label">Username<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="name" data-required="1" class="span6 m-wrap" value="<?php echo $data['username']; ?>" disabled/>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Password<span class="required">*</span></label>
                              <div class="controls">
                                 <input name="password" type="password" class="span6 m-wrap" value="<?php echo $data['password']; ?>"/>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Nama<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="nama" data-required="1" class="span6 m-wrap" value="<?php echo $data['fullname']; ?>" disabled/>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Email<span class="required">*</span></label>
                              <div class="controls">
                                 <input name="email" type="email" class="span6 m-wrap" value="<?php echo $data['email']; ?>"/>
                              </div>
                           </div>

                           <?php
                              if (isset($_SESSION['level'])) 
                              {
                                 if ($_SESSION['level'] == "administrator") {
                                    echo '<div class="control-group">';
                                    echo '<label class="control-label" >Level</label>';
                                    echo '<div class="controls">';
                                       echo '<select class="span12 chosen" data-placeholder="Level user" tabindex="1" name="level">';
                                          echo '<option value="';
                                          echo $data['level'];
                                          echo '">';
                                          echo $data['level'];
                                          echo '</option>';
                                          echo '<option value="administrator">Administrator</option>';
                                          echo '<option value="kontributor">Kontributor</option>';
                                       echo '</select>';
                                    echo "</div>";

                                    echo '</div>';
                                 } else {
                                    if ($_SESSION['level'] == "kontributor") 
                                    {
                                       echo '<div class="control-group">';
                                          echo '<label class="control-label">Level<span class="required">*</span></label>';
                                          echo '<div class="controls">';
                                          echo '<input type="text" name="level" data-required="1" class="span6 m-wrap" value="';
                                          echo $data['level'];
                                          echo '" disabled/>';
                                          echo '</div>';

                                       echo '</div>';
                                    } 
                                    
                                 }
                                 
                              }
                           ?>
                           <div class="form-actions">
                              <button type="submit" class="btn purple" name="submit" value="Simpan" >Update</button>

                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END VALIDATION STATES-->