<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login System</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bs() ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bs() ?>public/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php bs() ?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php bs() ?>public/css/style.css" rel="stylesheet">
    <link href="<?php bs() ?>public/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
      .noty-color
        {
          background-color: #ca5654;
          border: 0px;
          color: white;

        }
      .success-noty
        {
          background-color: #72b373;
          color: white;
        }
      .error
        {
          color: #ca5654;
        }
    </style>

</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="<?= base_url('users/auth/login') ?>" method="post">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="identity" placeholder="Email" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"  id="remember"> Remember me
                <span class="pull-right">
                    <a href="<?= base_url('users/Auth/forgot_password') ?>" title="">
                    Forgot Password?
                     </a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

            <?php 

                  foreach ($reg_status as $key => $value) 
                  {
                    $status = $value->registration_status;
                  }
                  if ($status == 1) 
                  {
            ?>        
            <p>or you can sign in via social network</p>

            <div class="login-social-link">
                <a href="<?= $fbUrl ?>" class="facebook" data-toggle="tooltip">
                   <?php echo nbs(1) ?><i class="fa fa-facebook"></i>
                </a>
                <a href="<?= $authUrl ?>" class="google" data-toggle="tooltip">
                  <i class="fa fa-google-plus"></i>
                </a>
                <a href="https://api.instagram.com/oauth/authorize/?client_id=cc0c6e3ffad5457eb811cf3bd99f0524&redirect_uri=http://localhost/login/users/Social_login/instagram_login&response_type=code&scope=public_content" class="instagram" data-toggle="tooltip">
                  <?php echo nbs(1) ?><i class="fa fa-instagram"></i>
                </a>
                <a href="<?php echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>" data-toggle="tooltip" class="linkedin">
                  <?php echo nbs(1) ?><i class="fa fa-linkedin"></i>
                </a>
            </div>
            <div class="registration">
                Don't have an account yet?
                <a href="<?php bs("users/Register") ?>"> 
                    Create an account
                </a>
            </div>
            <?php 
                }

              else{
                echo'<div class="alert alert-danger">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        User Registration is disable by Admin.
                     </div>';
              }  

             ?>
        </div>
      </form>

    </div>

  </body>
</html>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php bs() ?>public/js/jquery.js"></script>
    
  <!-- Include all compiled plugins (below), or include individual files as needed -->    
  <script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script> 

  <script src="<?= base_url('public/js/bootstrap-notify.js') ?>"></script>

  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js">
  </script>

  <script>
    $("#login-form").validate();
  </script>

  <script>
    $(document).ready(function(){
      $("[rel=tooltip]").tooltip({ placement: 'top'});
    });
  </script>

  <!-- Notification Script -->
  <script>

    <?php
      $success = $this->session->flashdata('success');
      $error   = $this->session->flashdata('error');
      if (!empty($success))
       {
    ?>
     $.notify({
          
          icon: 'glyphicon glyphicon-info-sign',
          title: '<b>Notification</b><br>',
          message: '<?php echo $success ?>',
      },
      {
          
          
          type: "success success-noty col-md-3",
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
      if (!empty($error))
       {
  ?>
     $.notify({
              
              icon: 'glyphicon glyphicon-info-sign',
              title: '<b>Notification</b><br>',
              message: '<?php echo $error ?>',
          },{
              
              
              type: "danger noty-color col-md-3",
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
                  enter: 'animated fadeInDown',
                  exit: 'animated fadeOutUp'
              }
          });
     <?php            
       }
      ?>

  </script>  

<script>
    <?php
     if (!empty($message))
       {
    ?>
     $.notify({
          
          icon: 'glyphicon glyphicon-info-sign',
          title: '<b>Notification</b><br>',
          message: '<?php echo $message;?>',
      },
      {
          
          type: "success success-noty col-md-3 col-md-offset-2",
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
        type: 'success alert-success-alt col-md-3'
      });

    <?php    
    }    
    ?>  

</script>
</body>
</html>