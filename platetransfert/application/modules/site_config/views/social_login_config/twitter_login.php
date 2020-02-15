<!-- Main content start -->
<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
          <div class="col-lg-12">
              <!--progress bar start-->
              <section class="panel">
                  <header class="panel-heading">
                      <i class="fa fa-wrench"></i> Twitter Login Setting
                  </header>
                  <div class="panel-body">
                    <div class="row">
				 		<div class="col-md-9">
				 		   <form action="<?= bs('site_config/twitter_config') ?>" method="post" class="form-horizontal row-border" id="social_config">
				 		    <fieldset>
				 		      <legend><i class="fa fa-twitter-square"></i> Twitter</legend>
								<div class="form-group">
									<label class="col-sm-2 control-label">App Id</label>
									<div class="col-sm-6">
										<input type="text" name="app_id" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">App Secret</label>
									<div class="col-sm-6">
										<input type="text" name="app_secret" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Redirect Url</label>
									<div class="col-sm-6">
										<input type="text" name="url" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-info">Submit</button>
									</div>
								</div>
						     </fieldset>	
							</form>	
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


