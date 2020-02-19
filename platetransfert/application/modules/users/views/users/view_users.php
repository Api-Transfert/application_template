<!-- Main content start -->
<style>
    img{width: auto}
</style>

<div class="page-container row-fluid container-fluid">
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>
            <div>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Menu Builder</h1>
                    </div>
                </div>
            </div>


            <div>
                <section class="box">
                    <header class="panel-heading">
                        <a href="<?=bs('users/print_with_dompdf') ?>" class="pull-right"> <i class="fa fa-print text-black fs-20 m-t-10 m-r-10"></i> </a>
                        <span class="tools pull-right">
				     </span>
                        <div style="width:100%;overflow: auto;">
                            <ol class="breadcrumb" id="table_resumer_container">

                            </ol>
                        </div>
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
                                <th data-field="picture" data-sortable="true" data-switchable="true">Picture</th>
                                <th data-field="fname" data-sortable="true" data-switchable="true">Nom</th>
                                <th data-field="lname" data-sortable="true" data-switchable="true">Pénom</th>
                                <th data-field="email" data-sortable="true" data-switchable="true">Email</th>
                                <th data-field="ugroup" data-sortable="true" data-switchable="true">Groupe</th>
                                <th data-field="status" data-sortable="true" data-switchable="true">Status</th>
                                <th data-field="action" data-sortable="true" data-switchable="true">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $groups = [];
                            foreach ($users as $user):?>
                                <tr id="row_<?php echo $user->id?>">
                                    <td><a href="##"><img src="<?php echo base_url('uploads/avatar/'.$user->picture) ;?>" class="preview" alt="" width="40px" height="40px"></a></td>
                                    <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo limit_string(htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8') , 15) ?></td>
                                    <td>
                                        <?php

                                        foreach ($user->groups as $group)
                                        {
                                            array_push($groups , $group->name.'***'.$group->bgcolor);
                                            ?> <span class="badge fs-12 m-r-4" style="background:<?=$group->bgcolor?>"><?=htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')?></span><?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="custom-switch custom-switch custom-switch-xs pl-0">
                                            <input class="custom-switch-input" id="user_<?php echo $user->id?>_switch" type="checkbox" <?=(($user->id == $this->session->userdata('user_id')) or $user->id == '1')?"disabled":null?> <?php echo ($user->active)?'checked':NULL ;?>>
                                            <label class="custom-switch-btn switch_user_status" data-toggle="tooltip" data-placement="top" title="<?php echo ($user->active)?'Désactiver':"Activer" ;?>" for="user_<?php echo $user->id?>_switch" data-user_id="<?php echo $user->id ;?>"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>Actions</span> <span class="caret m-l-10"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?=base_url('users/edit_user/'.$user->id);?>"><i class="fa fa-edit"></i> Modifier</a></li>
                                                <li><a class="delete_user" data-row="#row_<?php echo $user->id?>" href="##" data-id="<?=$user->id;?>" <?=(($user->id == $this->session->userdata('user_id')) or $user->id == '1')?"disabled":null?>><i class="fa fa-trash"></i> Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach;?>
                            <div id="table_resumer" style="display: none;">
                                <li class="breadcrumb-item m-t-12"><span class="badge badge-primary m-r-5"><?php echo count($users);?></span> <a href="##" class="searching" data-search="">Tous</a> </li>
                                <?php
                                //fetch groups as distints values
                                $groupe = array_count_values($groups);
                                foreach ($groupe as $k=>$v)
                                {
                                    $grou_details =  explode('***',$k);
                                    ?>
                                    <li class="breadcrumb-item m-t-12"><span class="badge m-r-5" style="background-color: <?php echo $grou_details[1] ;?>"><?php echo $v ;?></span> <a href="##" class="searching" data-search="<?php echo $grou_details[0];?>"><?php echo $grou_details[0] ;?></a> </li>
                                    <?php
                                }
                                ?>
                            </div>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>

        </div>
    </section>
</div>

<script>

    $(document).ready(function () {
        $('#table_resumer_container').append($('#table_resumer').html());
        $('#table_resumer').remove();
    });

    $(document).on('click','.delete_user',{passive:true},function () {
        const user_id = $(this).attr('data-id');
        const row = $($(this).attr('data-row'));
        function delete_user(){
            $.post(base_url+'users/delete_user/'+user_id , {} ,function () {
                show_message('success','Compte utilisateur supprimée avec succès');
                $(row).hide('slow');
                setTimeout(function () {
                    $(row).remove();
                },500);
            })
        }

        swal_confirm('Attention !','Etre vous certain de vouloir supprimer cet utilisateur ?',{yes:delete_user})
    });

    $(document).on('click','.switch_user_status',{passive:true},function () {
        custom_btn_by_id = $('#'+$(this).attr('for'));

        if($(custom_btn_by_id).prop('disabled') === false)
        {

            switch_init_state = custom_btn_by_id.prop('checked'); //get the state of the switch before the switch changes
            switch_final_state = !switch_init_state;

            let user_id = $(this).attr('data-user_id');
            let label = $(this);
            if(switch_final_state === false)
            {
                function deactivae_user(){
                    $.post(base_url+'ajax/run_query',{'sql_query':'update users set active = 0 where id = '+user_id+''},function () {
                        show_message('warning','Compte Utilisateur deactiver');
                        $(label).attr('title','Activer');
                        $(label).attr('data-original-title','Activer');
                    })
                }
                swal_confirm('',"Confirmez-vous la désactivation de cet utilisateur ?",{no:reset_btn_state,yes:deactivae_user});


            }
            else {
                function activae_user(){
                    $.post(base_url+'ajax/run_query',{'sql_query':'update users set active = 1 where id = '+user_id+''},function () {
                        show_message('success','Compte Utilisateur activer');
                        $(label).attr('title','Désactiver');
                        $(label).attr('data-original-title','Désactiver');
                    })
                }
                swal_confirm('',"Confirmez-vous l’activation de cet utilisateur ?",{no:reset_btn_state, yes:activae_user});
            }
        }


    });

    $(document).on('click','.searching',{passive:true},function () {
        var search_box = $('.form-control.search-input');
        search_box.val(this.getAttribute('data-search'));
        search_box.keyup();
    });

</script>

