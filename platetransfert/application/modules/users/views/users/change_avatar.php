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
                        <li class="active">
                          <a href="<?=bs()?>users/change_avatar">
                            <i class="fa fa-user"></i> Change Avatar
                          </a>
                        </li>
                          <li>
                            <a href="<?=bs()?>users/auth/change_password">
                              <i class="fa fa-unlock-alt"></i> Change Password
                            </a>
                          </li>
                    </ul>

                </section>
            </aside>
            <aside class="profile-info col-lg-9">
                <section class="panel">
                    <div class="bio-graph-heading">
                        <i class="fa fa-user" aria-hidden="true"></i> <b>Change Profile Picture</b>
                    </div>
                    <div class="panel-body bio-graph-info">
                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=bs()?>users/update_avatar" role="form">
                            <div class="form-group">
                                <div class="col-lg-6">
                                <?php 
                                    if (empty($user_profile->user_img)) 
                                    {
                                       echo '<img src="<?=bs()?>public/img/user_default.png" width="200" alt="">';
                                    } 
                                    else {
                                ?>        
                                       <img src="<?=bs()?>uploads/<?php echo $user_profile->user_img ?>" width="200" alt="">
                                <?php  
                                    }
                                    
                                 ?>    
                                  <br><br>
                                  <input type="file" name="chang_image">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </aside>
        </div>

        <!-- page end-->
    </section>
</section>
      <!--main content end-->
