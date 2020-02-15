<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
          <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-edit"></i> Create User
                
                 <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
            </header>
          <div class="panel-body">
            <?= form_open('users/Users/add_user',array('id'=>'user_form_validation','class'=>'form-horizontal')); ?>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">First Name</label>
                <div class="col-md-5">
                  <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Name" required/>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Last Name</label>
                <div class="col-md-5">
                  <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required/>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">User Name</label>
                <div class="col-md-5">
                  <input type="text" id="username" name="username" class="form-control" placeholder="User Name" required/>
                  <div id="username_message" style="color: red;font-weight: bold;"> </div>
                </div>
              </div>
                  <?php
                    if($identity_column!=='email') 
                      {
                          echo '<p>';
                          echo lang('create_user_identity_label', 'identity');
                          echo '<br />';
                          echo form_error('identity');
                          echo form_input($identity);
                          echo '</p>';
                      }
                  ?>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Email Address</label>
                <div class="col-md-5">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Example@gmail.com" required/>
                  <div id="user_mail" style="color: red;font-weight: bold;"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Company Name</label>
                <div class="col-md-5">
                  <input type="text" id="company" name="company" class="form-control" placeholder="Company Name" required/>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Phone No</label>
                <div class="col-md-5">
                  <input type="text" id="email" name="phone" class="form-control" placeholder="1111-1111-1111" required/>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Password</label>
                <div class="col-md-5">
                  <input type="password" id="password" name="password" class="form-control" placeholder="***********" required minlength="8" />
                </div>
              </div>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Confirm Password</label>
                <div class="col-md-5">
                  <input type="password" id="password" name="confirm_password" class="form-control" placeholder="***********" required/>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Select Group</label>
                <div class="col-md-5">
                  <select class="form-control" name="group" id="" required>
                    <option value="">Select Group</option>  

                    <?php foreach ($groups as $key => $value): ?>
                      
                    <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                    
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-5 col-md-offset-3">
                  <input type="submit" class="btn-success btn" value="Submit">
              </div>
            </fieldset>
          </form>
        </div>
      </section>
     </div>
    </div>
      <!-- page end-->
  </section>
</section>

<!-- Main Content Ends -->

<script>
    $(document).ready(function() {

       //This script is to check email validity
       $("#email").change(function() 
       {

          var email = $("#email").val();

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
                $("#user_mail").html("<span class='fa fa-check-circle text-success'> Success</span>");
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
                $("#username_message").html("<span class='fa fa-check-circle text-success'> Success</span>");
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


