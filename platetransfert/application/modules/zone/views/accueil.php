<!-- START CONTAINER -->
<div class="page-container row-fluid container-fluid">

    <!-- SIDEBAR - START -->

 
    <!--  SIDEBAR - END -->

    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
						<h1 class="title">Zones</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                </div>
            </div>

            <div class="clearfix"></div>
            <!-- MAIN CONTENT AREA STARTS -->


            <div class="col-lg-12">
                <section class="box" style="padding: 10px 20px">
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
                            id="table"
                    >
                        <thead>
                        <!-- <tr>
                            <th rowspan="2" data-checkbox="true" data-valign="middle"></th>
                            <th colspan="7" data-align="center">Header</th>
                        </tr> -->
                        <tr>
                            <th data-field="date" data-sortable="true" data-switchable="true">Date</th>
                            <th data-field="name" data-sortable="true" data-switchable="true">Nom</th>
                            <th data-field="status" data-sortable="true" data-switchable="true">Description</th>
                            <th data-field="description" data-sortable="true" data-switchable="true">Status</th>
                            <th data-field="actions" data-sortable="true">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

						<?php if (count($zones) > 0) : ?>
                    <?php foreach($zones as $zone):?>
                        <tr>
							<td><?=$zone->reseauDate?></td>
                            <td><?=$zone->reseauName?></td>
                            <td><?=substr("$zone->reseauDescription" ,0,50);?>  </td>
                            <td>
                                <?php if($zone->resauStatus == '1'):; $check='checked'?>
                                    <button id="reseau_st_<?=$zone->reseauId;?>" class="btn-link"><i class="fa fa-check text-success"></i></button>
                                <?php else : $check = '';?>
                                    <button id="reseau_st_<?=$zone->reseauId;?>" class="btn-link"><i class="fa fa-times text-danger"></i></button>
                                <?php endif;?>
                            </td>
							<td>
                                <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>Actions</span> <span class="caret m-l-10"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="reseau_view" data-id="<?=$zone->reseauId?>" href="##"><i class="fa fa-eye"></i> Voir</a></li>
                                        <li><a class="reseau_edit" data-id="<?=$zone->reseauId?>" href="##"><i class="fa fa-edit"></i> Modifier</a></li>
                                        <li><a class="reseau_delete" data-row="#row_<?=$zone->reseauId;?>" data-id="<?=$zone->reseauId?>" href="##"><i class="fa fa-trash"></i> Supprimer</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="p-t-3 p-b-3 p-l-20 p-r-20">
                                                <span>Status</span>
                                                <div class="custom-switch custom-switch-xs pl-0 dis-inline-block t-middle pull-right">
                                                    <input class="custom-switch-input" id="swtich_struc_<?=$zone->reseauId;?>" type="checkbox" <?=$check?>>
                                                    <label class="custom-switch-btn switch_reseau_state" data-id="<?=$zone->reseauId?>" data-st-tag="#reseau_st_<?=$zone->reseauId;?>" for="swtich_struc_<?=$zone->reseauId;?>"></label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                       
						<?php endforeach; ?>

						<?php else : ?>

							<tr>
								<td>
									No Zones Added Yet
								</td>
							</tr>

						<?php endif; ?>
                        </tbody>
                    </table>
                </section>
            </div>
            <div class="clearfix"></div>

            <!-- MAIN CONTENT AREA ENDS -->
        </div>
    </section>
</div>
<!-- END CONTAINER -->
<script>
    $(document).on('click','.switch_reseau_state',{passive:true},function () {
        const reseau_id = $(this).attr('data-id');
        const inp_tag = $('#'+$(this).attr('for'));
        const switch_init_state = $(inp_tag).prop('checked');
        const switch_final_state = !switch_init_state;
        const new_value = (switch_final_state === true)?'1':'0';
        const st_tag = $($(this).attr('data-st-tag'));
        var msg = ((switch_final_state === false)?'Confirmez-vous la désactivation de cette Zone ?' : 'Confirmez-vous l’activation de cette Zone ?');

        function update_reseau_status(){
            $.post(base_url+'zone/update_reseau_status',{'reseauId':reseau_id , 'new_status':new_value},function () {
                if(switch_final_state === false){
                    show_message('warning','Zone désactivé avec succès');
                    $(st_tag).html('<i class="fa fa-times text-danger"></i>');
                }
                else{
                    show_message('success','Zone activé avec succès');
                    $(st_tag).html('<i class="fa fa-check text-success"></i>');
                }
                $(inp_tag).prop('checked',switch_final_state);
            });
        }

        swal_confirm('Attention',msg,{yes : update_reseau_status});
    });

    $(document).on('click','.reseau_edit',{passive:true},function () {
        const reseau_id = $(this).attr('data-id');
        show_loader();
        $.post(base_url+'zone/edit_zone',{'reseauId':reseau_id},function (edit_reseau_form) {
            sweetDialog(edit_reseau_form,{size:'90%' , showCancelButton:false});
            enable_tooltip();
        })
    });

    $(document).on('click','#save_reseau_data',{passive:true},function () {
        if(validate_form('reseau_form')){
            $('#reseau_form').submit();
        }
    });

    $(document).on('click','#create_reseau',{passive:true},function () {
        show_loader();
        $.post(base_url+'structure/agence/create_reseau',{},function (create_str_form) {
            sweetDialog(create_str_form,{size:'90%' , showCancelButton:false});
            enable_tooltip();
        });
    });

    $(document).on('click','.reseau_delete',{passive:true},function () {
        const st_id = $(this).attr('data-id');
        const row_tag = $($(this).attr('data-row'));
        function delete_agence(){
            $.post(base_url+'structure/agence/delete_agence',{'reseau_id':st_id},function () {
                show_message('success','agence supprimé avec succès');
                $(row_tag).remove();
            })
        }
        swal_confirm('Attention !','Etre vous certain de vouloir suprimer cette agence ?',{yes:delete_agence},);


    });

    $(document).on('click','.reseau_view',{passive:true},function () {
        const reseau_id = $(this).attr('data-id');
        show_loader();
        $.post(base_url+'structure/agence/edit_agence',{'voir_agence':'voir_agence','reseau_id':reseau_id},function (view_structure) {
            sweetDialog(view_structure,{size:'90%' , showCancelButton:false});
            $('#reseau_form *').prop('disabled',true);
        });
    });

</script>