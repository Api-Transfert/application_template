<link rel="stylesheet" type="text/css" href="<?=bs('public/assets/nestable/jquery.nestable.css') ?>" />
<style>
    #nestable_list_1{
        max-width: none;
    }
    .dd-handle{
        display: inline-block;
        min-width:70%;
    }
    .pop-content{
        visibility: hidden;
        display: inline-block;
    }

    .dd-list .dd-list {
        padding-left: 83px;
    }

    .pop-container:hover .pop-content{
        visibility: visible !important;
    }
</style>
<div class="page-container row-fluid container-fluid">
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Menu Builder</h1>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="col-lg-12">
                    <!--progress bar start-->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="dis-inline-block">
                                <button class="btn btn-primary" onclick="save_menu_order()"><i class="fa fa-check"></i> Save Changes</button>
                            </div>
                            <div class="dis-inline-block pull-right">
                                <button id="loading-btn" class="btn btn-warning" data-toggle="modal" data-target="#headModel"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Head Permission</button>
                                <a class=" btn btn-success " data-toggle="modal" href="#myModal"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Permission </a>
                            </div>
                        </header>
                        <div class="panel-body">
                            <div class="container" style="max-width: 50em">
                                <div class="dd" id="nestable_list_1">
                                    <ol class="dd-list text-left">
                                        <?php foreach ($head_permissions as $head_perm) : ?>
                                            <li draggable="true" class="dd-item pop-container" id="perm_<?=$head_perm->perm_id ?>" data-name="<?=$head_perm->perm_name;?>" data-id="<?=$head_perm->perm_id ?>">
                                                <div class="pop-content">
                                                    <a href="##" class="btn-link delete_perm m-r-10 no-padding" data-id="<?=$head_perm->perm_id?>" data-target="#perm_<?=$head_perm->perm_id ?>">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="##" class="btn-link update m-r-5 no-padding" data-level="<?=$head_perm->level ?>" data-id="<?= $head_perm->perm_id ?>">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="dd-handle text-left">
                                                    <i class=" <?= $head_perm->icon ?>"></i> <?= $head_perm->perm_name ?>
                                                </div>
                                                <ol class="dd-list">
                                                    <?php foreach ($sub_permissions as $sub_perm) : ?>

                                                        <?php
                                                        if ($head_perm->perm_id == $sub_perm->parent_id) : ?>
                                                            <li class="dd-item pop-container" idt="sub_perm_<?=$sub_perm->perm_id ?>" data-id="<?= $sub_perm->perm_id ?>">
                                                                <div class="pop-content">
                                                                    <a href="##" data-id="<?= $sub_perm->perm_id ?>" class="btn-link m-r-10" data-target="#sub_perm_<?=$sub_perm->perm_id ?>" style="padding-left:5px">
                                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="##" data-level="<?= $sub_perm->level ?>" data-id="<?= $sub_perm->perm_id ?>" class="btn-link update">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="dd-handle text-left">
                                                                    <i class=" <?= $sub_perm->icon ?>"></i> <?= $sub_perm->perm_name ?>
                                                                </div>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ol>
                                            </li>
                                        <?php endforeach; ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </section>
</div>


<!-- Head Permission Modal -->
<div class="modal fade" id="headModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Head Permission</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu') ?>" method="post" role="form">
                    <div class="form-group">
                        <label class="bmd-label-floating">Head Permission Name </label>
                        <input type="text" name="perm_name" id="perm" class="form-control" placeholder="example.. Dashboard,Users etc" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Add Icon </label>
                        <input type="text" name="icon" id="icon" class="form-control" placeholder='example.. <i class="fa fa-trash text-danger" aria-hidden="true"></i>' required>
                        <p class="help-block">Just copy and paste icons from font Awesome</p>
                    </div>
                    <div class="form-group">
                        </label> <label class="bmd-label-floating">Add URL (Optional)
                            <input type="text" name="url" id="url" class="form-control" placeholder="example .. Module/Controller/Function">
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
                <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Permission</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="" action="<?= base_url('menu/sub_permission') ?>" method="post" role="form">
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
                        <label class="bmd-label-floating"> Permission Name </label>
                        <input type="text" name="perm" id="perm" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="bmd-label-floating"> Icon</label>
                        <input type="text" name="perm_icon" id="perm_icon" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="bmd-label-floating"> Add Url </label>
                        <input type="text" name="url" id="url" class="form-control" required>
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
                <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-pencil" aria-hidden="true"></i> Update Head Permission</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/update_perm') ?>" method="post" role="form">
                    <div class="form-group">
                        <label class="bmd-label-floating"> Head Permission Name </label>
                        <input type="text" name="perm_name" id="update_perm" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Add icon </label>
                        <input type="text" name="icon" id="update_icon" class="form-control" value=''>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Add URL (Optional) </label>
                        <input type="text" name="url" id="update_url" class="form-control" value="">
                    </div>
                    <input type="hidden" name="id" id="head_id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times-circle" aria-hidden="true"></i> Close</button>
                <button type="submit" class="btn btn-primary"> <i class="fa fa-pencil-o" aria-hidden="true"></i> Update changes</button>
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
                <h4 class="modal-title" id="myModalLabel">Update Sub Permission</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="" action="<?= base_url('menu/update_sub_permission') ?>" method="post" role="form">
                    <div class="form-group">
                        <label>Head Permission </label>
                        <select name="head_perm" value='' class="form-control" id="default_select" required>
                            <?php foreach ($head_permissions as $head) : ?>
                                <option value="<?= $head->perm_id ?>">
                                    <?= $head->perm_name ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Permission Name </label>
                        <input type="text" name="perm" id="sub_perm" class="form-control" placeholder="Permission Name" required>
                    </div>

                    <div class="form-group">
                        <label class="bmd-label-floating"> Icon</label>
                        <input type="text" name="perm_icon" id="perm_icon" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="bmd-label-floating">Add URL </label>
                        <input type="text" name="url" id="sub_url" class="form-control" placeholder="example .. Module/Controller/Function" required>
                    </div>
                    <input type="hidden" name="id" id="sub_id" value="">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times-circle" aria-hidden="true"></i> Close</button>
                <button type="submit" class="btn btn-primary"> <i class="fa fa-pencil-o" aria-hidden="true"></i> Update changes</button>
            </div>

            </form>

        </div>
    </div>
</div>x

<script src="<?=base_url('public/assets/nestable/jquery.nestable.js') ?>"></script>

<script>
    const nesetd_tag = '.dd';
    const nested_tag_items = '.dd-item';
    $(nesetd_tag).nestable({});
    $(document).on('click', '.update', function(event) {
        event.preventDefault();

        var level = $(this).attr('data-level');
        var id = $(this).attr('data-id');

        $.ajax({

            url: base_url+'menu/get_perm/'+id,
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
                    $('#default_select').val(obj.parent_id);
                    $('#sub_perm').val(obj.perm_name);
                    $('#sub_url').val(obj.url);
                    $('#sub_id').val(obj.perm_id)
                }
            }

        })
    });

    function save_menu_order() {
        const items = $(nested_tag_items);
        var item_order_data = {};
        var item_parents = {};
        var total_child = 0;


        for(var i=0; i<items.length; i++){
            var item = $(items)[i];
            var item_id = $(item).attr('data-id');

            item_order_data[''+item_id+''] = (i+1);

            var childs = $(item).find('.dd-item');
            if(childs.length > 0){
                console.log('found child');
                for(var u=0; u<childs.length; u++){
                    var child = $(childs)[u];
                    var child_id = $(child).attr('data-id');
                    total_child++;
                    item_parents[''+child_id+''] = item_id;

                }
            }

        }


        console.log(item_parents);

        $.post(base_url+'menu/reorder_menu',item_order_data , function () {
            //refresh();
        });

        $.post(base_url+'menu/update_menu_parent',item_parents , function () {
            refresh();
        });


    }

    $(document).on('click','.delete_perm',{passive:true},function () {
        const id = $(this).attr('data-id');
        const tag = $($(this).attr('data-target'));
        function delete_perm(){
            $.post(base_url+'menu/delete_perm/'+id,{},function () {
                show_message('success','Permission Delete Successfully');
                $(tag).hide('slow');
                setTimeout(function () {
                    $(tag).remove();
                },500);
            })
        }

        swal_confirm('','Are you sure', {yes:delete_perm})
    });
</script>