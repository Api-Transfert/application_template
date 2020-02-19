<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                <img src="<?=bs()?>uploads/<?php echo $user_profile->user_img ?>" width="200" alt="">
                              </a>
                              <h1><?php echo $user_profile->username ?></h1>
                              <p><?php echo $user_profile->email ?></p>
                          </div>

                         <ul class="nav nav-pills nav-stacked">
                              <li><a href="<?=bs()?>users/profile"> <i class="fa fa-user"></i> Profile</a></li>
                              <li>
                                <a href="<?=bs()?>users/edit_profile">
                                  <i class="fa fa-edit"></i> Edit profile
                                </a>
                              </li>
                              <li>
                                <a href="<?=bs()?>users/change_avatar">
                                  <i class="fa fa-user"></i> Change Avatar
                                </a>
                              </li>
                              <li class="active">
                                <a href="<?=bs()?>users/change_avatar">
                                  <i class="fa fa-unlock-alt"></i> Change Password
                                </a>
                              </li>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="bio-graph-heading">
                              <i class="fa fa-pencil-square" aria-hidden="true"></i> <b>Edit User Profile</b>
                          </div>
                          <div class="panel-body bio-graph-info">
                            <div class="row">
                              <div class="col-md-5">
                                <?php echo form_open("users/auth/change_password",array("id"=>"change_pass"));?>
                                   
                                   <div class="form-group">
                                      <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                                         
                                            <?php echo form_input($old_password);?>
                                   </div>   

                                   <div class="form-group">
                                      <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />

                                            <?php echo form_input($new_password);?>
                                   </div>        

                                   <div class="form-group">
                                      <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                                      
                                         <?php echo form_input($new_password_confirm);?>
                                   </div>     

                                   <?php echo form_input($user_id);?>
                                   <?php echo form_submit('submit', lang('change_password_submit_btn'),'class="btn btn-toolbar"');?>

                                <?php echo form_close();?>
                              </div>
                              <div class="col-md-5">
                                <!-- <font color="red"><span ></span> <?php echo $message ?></font>  -->
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->