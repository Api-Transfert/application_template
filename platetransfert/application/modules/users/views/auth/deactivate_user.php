<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
          <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-ban"></i> Deactivate User
               <span class="tools pull-right">
                  <a href="javascript:;" class="fa fa-chevron-down"></a>
                  <a href="javascript:;" class="fa fa-times"></a>
               </span>
            </header>
              <div class="panel-body">
                  <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

                  <?php echo form_open("users/auth/deactivate/".$user->id);?>
                    <p>
                      <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                      <input type="radio" name="confirm" value="yes" checked="checked" />
                       <br>
                      <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                      <input type="radio" name="confirm" value="no" />
                    </p>

                    <?php echo form_hidden($csrf); ?>
                    <?php echo form_hidden(array('id'=>$user->id)); ?>

                    <p><?php echo form_submit('submit',"Deactivate",'class="btn btn-info"');?>
                    </p>

                  <?php echo form_close();?>
              </div>
          </section>
        </div>
      </div>
      <!-- page end-->
  </section>
</section>

<!-- Main Content Ends -->
<!-- 
<div class="static-content-wrapper">
  <div class="static-content">
      <div class="page-content">
        <ol class="breadcrumb">
          <li class=""><a href="#">Home</a></li>
          <li class=""><a href="#">Users</a></li>
          <li class="active"><a href="#">Deactivate User</a></li>
        </ol>
        <div class="container-fluid">
          <div class="col-md-10">
            <div class="panel panel-info" data-widget='{"draggable": "false"}'>
              <div class="panel-heading">
                <h2><i class="ti ti-na"></i><?php echo lang('deactivate_heading');?></h2>
                  <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
              </div>
                <div class="panel-body">
                  <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

                  <?php echo form_open("users/auth/deactivate/".$user->id);?>
                    <p>
                      <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                      <input type="radio" name="confirm" value="yes" checked="checked" />
                       <br>
                      <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                      <input type="radio" name="confirm" value="no" />
                    </p>

                    <?php echo form_hidden($csrf); ?>
                    <?php echo form_hidden(array('id'=>$user->id)); ?>

                    <p><?php echo form_submit('submit',"Deactivate",'class="btn btn-info"');?>
                    </p>

                  <?php echo form_close();?>
                </div>
            </div>
          </div>
        </div> <!-- .container-fluid -->
    </div> <!-- #page-content -->
</div>
 -->