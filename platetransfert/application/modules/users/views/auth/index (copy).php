<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <!-- <link type="text/css" href="<?= base_url('public/assets/fonts/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> -->        
    <!-- Font Awesome --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" href="<?= base_url('public/assets/fonts/themify-icons/themify-icons.css')?>" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="<?= base_url('public/assets/css/styles.css')?>" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="<?= base_url('public/assets/plugins/codeprettifier/prettify.css')?>" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="<?= base_url('public/assets/plugins/iCheck/skins/minimal/blue.css')?>" rel="stylesheet">              <!-- iCheck -->


	<link type="text/css" href="<?= base_url('public/assets/plugins/fullcalendar/fullcalendar.css')?>" rel="stylesheet"> 						<!-- FullCalendar -->
	<link type="text/css" href="<?= base_url('public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')?>" rel="stylesheet"> 			<!-- jVectorMap -->
	<link type="text/css" href="<?= base_url('public/assets/plugins/switchery/switchery.css')?>" rel="stylesheet">   							<!-- Switchery -->

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link type="text/css" href="<?= base_url('public/assets/plugins/datatables/dataTables.bootstrap.css')?>" rel="stylesheet">                    <!-- Bootstrap Support for Datatables -->
	<link type="text/css" href="<?= base_url('public/assets/plugins/datatables/dataTables.themify.css')?>" rel="stylesheet">                  <!-- FontAwesome Support for Datatables -->
	<link type="text/css" href="<?= base_url('public/assets/plugins/tables-fixedheader/css/dataTables.fixedHeader.min.css')?>" rel="stylesheet">  <!-- FixedHeader CSS -->

	<style>
	.noty-color
	{
		background-color: #8bc34a;
		color: white;
	}
		
	</style>

    </head>

    <body class="animated-content">
        
    <!-- Header Starts -->

        <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		
		<a class="navbar-brand" href="">Salman Iqbal</a>

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
									<img class="img-circle avatar" src="<?=bs('public/assets/img/profile2.jpg') ?>" alt="" />
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
									<img class="img-circle avatar" src="<?=bs('public/assets/img/profile3.jpg') ?>" alt="" />
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
									<img class="img-circle avatar" src="<?=bs('public/assets/img/profile4.jpg') ?>" alt="" />
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
									<img class="img-circle avatar" src="<?=bs('public/assets/img/profile3.jpg') ?>" alt="" />
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
									<img class="img-circle avatar" src="<?=bs('public/assets/img/profile2.jpg') ?>" alt="" />
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
									<img class="img-circle avatar" src="<?=bs('public/assets/img/profile4.jpg') ?>" alt="" />
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
									<img class="img-circle avatar" src="<?=bs('public/assets/img/profile3.jpg') ?>" alt="" />
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

  <!-- Header Ends -->

	<?php

		    // If User Is Admin
			if ($this->ion_auth->get_user_group('group_id')  == 1) 
			{
		?>
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
		<li><a href="<?= base_url('Auth') ?>"><i class="ti ti-home"></i><span>Dashboard</span><span class="badge badge-teal">2</span></a></li>
		<li><a href="javascript:;"><i class="ti ti-user"></i><span>Users</span></a>
			<ul class="acc-menu">
				<li>
					<a href="<?= base_url('Users') ?>">
						<i class="ti ti-angle-right"></i> View Users
					</a>
				</li>
				<li>
				  	<a href="<?= base_url('Users/create_user') ?>">
				  		<i class="ti ti-angle-right"></i> Add Users
				  	</a>
				</li>	
			</ul>
		</li>
		<li><a href="javascript:;"><i class="fa fa-users"></i><span>Groups & Permissions</span></a>
			<ul class="acc-menu">
				<li>
					<a href="<?= base_url('User_groups') ?>">
						<i class="ti ti-angle-right"></i> View Groups
					</a>
				</li>
				<li>
					<a href="<?= base_url('User_groups/create_group') ?>">
						<i class="ti ti-angle-right"></i> Create Groups
					</a>
				</li>	
				<li>
					<a href="<?= base_url('User_groups/permissions') ?>">
						<i class="ti ti-angle-right"></i> Permissions
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="<?= base_url('Site_config') ?>">
				<i class="ti ti-settings"></i><span>Configuration</span>
			</a>
		</li>
		<li>
			<a href="<?= base_url('Auth/change_password') ?>">
				<i class="fa fa-exchange"></i><span>Change Password</span>
			</a>
		</li>
		<li><a href="javascript:;"><i class="ti ti-settings"></i><span>Social Login</span></a>
			<ul class="acc-menu">
				<li>
					<a href="<?= base_url('Site_config/fb_config') ?>">
						<i class="ti ti-facebook"></i> Facebook Config
					</a>
				</li>
				<li>
					<a href="<?= base_url('Site_config/twitter_config') ?>">
						<i class="ti  ti-twitter"></i> Twitter Config
					</a>
				</li>
				<li>
					<a href="<?= base_url('Site_config/google_config') ?>">
						<i class="ti  ti-google"></i> Google Config
					</a>
				</li>
				<li>
					<a href="<?= base_url('Site_config/insta_config') ?>">
						<i class="ti ti-instagram"></i> Instagram Config
					</a>
				</li>
				<li>
					<a href="<?= base_url('Site_config/linkedin_config') ?>">
						<i class="ti ti-linkedin"></i> Linkedin Config
					</a>
				</li>	

			</ul>
		</li>
		<li>
			<a href="<?= base_url('Site_config/backup') ?>">
				<i class="ti ti-server"></i><span>Backup & Export Users</span>
			</a>
		</li>
		<li>
			<a href="<?= base_url('userguide') ?>" target="_blank"" target="_blank">
				<i class="ti ti-book"></i><span>Documentation</span>
			</a>
		</li>
		<li class="nav-separator"><span>Extras</span></li>
		<li><a href="javascript:;"><i class="ti ti-layout"></i><span>Layout</span></a>
			<ul class="acc-menu">
				<li><a href="<?=bs('Extras/layout_grids') ?>">Grid Scaffolding</a></li>
				<li><a href="<?=bs('Extras/layout_static_leftbar') ?>">Static Sidebar</a></li>
				<!-- <li><a href="<?=bs('Extras/layout_sidebar_scroll') ?>">Scroll Sidebar</a></li> -->
				<!-- <li><a href="<?=bs('Extras/layout_horizontal') ?>">Horizontal Nav</a></li> -->
				<li><a href="<?=bs('Extras/layout_boxed') ?>">Boxed</a></li>	
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
				<li><a href="<?=bs('Extras/ui_forms') ?>">Form Layout</a></li>
				<li><a href="<?=bs('Extras/form_components') ?>">Form Components</a></li>
				<li><a href="<?=bs('Extras/form_pickers') ?>">Pickers</a></li>
				<li><a href="<?=bs('Extras/form_wizard') ?>">Form Wizard</a></li>
				<li><a href="<?=bs('Extras/form_validation') ?>">Form Validation</a></li>
				<li><a href="<?=bs('Extras/form_masks') ?>">Form Masks</a></li>
				<li><a href="<?=bs('Extras/form_dropzone') ?>">Dropzone Uploader</a></li>
				<li><a href="<?=bs('Extras/form_summernote') ?>">Summernote</a></li>
				<li><a href="<?=bs('Extras/form_markdown') ?>">Markdown Editor</a></li>
				<li><a href="<?=bs('Extras/form_xeditable') ?>">Inline Editor</a></li>
				<li><a href="<?=bs('Extras/form_gridforms') ?>">Grid Forms</a></li>
			</ul>
		</li>
		<li>
			<a href="<?=bs('Extras/buttons') ?>"><i class="fa fa-plus-circle"></i>
				<span>buttons</span></a>
		</li>
		<li><a href="<?=bs('Extras/app_inbox') ?>"><i class="ti ti-email"></i><span>Inbox</span><span class="badge badge-danger">3</span></a></li>
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


		<?php
		  }
		   if ($this->ion_auth->get_user_group()  == 2) 
		   {
		?>
			
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
		<li><a href="<?= base_url('Auth') ?>"><i class="ti ti-home"></i><span>Dashboard</span><span class="badge badge-teal">2</span></a></li>
		<li><a href="javascript:;"><i class="ti ti-user"></i><span>Users</span></a>
			<ul class="acc-menu">
				<li>
					<a href="<?= base_url('Users') ?>">
						<i class="ti ti-angle-right"></i> View Users
					</a>
				</li>
			</ul>
		</li>
		<li><a href="javascript:;"><i class="fa fa-users"></i><span>Groups & Permissions</span></a>
			<ul class="acc-menu">
				<li>
					<a href="<?= base_url('User_groups') ?>">
						<i class="ti ti-angle-right"></i> View Groups
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="<?= base_url('Auth/change_password') ?>">
				<i class="fa fa-exchange"></i><span>Change Password</span>
			</a>
		</li>
		<li><a href="javascript:;"><i class="ti ti-settings"></i><span>Social Login</span></a>
			<ul class="acc-menu">
				<li>
					<a href="<?= base_url('Site_config/fb_config') ?>">
						<i class="ti ti-facebook"></i> Facebook Config
					</a>
				</li>
				<li>
					<a href="<?= base_url('Site_config/twitter_config') ?>">
						<i class="ti  ti-twitter"></i> Twitter Config
					</a>
				</li>
				<li>
					<a href="<?= base_url('Site_config/google_config') ?>">
						<i class="ti  ti-google"></i> Google Config
					</a>
				</li>
				<li>
					<a href="<?= base_url('Site_config/insta_config') ?>">
						<i class="ti ti-instagram"></i> Instagram Config
					</a>
				</li>
				<li>
					<a href="<?= base_url('Site_config/linkedin_config') ?>">
						<i class="ti ti-linkedin"></i> Linkedin Config
					</a>
				</li>	

			</ul>
		</li>
		<li>
			<a href="<?= base_url('userguide') ?>">
				<i class="ti ti-book"></i><span>Documentation</span>
			</a>
		</li>
		<li class="nav-separator"><span>Extras</span></li>
		<li><a href="javascript:;"><i class="ti ti-layout"></i><span>Layout</span></a>
			<ul class="acc-menu">
				<li><a href="<?=bs('Extras/layout_grids') ?>">Grid Scaffolding</a></li>
				<li><a href="<?=bs('Extras/layout_static_leftbar') ?>">Static Sidebar</a></li>
				<!-- <li><a href="<?=bs('Extras/layout_sidebar_scroll') ?>">Scroll Sidebar</a></li> -->
				<!-- <li><a href="<?=bs('Extras/layout_horizontal') ?>">Horizontal Nav</a></li> -->
				<li><a href="<?=bs('Extras/layout_boxed') ?>">Boxed</a></li>	
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
				<li><a href="<?=bs('Extras/ui_forms') ?>">Form Layout</a></li>
				<li><a href="<?=bs('Extras/form_components') ?>">Form Components</a></li>
				<li><a href="<?=bs('Extras/form_pickers') ?>">Pickers</a></li>
				<li><a href="<?=bs('Extras/form_wizard') ?>">Form Wizard</a></li>
				<li><a href="<?=bs('Extras/form_validation') ?>">Form Validation</a></li>
				<li><a href="<?=bs('Extras/form_masks') ?>">Form Masks</a></li>
				<li><a href="<?=bs('Extras/form_dropzone') ?>">Dropzone Uploader</a></li>
				<li><a href="<?=bs('Extras/form_summernote') ?>">Summernote</a></li>
				<li><a href="<?=bs('Extras/form_markdown') ?>">Markdown Editor</a></li>
				<li><a href="<?=bs('Extras/form_xeditable') ?>">Inline Editor</a></li>
				<li><a href="<?=bs('Extras/form_gridforms') ?>">Grid Forms</a></li>
			</ul>
		</li>
		<li>
			<a href="<?=bs('Extras/buttons') ?>"><i class="fa fa-plus-circle"></i>
				<span>buttons</span></a>
		</li>
		<li><a href="<?=bs('Extras/app_inbox') ?>"><i class="ti ti-email"></i><span>Inbox</span><span class="badge badge-danger">3</span></a></li>
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

		<?php     	
		   }
 		?>

                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li class=""><a href="">Home</a></li>
<li class="active"><a href="">Dashboard</a></li>

                            </ol>
                            <div class="container-fluid">
                                

<div class="row">
	<div class="col-md-3">
		<div class="info-tile tile-orange">
			<div class="tile-icon"><i class="fa fa-users"></i></div>
			<div class="tile-heading"><span>Users</span></div>
			<div class="tile-body">
				<span>
			  		<?php 
			  			echo $total_users;
					?>
				</span>
			</div>
			<div class="tile-footer"><span class="text-success">
			    <?php 
			  		echo $total = $total_users*$total_users/100;;
				?>
			<i class="fa fa-level-up"></i></span></div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="info-tile tile-orange">
			<div class="tile-icon"><i class="ti ti-user"></i></div>
			<div class="tile-heading"><span>Today Users</span></div>
			<div class="tile-body">
			 	<span>
			  		<?= $today_users ?>
				</span>
			</div>
			<div class="tile-footer"><span class="text-success"><?= $today = $today_users*$today_users/100 ?> <i class="fa fa-level-up"></i></span></div>
		</div>
	</div>

		<!-- This is script is for count page visitor  -->
		<?php
		       
		   $counter_name = "counter.txt";
		   
		   // Check if a text file exists. If not create one and initialize it to zero.
		   if (!file_exists($counter_name)) 
		    {
		      $f = fopen($counter_name, "w");
		  	  fwrite($f,"0");
		      fclose($f);
		    }
		   
		   // Read the current value of our counter file
		   $f = fopen($counter_name,"r");
		   $counterVal = fread($f, filesize($counter_name));
		   fclose($f);

		   // If not, increase counter value by one
		   if(!isset($_SESSION['hasVisited']))
		   {
		   	 $_SESSION['hasVisited']="yes";
		   	 $counterVal++;
		     $f = fopen($counter_name, "w");
		     fwrite($f, $counterVal);
		     fclose($f); 
		   }
		?>	
	<div class="col-md-3">
		<div class="info-tile tile-danger">
			<div class="tile-icon"><i class="ti ti-bar-chart-alt"></i></div>
			<div class="tile-heading"><span>Visitors</span></div>
			<div class="tile-body"><span><?= $counterVal ?></span></div>
			<div class="tile-footer">
				<span class="text-danger">
			 		<i class="fa fa-level-down">
			 			<?php 
			 			   $counter = $counterVal*$counterVal/100;
			 			   echo $counter.' %';
			 			?>
			 		</i>
			 	</span>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="info-tile tile-danger">
			<div class="tile-icon"><i class="fa fa-user-circle"></i></div>
			<div class="tile-heading"><span>This Week Users</span></div>
			<div class="tile-body"><span><?= $weekly ?></span></div>
			<div class="tile-footer">
				<span class="text-danger">
			 		<i class="fa fa-level-down">
			 			<?php 
			 			   $counter = $weekly*$weekly/100;
			 			   echo $counter.' %';
			 			?>
			 		</i>
			 	</span>
			</div>
		</div>
	</div>
</div>     
<div data-widget-group="group1">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>New Users</h2>
					<div class="panel-ctrls"></div>
					<!-- <a href="<?=bs('Users/print_users') ?>">
						<i class="fa fa-print" style="padding-left: 1%;color: black"></i>
					</a> -->
				</div>
				<div class="panel-body no-padding">
					<div id="demo">
						<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-fixed-header m-n" id="">
							<thead>
								<tr>
									<th>User Name</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($all_users as $user):?>
									<tr>
										<td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
							            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
							            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
							            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?>
							            </td>
									</tr>
								<?php endforeach;?>
								
							</tbody>
							<tfoot>
								<tr>
									<th>User Name</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>


			<?php 
				if ($this->ion_auth->get_user_group() == 1) 
				{
			?>

	<div class="alert-info alert">
		<h1><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <b>Static stuff</b></h1>
		We don't have any connection to the database on the examples below, all values are hard-coded. As more new features are added we will modify this page - your suggestions are appreciated as always.		
	</div>		

<div data-widget-group="group1">
	<div class="row">
		<div class="col-md-3">
			<div class="info-tile info-tile-alt tile-warning">
				<div class="tile-icon"><i class="ti ti-eye"></i></div>
				<div class="tile-heading"><span>Page Views</span></div>
				<div class="tile-body"><span>1600</span></div>
				<div class="tile-footer"><span class="text-danger">-7.6%</span></div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile info-tile-alt tile-success">
				<div class="tile-icon"><i class="ti ti-thumb-up"></i></div>
				<div class="tile-heading"><span>Likes</span></div>
				<div class="tile-body"><span>345</span></div>
				<div class="tile-footer"><span class="text-success">+15.4%</span></div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile info-tile-alt tile-danger">
				<div class="tile-icon"><i class="ti ti-check-box"></i></div>
				<div class="tile-heading"><span>Bugs Fixed</span></div>
				<div class="tile-body"><span>21</span></div>
				<div class="tile-footer"><span class="text-success">+10.4%</span></div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile info-tile-alt tile-info">
				<div class="tile-icon"><i class="ti ti-user"></i></div>
				<div class="tile-heading"><span>New Members</span></div>
				<div class="tile-body"><span>124</span></div>
				<div class="tile-footer"><span class="text-danger">-25.4%</span></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-info" data-widget='{"id" : "wiget9", "draggable": "false"}'>
				<div class="panel-heading">
					<h2>Social Stats</h2>
					<div class="panel-ctrls button-icon-bg" 
						data-actions-container="" 
						data-action-collapse='{"target": ".panel-body"}'
						data-action-colorpicker=''
						data-action-refresh-demo='{"type": "circular"}'
						>
					</div>
				</div>
				<div class="panel-editbox" data-widget-controls=""></div>
				<div class="panel-body">
					<div id="socialstats" style="height: 272px;" class="mt-sm mb-sm"></div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-bluegray" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Earnings Stats</h2>
					<div class="panel-ctrls button-icon-bg" 
						data-actions-container="" 
						data-action-collapse='{"target": ".panel-body"}'
						data-action-colorpicker=''
						data-action-refresh-demo='{"type": "circular"}'
						>
					</div>
				</div>
				<div class="panel-body">
					<div id="earnings" style="height: 272px;" class="mt-sm mb-sm"></div>
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Visitor Stats</h2>
					<div class="panel-ctrls button-icon-bg" 
						data-actions-container="" 
						data-action-collapse='{"target": ".panel-body"}'
						data-action-colorpicker=''
						data-action-refresh-demo='{"type": "circular"}'
						>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="spark-container mb-xl">
								<div class="pull-left">
									<h2 class="title" style="color: #cddc39">Pageviews</h2>
									<h3 class="number">19,600</h3>
								</div>
								<div class="pull-right">
									<h2 class="title" style="color: #ff5722; text-align: right;">Sessions</h2>
									<h3 class="number">1,200</h3>
								</div>

								<div class="spark-pageviews"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div id="newvsreturning" style="height: 144px" class="mt-md mb-md"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="spark-container">
								<h2 class="title">Users</h2>
								<h3 class="number">700</h3>
								<div class="spark-users"></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="spark-container">
								<h2 class="title">Avg. Duration</h2>
								<h3 class="number">00:04:36</h3>
								<div class="spark-avgduration"></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="spark-container">
								<h2 class="title">Page/Session</h2>
								<h3 class="number">4.20</h3>
								<div class="spark-pagesession"></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="spark-container">
								<h2 class="title">Bounce Rate</h2>
								<h3 class="number">52.10%</h3>
								<div class="spark-bouncerate"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-teal" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Browsers</h2>
					<div class="panel-ctrls button-icon-bg" 
						data-actions-container="" 
						data-action-collapse='{"target": ".panel-body"}'
						data-action-colorpicker=''
						data-action-refresh-demo='{"type": "circular"}'
						>
					</div>
				</div>
				<div class="panel-body no-padding">
					<table class="table browsers m-n">
						<tbody>
							<tr>
								<td>Google Chrome</td>
								<td class="text-right">43.7%</td>
								<td class="vam" style="width: 56px;">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width: 100%"></div>
	                                </div>
	                            </td>
							</tr>
							<tr>
								<td>Firefox</td>
								<td class="text-right">20.5%</td>
								<td class="vam">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width: 50%"></div>
	                                </div>
	                            </td>
							</tr>
							<tr>
								<td>Opera</td>
								<td class="text-right">14.6%</td>
								<td class="vam">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width: 40%"></div>
	                                </div>
	                            </td>
							</tr>
							<tr>
								<td>Safari</td>
								<td class="text-right">9.1%</td>
								<td class="vam">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width: 25%"></div>
	                                </div>
	                            </td>
							</tr>
							<tr>
								<td>Internet Explorer</td>
								<td class="text-right">5.3%</td>
								<td class="vam">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width: 12.5%"></div>
	                                </div>
	                            </td>
							</tr>
							<tr>
								<td>Torch</td>
								<td class="text-right">2.9%</td>
								<td class="vam">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width: 9%"></div>
	                                </div>
	                            </td>
							</tr>
							<tr>
								<td>Maxthon</td>
								<td class="text-right">2.3%</td>
								<td class="vam">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width: 6%"></div>
	                                </div>
	                            </td>
							</tr>
							<tr>
								<td>Others</td>
								<td class="text-right">1.6%</td>
								<td class="vam">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width: 3%"></div>
	                                </div>
	                            </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-realtime" data-widget='{"draggable": "false"}'>
                <div class="panel-heading">
                    <h2>Real-Time</h2>
                    <div class="panel-ctrls mr-n">
                    	<div class="mt-md mb-md">
                    		<input type="checkbox" class="js-switch-success switchery-xs" checked />
						</div>
                    </div>
                </div>
                <div class="panel-body">
                	<span class="rightnow">Right Now</span>
					<span class="number">20</span>
					<span class="activeuser">active Users right now</span>
                    <div id="realtime-updates" style="height: 112px" class="centered"></div>
                </div>
            </div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-white" data-widget='{"draggable": "false"}'>
                <div class="panel-heading">
                    <h2>World Map</h2>
                    <div class="panel-ctrls button-icon-bg" 
						data-actions-container="" 
						data-action-collapse='{"target": ".panel-body"}'
						data-action-colorpicker=''
						data-action-refresh-demo='{"type": "circular"}'
						>
					</div>
                </div>
                <div class="panel-body">
					<div id="worldmap" style="height: 272px; width: 100%;" class="mt-sm mb-sm"></div>
                </div>
            </div>
		</div>
		
	</div>

	</div>
		</div>
	</div>
</div>

<?php		
				}

			 ?>


                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
<footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2017 Code Master</h6></li>
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

<script type="text/javascript" src="<?=bs('public/assets/js/jquery-1.10.2.min.js')?>"></script>              <!-- Load jQuery -->
<script type="text/javascript" src="<?=bs('public/assets/js/jqueryui-1.10.3.min.js')?>"></script>              <!-- Load jQueryUI -->
<script type="text/javascript" src="<?=bs('public/assets/js/bootstrap.min.js')?>"></script>                <!-- Load Bootstrap -->
<script type="text/javascript" src="<?=bs('public/assets/js/enquire.min.js')?>"></script>                  <!-- Load Enquire -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/velocityjs/velocity.min.js')?>"></script>         <!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/velocityjs/velocity.ui.min.js')?>"></script>

<script type="text/javascript" src="<?=bs('public/assets/plugins/wijets/wijets.js')?>"></script>                 <!-- Wijet -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/codeprettifier/prettify.js')?>"></script>         <!-- Code Prettifier  -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/bootstrap-switch/bootstrap-switch.js')?>"></script>     <!-- Swith/Toggle Button -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js')?>"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/iCheck/icheck.min.js')?>"></script>               <!-- iCheck -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js')?>"></script> <!-- nano scroller -->

<script type="text/javascript" src="<?=bs('public/assets/js/application.js')?>"></script>
<script type="text/javascript" src="<?=bs('public/assets/demo/demo.js')?>"></script>
<script type="text/javascript" src="<?=bs('public/assets/demo/demo-switcher.js')?>"></script>

<!-- Charts -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/charts-flot/jquery.flot.min.js')?>"></script>               <!-- Flot Main File -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/charts-flot/jquery.flot.pie.min.js')?>"></script>             <!-- Flot Pie Chart Plugin -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/charts-flot/jquery.flot.stack.min.js')?>"></script>         <!-- Flot Stacked Charts Plugin -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/charts-flot/jquery.flot.orderBars.min.js')?>"></script>     <!-- Flot Ordered Bars Plugin-->
<script type="text/javascript" src="<?=bs('public/assets/plugins/charts-flot/jquery.flot.resize.min.js')?>"></script>          <!-- Flot Responsive -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/charts-flot/jquery.flot.tooltip.min.js')?>"></script>     <!-- Flot Tooltips -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/charts-flot/jquery.flot.spline.js')?>"></script>        <!-- Flot Curved Lines -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/sparklines/jquery.sparklines.min.js')?>"></script>       <!-- Sparkline -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')?>"></script>       <!-- jVectorMap -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>   <!-- jVectorMap -->

<script type="text/javascript" src="<?=bs('public/assets/plugins/switchery/switchery.js')?>"></script>               <!-- Switchery -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/easypiechart/jquery.easypiechart.js')?>"></script>
<script type="text/javascript" src="<?=bs('public/assets/plugins/fullcalendar/moment.min.js')?>"></script>           <!-- Moment.js Dependency -->
<script type="text/javascript" src="<?=bs('public/assets/plugins/fullcalendar/fullcalendar.min.js')?>"></script>         <!-- Calendar Plugin -->

<script type="text/javascript" src="<?=bs('public/assets/demo/demo-index.js')?>"></script>


<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
                        <!-- Data Tables -->
<script type="text/javascript" src="<?= base_url('public/assets/plugins/datatables/jquery.dataTables.js')?>"></script>    
<script type="text/javascript" src="<?= base_url('public/assets/demo/demo-datatables.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('public/assets/plugins/datatables/dataTables.bootstrap.js')?>"></script>
                         <!-- Bootstrap Support for Datatables -->

<script type="text/javascript" src="<?= base_url('public/assets/plugins/tables-fixedheader/js/dataTables.fixedHeader.js')?>"></script> 		<!-- Fixed Header -->

<script type="text/javascript" src="<?= base_url('public/assets/demo/demo-fixedheadertables.js')?>"></script>
    <!-- End loading page level scripts-->
<script src="<?= base_url('public/assets/js/bootstrap-notify.js') ?>"></script>
    

    </body>
</html>

  <script>
    <?php
     if (!empty($message))
       {
    ?>
     $.notify({
          
          icon: 'glyphicon glyphicon-info-sign',
          title: '<b><i class="ti ti-check"></i> Notification</b><br>',
          message: '<?php echo $message;?>',
      },
      {
          
          type: "danger noty-color col-md-3 col-md-offset-2",
          allow_dismiss: true,
          placement: {
              from: "top",
              align: "right"
          },
          offset: 20,
          spacing: 10,
          z_index: 1431,
          delay: 5000,
          timer: 1000,
          animate: {
              enter: 'animated bounceInDown',
              exit: 'animated bounceOutUp'
          }
      });
    <?php
      }
    ?> 
</script> 
<!-- End loading page level scripts-->

