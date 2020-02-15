<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Sign Up</title>

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
     <style type="text/css" media="screen">
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

      <form class="form-signin" action="<?php bs() ?>users/Register/sign_up" id = 'myform' method="post">
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" autofocus required>

            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" autofocus required>

            <input type="text" id="username" name="username" class="form-control" placeholder="User Name" autofocus required>
            <p id="username_message" style="color: red;font-weight: bold;"> </p>

            <input type="text" id="email" name="email" class="form-control" placeholder="Email" autofocus required>
             <p id="user_mail" style="color: red;font-weight: bold;"></p>

            <input type="password" id="password" name="password" minlength="8" class="form-control" placeholder="Password" required>

            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Re-type Password" required>

            <p class="g-recaptcha" data-sitekey="6LfaLzIUAAAAAHpYFZW__WFypmev0w8rgz7AtPBN"
                  data-callback="YourOnSubmitFn"></p>

            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="<?php bs('users') ?>">
                    Login
                </a>
            </div>

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

  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

  <script src='https://www.google.com/recaptcha/api.js'></script>

  <script>
    $("#myform").validate({
      rules: {
        password: "required",
        confirm_password: {
          equalTo: "#password"
        },
        captcha: {
          "required": true
        }
      },
      messages:
      {
        captcha: {
            "required": "Please enter the verifcation code.",
          }
      }
  });
  </script>

  <script>
    $(document).ready(function() {

       //This script is to check email validity
       $("#email").change(function() 
       {

          var email    = $("#email").val();

          $.ajax({
            url: '<?= base_url("users/Register/check_email") ?>',
            method: 'POST',
            dataType: 'TEXT',
            data: {myemail: email},
            success: function(result) 
            {
              var msg = result.split("::");

              if (msg[0] == "ok")
              {
                $("#user_mail").fadeIn();
                $("#user_mail").text("This Email Is Already Registered Please Try With Another.");
              }  
              else
              {
                $("#user_mail").fadeIn();
                $("#user_mail").html("<span class='glyphicon glyphicon-ok text-success'>Success</span>");
                $("#user_mail").delay(3000).fadeOut();
              }
            },
            error:function(result) 
            {
              // body...
              console.log(result);
            }
          })
       });

       //This script is to check Username validity
      $("#username").change(function() 
       {

          var username = $("#username").val();

          $.ajax({
            url: '<?= base_url("users/Register/check_username") ?>',
            method: 'POST',
            dataType: 'HTML',
            data: {u_name: username},
            success: function(result) 
            {
              var msg = result.split("::");

              if (msg[0] == "ok")
              {
                $("#username_message").fadeIn();
                $("#username_message").html('This User name Is Already Registered Please Try With Another.');
              }
              else
              {
                $("#username_message").fadeIn();
                $("#username_message").html("<span class='glyphicon glyphicon-ok text-success'>Success</span>");
                $("#username_message").delay(3000).fadeOut();
              }
            },
            error:function(result) 
            {
              // body...
              console.log(result);
            }
          })
       });
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
          
          
          type: "success success-noty col-sm-3",
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
              type: "danger noty-color col-sm-3",
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
  <!-- Notification Script -->
  <script>
  <?php
      if (!empty($message))
       {
  ?>
     $.notify({
              
              icon: 'glyphicon glyphicon-info-sign',
              title: '<b>Notification</b><br>',
              message: '<?php echo $message ?>',
          },{
              
              
              type: "danger noty-color col-sm-3",
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

  </body>
</html>