<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
          <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-edit"></i> Edit User
                
                 <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
            </header>
          <div class="panel-body">
            <?php echo validation_errors(); ?>
            <?= form_open(uri_string(),array('id'=>'social_config','class'=>'form-horizontal validate')); ?>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">First Name</label>
                  <div class="col-md-5">
                    <?php
                      $first_name['class']='form-control';  
                      echo form_input($first_name);
                     ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Last Name</label>
                  <div class="col-md-5">
                    <?php 
                       $last_name['class']='form-control'; 
                       echo form_input($last_name);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">User Name</label>
                  <div class="col-md-5">
                    <?php
                      echo form_input($username);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Email Address</label>
                  <div class="col-md-5">
                    <?php
                      echo form_input($email);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Company Name</label>
                  <div class="col-md-5">
                    <?php
                      echo form_input($company);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Phone No</label>
                  <div class="col-md-5">
                    <?php
                      echo form_input($phone);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Password</label>
                  <div class="col-md-5">
                    <?php
                      echo form_input($password);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label">Confirm Password</label>
                  <div class="col-md-5">
                    <?php
                      echo form_input($password_confirm);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-2 col-md-offset-1 control-label"><?php echo lang('edit_user_groups_heading');?></label>
                  <div class="col-md-5">
                    <?php if ($this->ion_auth->is_admin()): ?>

                        <?php foreach ($groups as $group):?>
                            <label class="btn btn-default btn-xs">
                            <?php
                                $gID=$group['id'];
                                $checked = null;
                                $item = null;
                                foreach($currentGroups as $grp) {
                                    if ($gID == $grp->id) {
                                        $checked= ' checked="checked"';
                                    break;
                                    }
                                }
                            ?>
                            <input type="checkbox" class="bg" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                            <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                            </label>
                        <?php endforeach?>

                    <?php endif ?>

                    <?php echo form_hidden('id', $user->id);?>
                    <?php echo form_hidden($csrf); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 col-md-offset-3">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
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


