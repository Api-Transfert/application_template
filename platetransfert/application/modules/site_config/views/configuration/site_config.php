<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
          <div class="col-lg-12">
              <!--progress bar start-->
              <section class="panel">
                  <header class="panel-heading">
                      <i class="fa fa-cogs"></i> Site Configuration
                  </header>
                  <div class="panel-body">
                      <div class="row">
				 		<div class="col-md-8">
							<form action="<?= base_url('site_config/Set_up') ?>" method="post" class="form-horizontal row-border">
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">Site Name</label>
									<div class="col-sm-8">
										<input type="text" name="site_name" class="form-control" placeholder="Facebook,twitter etc...">
										<div class="help-block">
											The title of your site, used for email.
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">Admin Email</label>
									<div class="col-sm-8">
										<input type="text" name="admin_email" class="form-control" placeholder="example@gmail.com">
										<div class="help-block">
											Your administrator email address. DEFAULT is 'admin@example.com'.
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">Login Identity</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="login_id" placeholder="uesrname,email etc..">
										<div class="help-block">
											Column to use for uniquely identifying user/logging in/etc. Usual choices are 'email' OR 'user name'. You should add an index in the users table for whatever you set this option to. DEFAULT is 'email'.
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">Min Password Length</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="min_pass" placeholder="3 etc..">
										<div class="help-block">
											Minimum length of passwords. DEFAULT is '8'.
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">Max Password Length</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="max_pass" placeholder="10 etc...">
										<div class="help-block">
											Maximum length of passwords. DEFAULT is '20'.
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">Max Login Attempts</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="login_atmpt" placeholder="6 etc">
										<div class="help-block">
											The maximum number of failed login,Default is 3. 
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">User Expire</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="user_expire" placeholder="86500 etc">
										<div class="help-block">
											How long to remember the user (seconds). Set to zero for no expiration, Default is 86500. 
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">Lock time</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="lock_time" placeholder="600 etc">
										<div class="help-block">
											The number of seconds to lockout an account due to exceeded attempts, Default is 600. 
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1">Enable/Disable User Registration</label>
									<div class="col-sm-8">
										<?php 

										    foreach ($reg_status as $key => $value) 
										    {
										    	$status = $value->registration_status;
										    }

											if ($status == 1) 
											{
										?>
											<input type="radio" name="status" value="1" class="status_enable" checked> 
      										<b>Enable</b> &nbsp;&nbsp;
      									<?php	
      										}
      										else
      										{
      									?>		
      										<input type="radio" name="status" value="1" class="status_enable"> 
      										<b>Enable</b> 
      										&nbsp;&nbsp;
      									<?php

											} 
											if($status == 0) 
											{
										?>
											<input type="radio" name="status" value="0" class="status_disable" checked> <b>Disable</b>
										<?php		
											}
											else
											{
										?>
											<input type="radio" name="status" value="0" class="status_disable"> <b>Disable</b>
										<?php		
											}
											
										 ?>
      									
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-sm-offset-1"></label>
									<div class="col-sm-8">
										<button type="submit" class="btn btn-success">Set Up</button>
									</div>
								</div>
								
							</form>
						</div>
						<div class="col-md-4">
							<div class="alert alert-block alert-danger fade in">
                              	<button data-dismiss="alert" class="close close-sm" type="button">
                                  	<i class="fa fa-times"></i>
                              	</button>
                              	<i class="fa fa-bullhorn"></i>&nbsp; <strong>Notification!</strong> 
								<p>If You Leave any field in the form the default setting will be apply. </p>
                            </div>
						</div>

					</div>
                  </div>
              </section>
          </div>
      </div>
      <!-- page end-->
  </section>
</section>

<!-- Main Content Ends -->


<script>
$(document).ready(function() 
{
  
  $("body").on('change', '.status_enable', function(event) 
  {
  	event.preventDefault();
  	/* Act on the event */	

	  var enable = $('.status_enable').val();

	  $.ajax({
	    url : "<?=bs('site_config/reg_status')?>",
	    method :'POST',
	    data : {status:enable},
	    dataType : 'text',
	    success : function(data)
	    {
			console.log(data);	      
	    }

	  });
  });

  $("body").on('change', '.status_disable', function(event) 
  {
  	event.preventDefault();
  	/* Act on the event */	

	  var disable = $('.status_disable').val();

	  $.ajax({
	    url : "<?=bs('site_config/reg_status')?>",
	    method :'POST',
	    data : {status:disable},
	    dataType : 'text',
	    success : function(data)
	    {
	      console.log(data);
	    }

	  });
  });
});	
</script>