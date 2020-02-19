<div class="page-container row-fluid container-fluid">
    <section id="main-content">
        <div class="wrapper main-wrapper row">
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Roles & Permissions</h1>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <section class="box">
                    <header class="panel-heading">
                        <a href="##" class="pull-right"> <i class="fa fa-print text-black fs-20 m-t-10 m-r-10"></i> </a>
                        <span class="tools pull-right"> </span>
                    </header>
                    <div class="panel-body">
                        <table
                                data-toggle="table"
                                data-pagination="true"
                                data-search="true"
                                data-search-align="left"
                                data-show-columns="true"
                                data-show-toggle="true"
                                data-show-refresh="true"
                                data-show-fullscreen="true"
                                data-show-pagination-switch="true"
                                data-pagination-pre-text="Previous"
                                data-pagination-next-text="Next"
                                data-pagination-h-align="left"
                                data-pagination-detail-h-align="right"
                                data-show-export="true"
                                data-page-list="[10,20,30,40,50, All]"
                                data-toolbar="#toolbar"
                                data-click-to-select="true"
                                id="table">
                            <thead>
                            <tr>
                                <th data-field="field_1" data-sortable="true" data-switchable="true">Role/Group</th>
                                <th data-field="field_2" data-sortable="true" data-switchable="true">Description</th>
                                <th data-field="field_3" data-sortable="true" data-switchable="true">Action</th>
                            </tr>
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
                                            <div class="btn-group">
                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>Actions</span> <span class="caret m-l-10"></span></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="<?= base_url('users/User_groups/edit_group/'.$group->id)?>"><i class="fa fa-edit"></i> Modifier Permission</a></li>
                                                    <li><a href="<?=base_url('users/User_groups/delete_group/'.$group->id)?>" disabled><i class="fa fa-trash"></i> Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    <?php } ?>

                                </tr>
                            <?php endforeach;?>
                            </tbody>

                        </table>
                    </div>
                </section>
            </div>

        </div>
    </section>
</div>