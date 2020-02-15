<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                <img src="<?php bs() ?>uploads/<?php echo $user_profile->user_img ?>" width="200" alt="">
                              </a>
                              <h1><?php echo $user_profile->username ?></h1>
                              <p><?php echo $user_profile->email ?></p>
                          </div>

                         <ul class="nav nav-pills nav-stacked">
                              <li><a href="<?php bs() ?>users/profile"> <i class="fa fa-user"></i> Profile</a></li>
                              <li  class="active">
                                <a href="<?php bs() ?>users/edit_profile"> 
                                  <i class="fa fa-edit"></i> Edit profile
                                </a>
                              </li>
                              <li>
                                <a href="<?php bs() ?>users/change_avatar"> 
                                  <i class="fa fa-user"></i> Change Avatar
                                </a>
                              </li>
                              <li>
                                <a href="<?php bs() ?>users/auth/change_password"> 
                                  <i class="fa fa-unlock-alt"></i> Change Password
                                </a>
                              </li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="bio-graph-heading">
                              <i class="fa fa-pencil-square" aria-hidden="true"></i> <b>Edit User Profile</b>
                          </div>
                          <div class="panel-body bio-graph-info">
                            <form method="post" action="<?php bs() ?>users/edit_profile">
                              <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="<?php echo $user_profile->first_name ?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="<?php echo $user_profile->last_name ?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $user_profile->email ?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Mobiel No</label>
                                <input type="text" class="form-control" name="mobile_no" value="<?php echo $user_profile->phone ?>">
                              </div>
                              <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->