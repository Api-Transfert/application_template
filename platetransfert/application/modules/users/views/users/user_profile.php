<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <aside class="profile-nav col-lg-3">
                <section class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="<?php bs() ?>uploads/<?php echo $user_profile->user_img ?>" width="200" alt="">';
                        </a>
                        <h1><?php echo $user_profile->username ?></h1>
                        <p><?php echo $user_profile->email ?></p>
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="<?php bs() ?>users/profile"> <i class="fa fa-user"></i> Profile</a></li>
                        <li>
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
                    <form>
                        <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
                    </form>
                    <footer class="panel-footer">
                        <button class="btn btn-danger pull-right">Post</button>
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-camera"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class=" fa fa-film"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-microphone"></i></a>
                            </li>
                        </ul>
                    </footer>
                </section>
                <section class="panel">
                    <div class="bio-graph-heading">
                        <i class="fa fa-user fa-2x"></i> <b>User Profile</b>
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                            <div class="bio-row">
                                <p><span>First Name </span>: <?php echo $user_profile->first_name ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Last Name </span>: <?php echo $user_profile->last_name ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Country </span>: 
                                <?php 
                                  //ipinfo grabs the ip of the person requesting

                                   $getloc = json_decode(file_get_contents("http://ipinfo.io/"));

                                   $country_code = $getloc->country; //to get city

                                   echo $country_name = get_country_name($country_code);
                                 ?>
                                </p>
                            </div>
                            
                            <div class="bio-row">
                                <p><span>Ip Address </span>: <?php echo $ip = $this->input->ip_address(); ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Email </span>: <?php echo $user_profile->email ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Mobile </span>: <?php echo $user_profile->phone ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Created Date </span>: <?php echo $user_profile->date ?></p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#e06b7d" data-bgColor="#e8e8e8">
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="red">Envato Website</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="63" data-fgColor="#4CC5CD" data-bgColor="#e8e8e8">
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="terques">ThemeForest CMS </h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="75" data-fgColor="#96be4b" data-bgColor="#e8e8e8">
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="green">VectorLab Portfolio</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="50" data-fgColor="#cba4db" data-bgColor="#e8e8e8">
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="purple">Adobe Muse Template</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>

        <!-- page end-->
    </section>
</section>