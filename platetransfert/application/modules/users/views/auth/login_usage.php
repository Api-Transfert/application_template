<div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li><a href="">Home</a></li>
<li><a href="#">Login Attempets</a></li>
<li class="active"><a href="">Login Details </a></li>

                            </ol>
                            <div class="container-fluid">
                                
<div data-widget-group="group1">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2> <i class="fa fa-sign-in"></i> Login Attempets</h2>
					<div class="panel-ctrls">
						<a href="#" class="button-icon"><i class="ti ti-file"></i></a>
						<a href="#" class="button-icon"><i class="ti ti-mouse"></i></a>
						<a href="#" class="button-icon"><i class="ti ti-settings"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
				 		<div class="col-md-11">
							<div class="alert" style="background-color: #37474f; padding: 10px">
								<font size="5" color="#cccccc">Is Maximum Login Attempets Exceeded</font>
							</div>
								<p style="text-align: justify;">
									If login attempt tracking is enabled, checks to see if the number of failed login attempts for this identity or ip address has been exceeded. The controller must call this method and take any necessary actions. Login attempt limits are not enforced in the library.
								</p>	

								<h3>Parameters</h3>

								'Identity' - string REQUIRED.


								<h3>Return</h3>

								boolean. TRUE if maximum_login_attempts is exceeded FALSE if not or if login attempts not tracked.<?= br(1) ?>

								<h3>Usage</h3>
								<div class="well well-sm" data-trigger="hover" data-original-title=".well.well-sm">

									$identity = 'ben.edmunds@gmail.com';<br><br>
									if ($this->ion_auth->is_max_login_attempts_exceeded($identity))<br>
									{<br>
										$this->session->set_flashdata('message', 'You have too many login attempts');<br>
										redirect('welcome/index');<br>
									}
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
					<div class="row">
				 		<div class="col-md-11">
							<div class="alert" style="background-color: #37474f; padding: 10px">
								<font size="5" color="#cccccc">Get Attempets Num</font>
							</div>
								<p style="text-align: justify;">
									Returns the number of failed login attempts for this identity or ip address.
								</p>	

								<h3>Parameters</h3>

								'Identity' - string REQUIRED.


								<h3>Return</h3>

								int. The number of failed login attempts for this identity or ip address.<?= br(1) ?>

								<h3>Usage</h3>
								<div class="well well-sm" data-trigger="hover" data-original-title=".well.well-sm">

									$identity = 'ben.edmunds@gmail.com'; <br><br>
									$num_attempts = $this->ion_auth->get_attempts_num($identity);
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
					<div class="row">
				 		<div class="col-md-11">
							<div class="alert" style="background-color: #37474f; padding: 10px">
								<font size="5" color="#cccccc">Increase Login Attempts</font>
							</div>
								<p style="text-align: justify;">
									If login attempt tracking is enabled, records another failed login attempt for this identity or ip address. This method is automatically called during the login() method if the login failed.
								</p>	

								<h3>Parameters</h3>

								'Identity' - string REQUIRED.

								<h3>Usage</h3>
								<div class="well well-sm" data-trigger="hover" data-original-title=".well.well-sm">

									$identity = 'ben.edmunds@gmail.com'; <br><br>
									$num_attempts = $this->ion_auth->get_attempts_num($identity);
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
					<div class="row">
				 		<div class="col-md-11">
							<div class="alert" style="background-color: #37474f; padding: 10px">
								<font size="5" color="#cccccc">Clear Login Attempts</font>
							</div>
								<p style="text-align: justify;">
									Clears all failed login attempt records for this identity or this ip address. This method is automatically called during the login() method if the login succeded.
								</p>	

								<h3>Parameters</h3>

								'Identity' - string REQUIRED.

								<h3>Usage</h3>
								<div class="well well-sm" data-trigger="hover" data-original-title=".well.well-sm">

									$identity = 'ben.edmunds@gmail.com'; <br>
									$password = '12345678';<br><br>
									if ($this->ion_auth->login($identity, $password) == TRUE) <br>
									{<br>
										$this->ion_auth->clear_login_attempts($identity);<br>
									}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>