<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
          <div class="col-lg-12">
              <!--progress bar start-->
              <section class="panel">
                  <header class="panel-heading">
                      Create Group
                  </header>
                  <div class="panel-body">
                      <form id="wizard-validation-form" class="insert_data" action="<?=bs()?>users/User_groups/create_group" method="post">
                          <div>
                              <h3>Step 1</h3>
                              <section>
                                  <div class="form-group clearfix">
                                      <label class="col-lg-2 control-label " for="userName">Group Name *</label>
                                      <div class="col-lg-10">
                                         <?php echo form_input($group_name);?>
                                         <span id="err_msg" style="color:red"></span>
                                      </div>
                                  </div>
                                  <div class="form-group clearfix">
                                      <label class="col-lg-2 control-label " for="password"> Description *</label>
                                      <div class="col-lg-10">
                                         <?php echo form_input($description);?>
                                      </div>
                                  </div>
                                  <div class="form-group clearfix">
                                      <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                  </div>
                              </section>
                              <h3>Step 2</h3>
                              <section>

                                  <div class="form-group clearfix" >
                                      <label class="col-lg-4 control-label" for="name"> <h3>Select User Previliges</h3></label>
                                      <div class="col-lg-7">
                                       <?php foreach ($perm as $key => $value): ?>

                                          <div class="">
                                            <label class="btn btn-success btn-sm" style="margin-top: 5px">
                                              <input type="checkbox" name="privilege[]" value="<?php echo $value->perm_id ?>">&nbsp;<?php echo $value->perm_name ?>
                                            </label>
                                          </div>
                                          
                                        <?php endforeach ?>
                                      </div>
                                  </div>
                              </section>
                          </div>
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
   $("body").on('change', '#group_name', function()
   {
      var group_name = $("#group_name").val();

      if (group_name.length === 0) 
      {
        $('#err_msg').text('Group Name is required');
        return false;
      }

      $.ajax({
        url: '<?= base_url("users/User_groups/check_group_name") ?>',
        method: 'POST',
        dataType: 'TEXT',
        data: {group_name: group_name},
        success: function(result) 
        {
          var msg = result.split("::");

          if (msg[0] == "ok")
          {
            $("#err_msg").fadeIn();
            $("#err_msg").text("Group name already taken.");
          }  
          else
          {
            console.log('Success');
            $("#err_msg").fadeIn();
            $("#err_msg").html("<span class='fa fa-check-circle text-success'> Success</span>");
            $("#err_msg").delay(3000).fadeOut();
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