<!-- Main content start -->
<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
          <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-pencil"></i> Edit Group
               <span class="tools pull-right">
                  <a href="javascript:;" class="fa fa-chevron-down"></a>
                  <a href="javascript:;" class="fa fa-times"></a>
               </span>
            </header>
          <div class="panel-body">
              <?php echo form_open(current_url());?>
            <div class="col-md-9">
              <h4>Privileges</h4>

              <?php if ($this->ion_auth->is_admin()): ?>

                <?php foreach ($privileges as $privilege):?>
                      <div>
                          <label class="btn btn-white btn-block text-left no-pb <?=($privilege->menu_name == 'sub')?'sub pull-right':null;?>" style="margin-top: 5px;text-align: left"
                              <?php
                              $pID = $privilege->perm_id;
                              $checked = null;
                              $item = null;
                              foreach($crtPrivilege as $pri)
                              {
                                  if ($pID == $pri->perm_id)
                                  {
                                      $checked= ' checked="checked"';
                                      break;
                                  }
                              }
                              ?>
                              <div class="custom-switch custom-switch custom-switch-xs pl-0 dis-inline-block v-align-top">
                                  <input class="custom-switch-input" name="privlg[]" value="<?php echo $privilege->perm_id;?>" id="perm_<?php echo $privilege->perm_id;?>_switch" type="checkbox" <?=$checked?>>
                                  <label class="custom-switch-btn" for="perm_<?php echo $privilege->perm_id;?>_switch"></label>
                              </div>
                              <span class="dis-inline-block"><?=$privilege->perm_name;?></span>

                          </label>
                      </div>
                      <div class="clearfix"></div>
                <?php endforeach?>
                     

            <?php endif ?>

              </div>

              <div class="col-md-3">
                  <p><?php echo lang('edit_group_subheading');?></p>
                  <p>
                      <?php echo lang('edit_group_name_label', 'group_name');?> <br />
                      <?php echo form_input($group_name);?>
                      <span id="err_msg" style="color:red"></span>
                  </p>

                  <p>
                      <?php echo lang('edit_group_desc_label', 'description');?> <br />
                      <?php echo form_input($group_description);?>
                  </p>

                  <p><?php echo form_submit('submit', 'Enregistrer','class="btn btn-success"');?></p>

              </div>
              <?php echo form_close();?>
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