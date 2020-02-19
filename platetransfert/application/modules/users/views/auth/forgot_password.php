<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
    <link href="<?=bs()?>public/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .form-gap {
          padding-top: 70px;
      }
      .noty-color
      {
        background-color: #ca5654;
        border: 0px;
        color: white;

      }
    </style>
</head>
<body>

<div class="form-gap"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="text-center">
              <h3><i class="fa fa-lock fa-4x"></i></h3>
              <h2 class="text-center">Forgot Password?</h2>
              <p>You can reset your password here.</p>
              <div class="panel-body">

                <form id="register-form" action="<?=bs()?>users/auth/forgot_password" role="form" autocomplete="off" class="form" method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                      <?php echo (($type=='email') ? sprintf(lang(''),$identity_label) : sprintf(lang(''), $identity_label));?>
                      <?php echo form_input($identity);?>
                    </div>
                  </div>
                  <div class="form-group">
                   <!-- <?php echo form_submit('submit', 'Reset','class="btn btn-primary pull-right"');?> -->
                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                  </div>
                  
                  <input type="hidden" class="hide" name="token" id="token" value=""> 
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?=bs()?>public/js/jquery.js"></script>
    
  <script src="<?= base_url('public/js/bootstrap-notify.js') ?>"></script>

<script>
    <?php
     if (!empty($message))
       {
    ?>
     $.notify({
          
          icon: 'glyphicon glyphicon-info-sign',
          title: '<b> <i class="ti ti-close"></i> Notification</b><br>',
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

<!-- <div id="infoMessage"><?php echo $message;?></div> -->

<!-- 
      <p>
      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
      	
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php echo form_close();?> -->
