<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
      		<section class="panel">
      			<header class="panel-heading">
          			<i class="fa fa-users"></i> User Groups
				     <span class="tools pull-right">
				        <a href="javascript:;" class="fa fa-chevron-down"></a>
				        <a href="javascript:;" class="fa fa-times"></a>
				     </span>
      			</header>
      		<div class="panel-body">
      			<div class="table-responsive">
					
					<table id="dynamic-table" class="table table-striped table-bordered" cellspacing="0">
						<thead>
							<tr>
								<th>Role/Group</th>
								<th>Description</th>
							     <?php 
									
									//If user is admin
									if ($this->ion_auth->get_user_group() == 1) 
									{
								?>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
					
							<?php } ?>
						</thead>
						<tbody>
							<?php foreach ($groups as $group):?>
							<tr>
								<td>
								   <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?>
	   						    </td>
					           <td>
								   <?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?>
	   						    </td>

	   						<?php 
					
								//If user is admin
								if ($this->ion_auth->get_user_group() == 1) 
								{
							?>
	   						    <td>
	   						        <a href="<?= base_url('users/User_groups/edit_group')?>/<?= $group->id ?>">
	   						    		<button class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</button>
	   						    	</a>
	   						    </td>
	   						    <td>
	   						        <a href="<?= base_url('users/User_groups/delete_group')?>/<?= $group->id ?>"> 
	   						    	   	<button class="btn btn-danger btn-sm" disable>
	   						    	   		<i class="fa fa-trash"></i> Delete
	   						    	   	</button>
	   						    	</a> 
	   						    </td>
	   						<?php } ?>	 

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
