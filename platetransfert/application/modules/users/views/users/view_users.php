<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
      		<section class="panel">
      			<header class="panel-heading">
          			<i class="fa fa-users"></i> Users Records
			          <a href="<?= bs('users/print_with_dompdf') ?>">
						 <i class="fa fa-print" style="padding-left: 1%;color: black"></i>
					  </a>
				     <span class="tools pull-right">
				        <a href="javascript:;" class="fa fa-chevron-down"></a>
				        <a href="javascript:;" class="fa fa-times"></a>
				     </span>
      			</header>
      		<div class="panel-body">
      			<div class="table-responsive">
			      <table class="display table table-bordered table-striped table-responsive" id="dynamic-table">
			      	<thead>
			          	<tr>
			                <th>User Name</th>
							<th class="hidden-sm">First Name</th>
							<th data-visible="false">Last Name</th>
							<th>Email</th>
							<th>Role/Groups</th>
						
							<?php 
								//If user is Admin
								if ($this->session->userdata("group_id") == 1): 
							?>
							
							<th>Status</th>
							<th>Edit</th>
							<th>Delete</th>
						
							<?php endif ?>
			          	</tr>
			     	 </thead>
			      <tbody>
					<?php foreach ($users as $user):?>
					<tr>
						<td>
						   <?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?>
						    </td>
			            <td class="hidden-sm">
			              <?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?>
			            </td>
			            <td>
			              <?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?>
			            </td>
			            <td>
			              <?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?>
			            </td>
			            <td>
			            <?php foreach ($user->groups as $group):?>
							<?php echo anchor("users/User_groups/edit_group/".$group->id,htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'),'class="label label-inverse"') ;?><br />
			            <?php endforeach?>
						</td>

					<?php if ($this->session->userdata("group_id") == 1): ?>
							
						<td>
						  <?php echo ($user->active) ? anchor("users/auth/deactivate/".$user->id, lang('index_active_link'),array('class' => 'btn btn-primary btn-sm')) : anchor("users/activate/". $user->id, lang('index_inactive_link'),array('class' => 'btn btn-default btn-sm'));?>
						  </a>
						 </td>
						<td>
							<a class="btn btn-info btn-sm" href="<?= base_url('users/edit_user')?>/<?= $user->id ?>"><i class="fa fa-pencil"></i></a>
							</a>
						</td>
						<td>
							<a href="<?= base_url('users/delete_user')?>/<?= $user->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
						</td>
						
					<?php endif ?>	

					</tr>
				  <?php endforeach;?>
				</tbody>
      		</table>
      	  </div>
      	</div>
      </section>
     </div>
    </div>
      <!-- page end-->
  </section>
</section>

<!-- Main Content Ends -->
