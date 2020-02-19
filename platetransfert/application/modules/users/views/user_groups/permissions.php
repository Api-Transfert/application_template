<!-- Main content start -->

<link rel="stylesheet" type="text/css" href="<?=bs('public/assets/nestable/jquery.nestable.css') ?>" />

<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <!--progress bar start-->
                <section class="panel">
                    <header class="panel-heading">
                        <i class="fa fa-plus-circle"></i> Add Permissions

                        <span class="pull-right">
                            <button id="loading-btn" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#headModel"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Head Permission</button>
                            <a class=" btn btn-success btn-xs" data-toggle="modal" href="#myModal"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Permission </a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="col-lg-6 col-lg-offset-2">
                            <div class="dd" id="nestable_list_1">
                                <ol class="dd-list">
                                    <?php foreach ($head_permissions as $head_perm) : ?>
                                        <li class="dd-item" data-id="<?= $head_perm->perm_id ?>">
                                            <div class="dd-handle">
                                                <?= $head_perm->icon ?> <?= $head_perm->perm_name ?>
                                                <a href="<?=bs() ?>users/Permissions/delete_perm/<?= $head_perm->perm_id ?>" class="pull-right" style="padding-left:5px">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                                <a href="" data-level="<?= $head_perm->level ?>" data-id="<?= $head_perm->perm_id ?>" class="pull-right update">
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <ol class="dd-list">
                                                <?php foreach ($sub_permissions as $sub_perm) : ?>

                                                    <?php
                                                            if ($head_perm->perm_id == $sub_perm->parent_id) :
                                                                ?>
                                                        <li class="dd-item" data-id="<?= $sub_perm->perm_id ?>">
                                                            <div class="dd-handle">
                                                                <?= $sub_perm->icon ?> <?= $sub_perm->perm_name ?>

                                                                <a href="<?=bs() ?>users/Permissions/delete_perm/<?= $sub_perm->perm_id ?>" class="pull-right" style="padding-left:5px">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="" data-level="<?= $sub_perm->level ?>" data-id="<?= $sub_perm->perm_id ?>" class="pull-right update">
                                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </li>

                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ol>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="dd-item" data-id="11">
                                    <div class="dd-handle">Item 11</div>
                                </li>
                                <li class="dd-item" data-id="12">
                                    <div class="dd-handle">Item 12</div>
                                </li> -->
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row" style="padding-top: 3%">	
						<div class="col-md-12">
							<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Perm Id</th>
										<th>Head Permission</th>
										<th>Sub Permission</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>

								<?php foreach ($head_permissions as $key => $head) : ?>
									<?php foreach ($sub_permissions as $key => $sub) :  ?>
									<tr>
										<td><?php echo $head->perm_id ?></td>
										<td><?php echo $head->perm_name ?></td>
										<?php if ($head->perm_id == $sub->parent_id) : ?>
											<td><?php echo $head->perm_name ?></td>
										<?php endif; ?>
										<td>
											<button class="btn btn-info btn-sm update" edit="<?= $head->perm_id ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
										</td>
										<td>
											<button class="btn btn-danger btn-sm" id_del="<?= $head->perm_id ?>" id="delete"><i class="fa fa-trash"></i> Delete</button>
										</td>
									</tr>
									<?php endforeach ?>
								<?php endforeach ?>

								</tbody>
							</table>
						</div>
					</div> -->
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

<!-- Main Content Ends -->

<!-- Head Permission Modal -->
<div class="modal fade" id="headModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Head Permission</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('users/Permissions') ?>" method="post" role="form">
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a">Head Permission Name </font>&nbsp;
                        </label>
                        <input type="text" name="perm_name" id="perm" class="form-control" placeholder="example.. Dashboard,Users etc" required>
                    </div>
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a">Add Icon </font>&nbsp;
                        </label>
                        <input type="text" name="icon" id="icon" class="form-control" placeholder='example.. <i class="fa fa-trash" aria-hidden="true"></i>' required>
                        <p class="help-block">Just copy and paste icons from font Awesome</p>
                    </div>
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a"> Add URL (Optional) </font>&nbsp;
                        </label>
                        <input type="text" name="url" id="url" class="form-control" placeholder="example .. Module/Controller/Function">
                        <p class="help-block">Specify Module Name / Controller Name / function Name</p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            </form>

        </div>
    </div>
</div>

<!-- Sub Permission Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Permission</h4>
            </div>
            <div class="modal-body">
                <form class="" action="<?= base_url('users/Permissions/sub_permission') ?>" method="post" role="form">
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a"> Head Permission </font>&nbsp;
                        </label>
                        <select name="head_perm" class="form-control" required>
                            <option value="">Select Head Permision</option>
                            <?php foreach ($head_permissions as $head) : ?>
                                <option value="<?= $head->perm_id ?>"><?= $head->perm_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a">Permission Name </font>&nbsp;
                        </label>
                        <input type="text" name="perm" id="perm" class="form-control" placeholder="Permission Name" required>
                    </div>
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a"> Add URL </font>&nbsp;
                        </label>
                        <input type="text" name="url" id="url" class="form-control" placeholder="example .. Module/Controller/Function" required>
                        <p class="help-block">Specify Module Name / Controller Name / function Name</p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            </form>

        </div>
    </div>
</div>

<!-- Update Head Permission Modal -->
<div class="modal fade" id="updateheadModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Update Head Permission</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('users/Permissions/update_perm') ?>" method="post" role="form">
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a">Head Permission Name </font>&nbsp;
                        </label>
                        <input type="text" name="perm_name" id="update_perm" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a">Add Icon </font>&nbsp;
                        </label>
                        <input type="text" name="icon" id="update_icon" class="form-control" value=''>
                        <p class="help-block">Just copy and paste icons from font Awesome</p>
                    </div>
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a"> Add URL (Optional) </font>&nbsp;
                        </label>
                        <input type="text" name="url" id="update_url" class="form-control" value="">
                        <p class="help-block">Specify Module Name / Controller Name / function Name</p>
                    </div>
                    <input type="hidden" name="id" id="head_id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times-circle" aria-hidden="true"></i> Close</button>
                <button type="submit" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update changes</button>
            </div>

            </form>

        </div>
    </div>
</div>

<!-- Sub Permission Modal -->
<div class="modal fade" id="updatesubmyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update Sub Permission</h4>
            </div>
            <div class="modal-body">
                <form class="" action="<?= base_url('users/Permissions/update_sub_permission') ?>" method="post" role="form">
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a"> Head Permission </font>&nbsp;
                        </label>
                        <select name="head_perm" value='' class="form-control" id="default_select" required>
                            <?php foreach ($head_permissions as $head) : ?>
                                <option value="<?= $head->perm_id ?>">
                                    <?= $head->perm_name ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a">Permission Name </font>&nbsp;
                        </label>
                        <input type="text" name="perm" id="sub_perm" class="form-control" placeholder="Permission Name" required>
                    </div>
                    <div class="form-group">
                        <label>
                            <font color="#8bc34a"> Add URL </font>&nbsp;
                        </label>
                        <input type="text" name="url" id="sub_url" class="form-control" placeholder="example .. Module/Controller/Function" required>
                        <p class="help-block">Specify Module Name / Controller Name / function Name</p>
                    </div>
                    <input type="hidden" name="id" id="sub_id" value="">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times-circle" aria-hidden="true"></i> Close</button>
                <button type="submit" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update changes</button>
            </div>

            </form>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $("body").on('click', '.update', function(event) {
            event.preventDefault();

            var level = $(this).attr('data-level');
            var id = $(this).attr('data-id');

            $.ajax({

                url: "<?=bs('users/permissions/get_perm') ?>/" + id,
                type: 'POST',
                data: {
                    id: id,
                    level: level,
                },
                success: function(success) {
                    var obj = $.parseJSON(success);
                    if (obj.level == 0) {

                        $('#updateheadModel').modal('show');
                        $('#update_perm').val(obj.perm_name);
                        $('#update_icon').val(obj.icon);
                        $('#update_url').val(obj.url);
                        $('#update_url').val(obj.url);
                        $('#head_id').val(obj.perm_id);
                    } else {
                        $('#updatesubmyModal').modal('show');
                        $('#default_select').val(obj.parent_id)
                        $('#sub_perm').val(obj.perm_name)
                        $('#sub_url').val(obj.url)
                        $('#sub_id').val(obj.perm_id)
                    }
                }

            })
        })
    });
</script>