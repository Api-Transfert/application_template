<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                All Task List
                <span class="pull-right">
                    <a href="<?= bs('todo/completed_tasks/') ?>" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Completed Tasks</a>
                    <a class=" btn btn-success btn-xs" data-toggle="modal" href="#myModal"> Create New Task</a>
                </span>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-12">
                            <form action="<?= bs('todo/search_tasks/search_tasks') ?>" method="get">
                                <div class="input-group"><input type="text" placeholder="Search Here" name="task" class="input-sm form-control"> <span class="input-group-btn">
                                <button type="submit" class="btn btn-sm btn-success"> Go!</button> </span></div>
                            </form>    
                        </div>
                    </div>
                </div>
                <table class="table table-hover p-table">
                    <thead>
                        <tr>
                            <th>Task Name</th>
                            <th>Task image</th>
                            <th>Description</th>
                            <th>Task Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (count($tasks) > 0) : ?>

                            <?php foreach ($tasks as $task) : ?>

                                <tr>
                                    <td class="p-name">
                                        <?= $task->task_name ?>
                                    </td>
                                    <td class="p-team">
                                        <?php
                                        if ($task->task_img != '') :
                                            ?>
                                            <img src="<?= $task->task_img ?>" alt="task image">
                                        <?php
                                        else :
                                            ?>
                                            <img src="<?= base_url() ?>public/img/Task.png" alt="task image">
                                        <?php endif;  ?>
                                    </td>
                                    <td >
                                        <?= $task->description ?>
                                    </td>
                                    <td>
                                        <span class="label label-primary"><?= $task->task_status ?></span>
                                    </td>
                                    <td>
                                        <?= date('d-m-Y', strtotime($task->created_at)) ?>
                                    </td>
                                    <td>
                                        <a href="<?= bs('todo/mark_completed/' . $task->id . '') ?>" class="btn btn-primary btn-xs"><i class="fa fa-check-circle" aria-hidden="true"></i> Mark Completed </a>
                                        <a href="#update" data-toggle="modal" edit="<?= $task->id ?>" class="btn btn-info btn-xs update"><i class="fa fa-pencil"></i> Edit </a>
                                        <a href="<?= bs('todo/delete/' . $task->id . '') ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php else : ?>

                            <tr>
                                <td>
                                    No Task Added Yet
                                </td>
                            </tr>

                        <?php endif; ?>

                    </tbody>
                </table>
        </section>
        <!-- page end-->


    </section>
</section>
<!--main content end-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Task</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <div class="panel-body">
                                <form role="form" method="post" action="<?= bs('todo/store') ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Task Title</label>
                                        <input type="text" class="form-control" name="task_title" placeholder="Enter Task Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea name="desc" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Image (Optional).</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>

                            </div>
                        </section>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success" type="submit">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>
<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update Task</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <div class="panel-body">
                                <form role="form" method="post" action="<?= bs('todo/update') ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Task Title</label>
                                        <input type="text" class="form-control" name="task_title" id="title" value="" placeholder="Enter Task Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea name="desc" class="form-control" id="desc"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Image (Optional).</label>
                                        <input type="file" class="form-control" name="image">
                                        <input type="hidden" name="old_img" value="" id="old_img">
                                        <input type="hidden" name="task_id" value="" id="task_id">
                                    </div>

                            </div>
                        </section>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success" type="submit">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("body").on('click', '.update', function(event) {
            event.preventDefault();
            // body...
            var id = $(this).attr('edit');

            $.ajax({

                url: "<?php bs('todo/edit') ?>/" + id,

                success: function(success) {
                    var obj = $.parseJSON(success);
                    $("#task_id").val(obj.id);
                    $("#title").val(obj.task_name);
                    $("#desc").val(obj.description);
                    $("#old_img").val(obj.task_img);
                }

            })
        })
    });
</script>