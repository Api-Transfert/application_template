<?php 
error_reporting(0);

$db_config = "<?=bs()?>application/config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Install</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <!-- Bootstrap core CSS -->
    <link href="<?=bs()?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=bs()?>public/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=bs()?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="<?=bs()?>public/css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=bs()?>public/css/style.css" rel="stylesheet">
    <link href="<?=bs()?>public/css/style-responsive.css" rel="stylesheet" />

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    <style>
      .alert-danger-alt
      {
        background-color: #f34a50;
        color: white;
      }
    </style>

    </head>

    <body class="animated-content">

        <div class="row" >
      <div class="col-md-8 col-md-offset-2">
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                

                            </ol>

    <?php 
      if (is_writable($db_config))
       {
           
     ?>
                            <div class="container-fluid">
                               
<div data-widget-group="group1">
  
        
      <div class="panel" data-widget='{"draggable": "false"}'>
        <div class="panel-heading">
          <h2> <i class="ti ti-settings"></i>Install</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
        </div>
        <div class="panel-body">
          
          <form action="setup.php" id="wizard" method="post" class="form-horizontal">
              <div class="form-group">
                <label for="fieldname" class="col-md-3 control-label">Hostname</label>
                <div class="col-md-6">
                  <input id="fieldname" class="form-control" name="hostname" type="text" required>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldemail" class="col-md-3 control-label">Database Name</label>
                <div class="col-md-6"><input id="fieldemail" class="form-control" type="text" name="db_name" required></div>
              </div>
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Username</label>
                <div class="col-md-6">
                  <input id="fieldurl" class="form-control"  type="text" name="username" required>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Password</label>
                <div class="col-md-6">
                  <input id="fieldurl" class="form-control"  type="password" name="db_pass">
                </div>
              </div>
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Base Url</label>
                <div class="col-md-6">
                  <input class="form-control" id="siteUrl"  type="text" name="site_url">
                </div>
              </div>
            <input type="submit" name="submit" class="btn-success btn col-lg-offset-3" value="Install">
          </form>
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
            <li><h6 style="margin: 0;"></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>

     <?php 
          }
           else 
          {
      ?>      
        <p class="error">Please make the application/config/production/database.php file writable. <strong>Example</strong>:<br /><br /><code>chmod 777 application/config/database.php</code></p>
       <?php  
          }
      ?>
    
    <!-- Load site level scripts -->
 <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=bs()?>public/js/jquery.js"></script>
    <script src="<?=bs()?>public/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="<?=bs()?>public/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=bs()?>public/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=bs()?>public/js/jquery.scrollTo.min.js"></script>
    <script src="<?=bs()?>public/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=bs()?>public/js/respond.min.js" ></script>
    <script src="<?=bs()?>public/js/draggable-portlet.js"></script>

  <!--right slidebar-->
  <script src="<?=bs()?>public/js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="<?=bs()?>public/js/common-scripts.js"></script>
    
      <script script src="bootstrap-notify.js"></script>

<script>
  $(document).ready(function() {
  
  // to show it in an alert window
  var url  = window.location+'';

  var site = url.split("install"); 

  $('#siteUrl').val(site[0]);
});
</script>

<script>
   <?php  
      if (!empty($_GET['err_msg']))  
   {
   ?> 
      $.notify({
      title: '<strong><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Error!</strong>',
      message: '<?php echo $_GET['err_msg'] ?>'
      },{
        type: 'danger alert-danger-alt col-md-3'
      });
     <?php 
     } 
      elseif (!empty($_GET['success_msg']))  
    {
      ?>

      $.notify({
      title: '<strong> <span class= "glyphicon glyphicon-ok"></span> Success!</strong>',
      message: '<?php echo $_GET['success_msg'] ?>'
      },{
        type: 'danger alert-success-alt col-md-3'
      });

    <?php    
    }    
    ?>  

</script>
    </body>
</html>
