<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Loign System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Loign System">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="<?=bs('public/assets/fonts/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link type="text/css" href="<?=bs('public/assets/fonts/themify-icons/themify-icons.css')?>" rel="stylesheet">
    <!-- Themify Icons -->
    <link type="text/css" href="<?=bs('public/assets/css/styles.css')?>" rel="stylesheet">
    <!-- Core CSS with all styles -->

    <link type="text/css" href="<?=bs('public/assets/plugins/codeprettifier/prettify.css')?>" rel="stylesheet">
    <!-- Code Prettifier -->
    <link type="text/css" href="<?=bs('public/assets/plugins/iCheck/skins/minimal/blue.css')?>" rel="stylesheet">
    <!-- iCheck -->

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="<?=bs('public/assets/plugins/form-xeditable/bootstrap3-editable/css/bootstrap-editable.css')?>" rel="stylesheet">

    </head>

    <body class="animated-content">
        
        <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		
		<a class="navbar-brand" href="index.html">Avenxo</a>

		<div class="toolbar-icon-bg hidden-xs" id="toolbar-search">
            <div class="input-group">
            	<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-search"></i></button></span>
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-close"></i></button></span>
			</div>
        </div>

	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">

		<li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
			<a href="#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
		</li>
        
		<li class="toolbar-icon-bg hidden-xs">
            <a href="#"><span class="icon-bg"><i class="ti ti-world"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs">
            <a href="#"><span class="icon-bg"><i class="ti ti-view-grid"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-email"></i></span><span
			class="badge badge-deeporange">2</span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="topnav-dropdown-header">
					<span>Messages</span>
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Vincent Keller</strong> <span class="text-gray">‒ Design should be ...</span></h4>
									<span class="notification-time">2 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Frend Pratt</strong> <span class="text-gray">‒ I will start with the ...</span></h4>
									<span class="notification-time">40 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Cynthia Hines</strong> <span class="text-gray">‒ Interior bits are ...</span></h4>
									<span class="notification-time">6 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Robin Horton</strong> <span class="text-gray">‒ Are you even ...</span></h4>
									<span class="notification-time">8 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Amanda Torrez</strong> <span class="text-gray">‒ The message is ...</span></h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Khan Farhan</strong> <span class="text-gray">‒ Expected the stuff ...</span></h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Will Whedon</strong> <span class="text-gray">‒ The movie of this ...</span></h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all messages</a>
				</div>
			</div>
		</li>
		
		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-bell"></i></span><span class="badge badge-deeporange">2</span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="topnav-dropdown-header">
					<span>Notifications</span>
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-success">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.4 successfully pushed</h4>
									<span class="notification-time">8 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-info">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.3 successfully pushed</h4>
									<span class="notification-time">24 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-teal">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.2 successfully pushed</h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-indigo">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.1 successfully pushed</h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-danger">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-arrow-up"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Initial Release 1.0</h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all notifications</a>
				</div>
			</div>
		</li>

		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<img class="img-circle" src="<?= base_url('public/assets/img/img1.jpg') ?>" alt="" />
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li><a href="#/"><i class="ti ti-user"></i><span>Profile</span><span class="badge badge-info pull-right">80%</span></a></li>
				<li><a href="#/"><i class="ti ti-panel"></i><span>Account</span></a></li>
				<li><a href="#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
				<li class="divider"></li>
				<li><a href="#/"><i class="ti ti-stats-up"></i><span>Earnings</span></a></li>
				<li><a href="#/"><i class="ti ti-view-list-alt"></i><span>Statement</span></a></li>
				<li><a href="#/"><i class="ti ti-money"></i><span>Withdrawals</span></a></li>
				<li class="divider"></li>
				<li>
					<a href="<?= base_url('auth/logout') ?>">
           			 	<i class="ti ti-shift-right"></i><span>Sign Out</span>
          			</a>
          		</li>
			</ul>
		</li>

	</ul>

</header>

<!-- Sidebar Starts -->

<div id="wrapper">
    <div id="layout-static">
        <div class="static-sidebar-wrapper sidebar-default">
            <div class="static-sidebar">
                <div class="sidebar">
					<div class="widget">
				        <div class="widget-body">
				            <div class="userinfo">
				                <div class="avatar">
				                    <img src="<?= base_url('public/assets/img/img1.jpg') ?>" class="img-responsive img-circle"> 
				                </div>
				                <div class="info">
				                    <span class="username">
				                        <?php
					    				    $user = $this->ion_auth->user()->row();
								            echo $user->first_name.' '.$user->last_name;
								        ?>
					     	        </span>
				                    <span class="useremail">
				                        <?php
					    				    $user = $this->ion_auth->user()->row();
								            echo $user->email;
								        ?>
								    </span>
				                </div>
				            </div>
				        </div>
    				</div>
					<div class="widget stay-on-collapse" id="widget-sidebar">
				        <nav role="navigation" class="widget-body">
					<ul class="acc-menu">
						<li class="nav-separator"><span>Explore</span></li>
						<li>
							<a href="<?= base_url('users/Auth') ?>">
								<i class="ti ti-home"></i><span>Dashboard</span><span class="badge badge-teal">2</span>
							</a>
						</li>
							
						<li><a href="javascript:;"><i class="ti ti-user"></i><span>Users</span></a>
							<ul class="acc-menu">
							<?php

								$users = group_priviliges();

								foreach ($users as $key => $value): 

								$value;
								",";
								$arr = explode(",",$value);
							?>
								<?php if ($arr[0] == "View Users"): ?>
									
									<li>
										<a href="<?= base_url('users/Users') ?>">
											<i class="ti ti-angle-right"></i> View Users
										</a>
									</li>

								<?php endif ?>

							
							<?php endforeach ?>

							<?php

								$users = group_priviliges();

								foreach ($users as $key => $value): 

								$value;
								",";
								$arr = explode(",",$value);
							?>
								<?php if ($arr[0] == "Add Users"): ?>

									<li>
									  	<a href="<?= base_url('users/Users/create_user') ?>">
									  		<i class="ti ti-angle-right"></i> Add Users
									  	</a>
									</li>

								<?php endif ?>
							
							<?php endforeach ?>	
									
							</ul>
						</li>
						<li><a href="javascript:;"><i class="fa fa-users"></i><span>Groups & Permissions</span></a>
							<ul class="acc-menu">
								<li>
									<a href="<?= base_url('users/User_groups') ?>">
										<i class="ti ti-angle-right"></i> View Groups
									</a>
								</li>
							<?php

								$users = group_priviliges();

								foreach ($users as $key => $value): 

								$value;
								",";
								$arr = explode(",",$value);
							?>
								<?php if ($arr[0] == "Create Groups"): ?>
									
									<li>
										<a href="<?= base_url('users/User_groups/create_group') ?>">
											<i class="ti ti-angle-right"></i> Create Groups
										</a>
									</li>

								<?php endif ?>
							
							<?php endforeach ?>	

							<?php

								$users = group_priviliges();

								foreach ($users as $key => $value): 

								$value;
								",";
								$arr = explode(",",$value);
							?>
								<?php if ($arr[0] == "Permissions"): ?>		

									<li>
										<a href="<?= base_url('users/User_groups/permissions') ?>">
											<i class="ti ti-angle-right"></i> Permissions
										</a>
									</li>

								<?php endif ?>
							
							<?php endforeach ?>		

							</ul>
						</li>

						<?php

								$users = group_priviliges();

								foreach ($users as $key => $value): 

								$value;
								",";
								$arr = explode(",",$value);
							?>
								<?php if ($arr[0] == "Configuration"): ?>	

								<li>
									<a href="<?= base_url('site_config') ?>">
										<i class="ti ti-settings"></i><span>Configuration</span>
									</a>
								</li>
							<?php endif ?>
							
						<?php endforeach ?>	

						<?php

								$users = group_priviliges();

								foreach ($users as $key => $value): 

								$value;
								",";
								$arr = explode(",",$value);
							?>
								<?php if ($arr[0] == "Change Password"): ?>

								<li>
									<a href="<?= base_url('users/Auth/change_password') ?>">
										<i class="fa fa-exchange"></i><span>Change Password</span>
									</a>
								</li>

							<?php endif ?>

						<?php endforeach ?>	

						

						<li><a href="javascript:;"><i class="ti ti-settings"></i><span>Social Login</span></a>
							<ul class="acc-menu">
								<li>
									<a href="<?= base_url('site_config/fb_config') ?>">
										<i class="ti ti-facebook"></i> Facebook Config
									</a>
								</li>
								<li>
									<a href="<?= base_url('site_config/twitter_config') ?>">
										<i class="ti  ti-twitter"></i> Twitter Config
									</a>
								</li>
								<li>
									<a href="<?= base_url('site_config/google_config') ?>">
										<i class="ti  ti-google"></i> Google Config
									</a>
								</li>
								<li>
									<a href="<?= base_url('site_config/insta_config') ?>">
										<i class="ti ti-instagram"></i> Instagram Config
									</a>
								</li>
								<li>
									<a href="<?= base_url('site_config/linkedin_config') ?>">
										<i class="ti ti-linkedin"></i> Linkedin Config
									</a>
								</li>	

							</ul>
						</li>


						<?php

								$users = group_priviliges();

								foreach ($users as $key => $value): 

								$value;
								",";
								$arr = explode(",",$value);
							?>
								<?php if ($arr[0] == "Backup & Export Users"): ?>	
									

								<li>
									<a href="<?= base_url('site_config/backup') ?>">
										<i class="ti ti-server"></i><span>Backup & Export Users</span>
									</a>
								</li>

							<?php endif ?>
							
						<?php endforeach ?>		
								
						<li>
							<a href="<?= base_url('userguide') ?>" target="_blank">
								<i class="ti ti-book"></i><span>Documentation</span>
							</a>
						</li>
						<li class="nav-separator"><span>Extras</span></li>
						
						<li>
							<a href="<?= base_url('login-frontend') ?>" target="_bland">
								<i class="fa fa-television"></i><span>Front End</span>
							</a>
						</li>	
						
						<li>
							<a href="<?= base_url('extras/dashboard') ?>" target="">
								<i class="ti ti-home"></i><span>Dashboard</span>
							</a>
						</li>
						<li><a href="javascript:;"><i class="ti ti-layout"></i><span>Layout</span></a>
							<ul class="acc-menu">
								<li><a href="<?=bs('extras/layout_grids') ?>">Grid Scaffolding</a></li>
								<li><a href="<?=bs('extras/layout_static_leftbar') ?>">Static Sidebar</a></li>
								<!-- <li><a href="<?=bs('extras/layout_sidebar_scroll') ?>">Scroll Sidebar</a></li> -->
								<!-- <li><a href="<?=bs('extras/layout_horizontal') ?>">Horizontal Nav</a></li> -->
								<li><a href="<?=bs('extras/layout_boxed') ?>">Boxed</a></li>
							</ul>
						</li>
						<!-- <li><a href="javascript:;"><i class="ti ti-file"></i><span>Pages</span></a>
							<ul class="acc-menu">
								<li><a href="extras-profile.html">Profile</a></li>
								<li><a href="extras-invoice.html">Invoice</a></li>
								<li><a href="javascript:;">Email Templates</a>
									<ul class="acc-menu">
										<li><a href="responsive-email/basic.html">Basic</a></li>
										<li><a href="responsive-email/hero.html">Hero</a></li>
										<li><a href="responsive-email/sidebar.html">Sidebar</a></li>
										<li><a href="responsive-email/sidebar-hero.html">Sidebar Hero</a></li>
									</ul>
								</li>
								<li><a href="coming-soon.html">Coming Soon</a></li>
								<li><a href="extras-faq.html">FAQ</a></li>
								<li><a href="extras-registration.html">Registration</a></li>
								<li><a href="extras-forgotpassword.html">Password Reset</a></li>
								<li><a href="extras-login.html">Login</a></li>
								<li><a href="extras-404.html">404 Page</a></li>
								<li><a href="extras-500.html">500 Page</a></li>
							</ul>
						</li> -->
						<li><a href="javascript:;"><i class="ti ti-pencil"></i><span>Forms</span></a>
							<ul class="acc-menu">
								<li><a href="<?=bs('extras/ui_forms') ?>">Form Layout</a></li>
								<li><a href="<?=bs('extras/form_components') ?>">Form Components</a></li>
								<li><a href="<?=bs('extras/form_pickers') ?>">Pickers</a></li>
								<li><a href="<?=bs('extras/form_wizard') ?>">Form Wizard</a></li>
								<li><a href="<?=bs('extras/form_validation') ?>">Form Validation</a></li>
								<li><a href="<?=bs('extras/form_masks') ?>">Form Masks</a></li>
								<li><a href="<?=bs('extras/form_dropzone') ?>">Dropzone Uploader</a></li>
								<li><a href="<?=bs('extras/form_summernote') ?>">Summernote</a></li>
								<li><a href="<?=bs('extras/form_markdown') ?>">Markdown Editor</a></li>
								<li><a href="<?=bs('extras/form_xeditable') ?>">Inline Editor</a></li>
								<li><a href="<?=bs('extras/form_gridforms') ?>">Grid Forms</a></li>
							</ul>
						</li>
						<li>
							<a href="<?=bs('extras/buttons') ?>"><i class="fa fa-plus-circle"></i>
								<span>buttons</span></a>
						</li>
						<li>
							<a href="<?=bs('extras/app_inbox') ?>">
								<i class="ti ti-email"></i>
									<span>Inbox</span>
										<span class="badge badge-danger">3</span>
							</a>
						</li>
						<li>
							<a href="<?=bs('extras/login_and_signup') ?>">
								<i class="ti ti-lock"></i>
									<span>Login & SignUp Form</span>
							</a>
						</li>
						<li>
							<a href="<?=bs('LoginRegistrationForm') ?>">
								<i class="ti ti-lock"></i>
									<span>Login & SignUp Form</span>
							</a>
						</li>
					</ul>
				</nav>
				    </div>

				    <div class="widget" id="widget-progress">
				        <div class="widget-heading">
				            Progress
				        </div>
				        <div class="widget-body">

				            <div class="mini-progressbar">
				                <div class="clearfix mb-sm">
				                    <div class="pull-left">Bandwidth</div>
				                    <div class="pull-right">50%</div>
				                </div>
				                
				                <div class="progress">    
				                    <div class="progress-bar progress-bar-lime" style="width: 50%"></div>
				                </div>
				            </div>
				            <div class="mini-progressbar">
				                <div class="clearfix mb-sm">
				                    <div class="pull-left">Storage</div>
				                    <div class="pull-right">25%</div>
				                </div>
				                
				                <div class="progress">    
				                    <div class="progress-bar progress-bar-info" style="width: 25%"></div>
				                </div>
				            </div>

				        </div>
				    </div>
				</div>
            </div>
        </div>

<!-- Sidebar Ends -->


		

                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li><a href="index.html">Home</a></li>
<li><a href="#">Advanced Forms</a></li>
<li class="active"><a href="form-xeditable.html">Inline Editor</a></li>

                            </ol>
                            <div class="container-fluid">
                                
<div class="alert-info alert">
	<h3>X-Editable <small>Inline Editor</small></h3>
	<p>Editable elements can be made in Avenxo using X-Editable. It includes both popup and inline modes. </p>
</div>
<div data-widget-group="group1">
	<div class="row">
		<div class="col-xs-12">
		
			<div class="panel panel-green" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>X-Editable</h2>
					<div class="options">   
						<ul class="nav nav-tabs">
							<li class="active"><a href="#inline" data-toggle="tab">Inline</a></li>
							<li><a href="#popovers" data-toggle="tab">Popover</a></li>
						</ul>
					</div>
				</div>
				<div class="panel-body">
					<div class="tab-content">
		
						<!-- the only difference between the inline and popover styles are the modes set in th demo js -->
		
						<div class="tab-pane active" id="inline">
							<form action="" class="form-horizontal row-border">
								<div class="form-group">
									<label class="col-sm-2 control-label">Simple Text Field</label>
									<div class="col-sm-8">
										<a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Empty text field, required</label>
									<div class="col-sm-8">
										<a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Select, local array, custom display</label>
									<div class="col-sm-8">
										<a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Select, error while loading</label>
									<div class="col-sm-8">
										<a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Combodate</label>
									<div class="col-sm-8">
										<a href="#" id="inline-dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Textarea, buttons below. Submit by <i>ctrl+enter</i></label>
									<div class="col-sm-8">
										<a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="popovers">
							<form action="" class="form-horizontal row-border">
								<div class="form-group">
									<label class="col-sm-2 control-label">Simple Text Field</label>
									<div class="col-sm-8">
										<a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Empty text field, required</label>
									<div class="col-sm-8">
										<a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Select, local array, custom display</label>
									<div class="col-sm-8">
										<a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Select, error while loading</label>
									<div class="col-sm-8">
										<a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Combodate</label>
									<div class="col-sm-8">
										<a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Textarea, buttons below. Submit by <i>ctrl+enter</i></label>
									<div class="col-sm-8">
										<a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2015 Avenxo</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>

    
    <!-- Switcher -->
    <div class="demo-options">
        <div class="demo-options-icon"><i class="ti ti-paint-bucket"></i></div>
        <div class="demo-heading">Demo Settings</div>

        <div class="demo-body">
            <div class="tabular">
                <div class="tabular-row">
                    <div class="tabular-cell">Fixed Header</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Boxed Layout</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Collapse Leftbar</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
            </div>
        </div>

        <div class="demo-body">
            <div class="option-title">Topnav</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span class="demo-cyan"></span></li>
                <li><span class="demo-light-blue"></span></li>
                <li><span class="demo-blue"></span></li>
                <li><span class="demo-indigo"></span></li>
                <li><span class="demo-deep-purple"></span></li> 
                <li><span class="demo-purple"></span></li> 
                <li><span class="demo-pink"></span></li> 
                <li><span class="demo-red"></span></li>
                <li><span class="demo-teal"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-light-green"></span></li>
                <li><span class="demo-lime"></span></li>
                <li><span class="demo-yellow"></span></li>
                <li><span class="demo-amber"></span></li>
                <li><span class="demo-orange"></span></li>               
                <li><span class="demo-deep-orange"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-bluegray"></span></li>
                <li><span class="demo-bluegraylight"></span></li>
                <li><span class="demo-black"></span></li> 
                <li><span class="demo-gray"></span></li> 
                <li><span class="demo-graylight"></span></li> 
                <li><span class="demo-default"></span></li>
                <li><span class="demo-brown"></span></li>
            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Sidebar</div>
            <ul id="demo-sidebar-color" class="demo-color-list">
                <li><span class="demo-cyan"></span></li>
                <li><span class="demo-light-blue"></span></li>
                <li><span class="demo-blue"></span></li>
                <li><span class="demo-indigo"></span></li>
                <li><span class="demo-deep-purple"></span></li> 
                <li><span class="demo-purple"></span></li> 
                <li><span class="demo-pink"></span></li> 
                <li><span class="demo-red"></span></li>
                <li><span class="demo-teal"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-light-green"></span></li>
                <li><span class="demo-lime"></span></li>
                <li><span class="demo-yellow"></span></li>
                <li><span class="demo-amber"></span></li>
                <li><span class="demo-orange"></span></li>               
                <li><span class="demo-deep-orange"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-bluegray"></span></li>
                <li><span class="demo-bluegraylight"></span></li>
                <li><span class="demo-black"></span></li> 
                <li><span class="demo-gray"></span></li> 
                <li><span class="demo-graylight"></span></li> 
                <li><span class="demo-default"></span></li>
                <li><span class="demo-brown"></span></li>
            </ul>
        </div>



    </div>
<!-- /Switcher -->
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="<?=bs('public/assets/js/jquery-1.10.2.min.js ') ?>"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="<?=bs('public/assets/js/jqueryui-1.10.3.min.js') ?>"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="<?=bs('public/assets/js/bootstrap.min.js') ?>"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="<?=bs('public/assets/js/enquire.min.js') ?>"></script> 									<!-- Load Enquire -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/velocityjs/velocity.min.js') ?>"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/velocityjs/velocity.ui.min.js') ?>"></script>

<script type="text/javascript" src="<?=bs('public/assets/plugins/wijets/wijets.js') ?>"></script>     						<!-- Wijet -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/codeprettifier/prettify.js') ?>"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/bootstrap-switch/bootstrap-switch.js') ?>"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') ?>"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/iCheck/icheck.min.js') ?>"></script>     					<!-- iCheck -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js') ?>"></script> <!-- nano scroller -->

<script type="text/javascript" src="<?=bs('public/assets/js/application.js') ?>"></script>
<script type="text/javascript" src="<?=bs('public/assets/demo/demo.js') ?>"></script>
<script type="text/javascript" src="<?=bs('public/assets/demo/demo-switcher.js') ?>"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<script type="text/javascript" src="<?=bs('public/assets/plugins/form-daterangepicker/moment.min.js') ?>"></script>  								<!-- Momen.js for parsing time -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/form-xeditable/bootstrap3-editable/js/bootstrap-editable.js') ?>"></script>  		<!-- XEditable Plugin -->

<script type="text/javascript" src="<?=bs('public/assets/demo/demo-xeditable.js') ?>"></script>

    <!-- End loading page level scripts-->

    </body>
</html>
