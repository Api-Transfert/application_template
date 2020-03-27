<div class="page-container row-fluid container-fluid">
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Tarif</h1>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <button class="btn btn-primary add_zone_tarif" data-type="emission"><i class="fa fa-plus"></i> Ajouter tarif</button>

                <section class="box">
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
                            <th data-field="Nom" data-sortable="true" data-switchable="true">Nom</th>
                            <th data-field="Date" data-sortable="true" data-switchable="true">Operation</th>
                            <th data-field="zone_emission" data-sortable="true" data-switchable="true">Zone d’émission</th>
                            <th data-field="zone_destination" data-sortable="true" data-switchable="true">Zone de destination</th>
                            <th data-field="grille" data-sortable="true" data-switchable="true">Grille</th>
                            <th data-field="type" data-sortable="true" data-switchable="true">Type</th>
                            <th data-field="Action" data-sortable="true" data-switchable="true">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach($zone_tarifs as $zt):?>
                            <tr id="row_<?=$zt->id;?>">
                                <td><?=$zt->zone_tarif_name;?></td>
                                <td><?=$zt->operation_name;?></td>
                                <td><?=$zt->zone_emission;?></td>
                                <td><?=$zt->zone_destination;?></td>
                                <td><?=$zt->grille;?></td>
                                <td><?=$zt->tarif_type;?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>Actions</span> <span class="caret m-l-10"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="##" class="edit_tarif" data-id="<?=$zt->id;?>"><i class="fa fa-edit"></i> Modifier</a></li>
                                            <li><a href="##" class="delete_tarif" data-id="<?=$zt->id;?>" data-row="#row_<?=$zt->id;?>"><i class="fa fa-trash"></i> Supprimer</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>

                    </table>
                </section>
            </div>

        </div>
    </section>
</div>

<script>
    const new_zone_tarif_form = '<form action="<?=base_url('tarification/zone_tarif/create');?>" id="zone_tarif_form" class="ajax-form text-left">'+
        '    <div class="row">'+
        '        <div class="col-sm-6">'+
        '            <div class="form-group">'+
        '                <label for="">Nom</label>'+
        '                <input name="zone_tarif_name" type="text" class="form-control">'+
        '            </div>'+
        '        </div>'+
        '        <div class="col-sm-6">'+
        '            <div class="form-group">'+
        '                <label>Type</label>'+
        '                <div class="controls">'+
        '                    <input name="tarif_type" tabindex="5" type="radio" id="minimal-checkbox-1" class="icheck-minimal-green" checked value="1">'+
        '                    <label class="icheck-label form-label" for="minimal-checkbox-1">Global</label>'+
        '                    <input name="tarif_type" tabindex="5" type="radio" id="minimal-checkbox-2" class="icheck-minimal-red" value="2">'+
        '                    <label class="icheck-label form-label" for="minimal-checkbox-2">Spécifique </label>'+
        '                </div>'+
        '            </div>'+
        '        </div>'+
        '    </div>'+
        '    <div class="row">'+
        '        <div class="col-sm-6">'+
        '            <div class="form-group">'+
        '                <label for="tarif_zone_emis">Zone d’émission</label>'+
    '                <select name="tarif_zone_emis" id="tarif_zone_emis" class="select2" required>' +
    '                       <option value=""></option>'+
    '                    <?php $dsp_ze = []; foreach($zones_emissions as $ze):?>'+
                                '<?php if(!in_array($ze->id , $dsp_ze)):;?>'+
    '                                <option value="<?=$ze->id;?>"><?=str_replace("'",'’',$ze->name);?></option>'+
                                '<?php endif;?>'+
    '                    <?php array_push($dsp_ze , $ze->id); endforeach;?>'+
    '                </select>'+
    '            </div>'+
    '        </div>'+
    '        <div class="col-sm-6">'+
    '            <div class="form-group">'+
    '                <label for="tarif_zone_dest">Zone de destination</label>'+
    '                <select name="tarif_zone_dest" id="tarif_zone_dest" class="select2" required>'+
    '                       <option value=""></option>'+
    '                    <?php $dsp_zd = []; foreach($zones_destination as $zd):?>'+
    '                           <?php if(!in_array($zd->id , $dsp_zd)):;?>'+
    '                               <option value="<?=$zd->id;?>"><?=str_replace("'",'’',$zd->name);?></option>'+
    '                           <?php endif;?>'+
    '                    <?php array_push($dsp_zd , $zd->id); endforeach;?>'+
    '                </select>'+
    '            </div>'+
    '        </div>'+
    '    </div>'+
    '    <div class="row">'+
    '        <div class="col-sm-6">'+
    '            <div class="form-group">'+
    '                <label for="opration_type_id">Type</label>'+
    '                <select name="opration_type_id" id="opration_type_id" class="select2" required>'+
    '                       <option value=""></option>'+
    '                    <?php foreach($operations as $op):?>'+
    '                        <option value="<?=$op->id;?>"><?=str_replace("'",'’',$op->operation_name);?></option>'+
    '                    <?php endforeach;?>'+
    '                </select>'+
    '            </div>'+
    '        </div>'+
    '        <div class="col-sm-6">'+
    '            <div class="form-group">'+
    '                <label for="opration_type_id">Grille</label>'+
    '                <select name="tarif_id" id="opration_type_id" class="select2"> required'+
    '                       <option value=""></option>'+
    '                    <?php foreach($grille as $g):?>'+
    '                        <option value="<?=$g->id;?>"><?=str_replace("'",'’',$g->tarifName);?></option>'+
    '                    <?php endforeach;?>'+
    '                </select>'+
    '            </div>'+
    '        </div>'+
    '    </div>'+
    '    <div class="text-right">'+
    '        <button type="submit" id="grille_form_submit_btn" class="btn btn-primary">Ajouter</button>'+
    '    </div>'+
    '</form>';
    $(document).on('click','.add_zone_tarif',{passive:true},function () {
        sweetDialog(new_zone_tarif_form,{size:((mobile)?'100%':'70%')});
        setTimeout(function(){
            init_select2();
        },100);
    });

    $(document).on('click','.edit_tarif',{passive:true},function () {
        const id = $(this).attr('data-id');
        $.post(base_url+'tarification/zone_tarif/get_zone_data',{id:id},function (zone_data) {
            zone_data = $.parseJSON(zone_data);
            if(zone_data.status === true){
                const zone_form = '<form action="'+base_url+'tarification/zone_tarif/edit/'+id+'" id="zone_tarif_form" class="ajax-form text-left">'+
                    '    <div class="row">'+
                    '        <div class="col-sm-6">'+
                    '            <div class="form-group">'+
                    '                <label for="">Nom</label>'+
                    '                <input name="zone_tarif_name" value="'+zone_data.zone_tarif_name+'" type="text" class="form-control">'+
                    '            </div>'+
                    '        </div>'+
                    '        <div class="col-sm-6">'+
                    '            <div class="form-group">'+
                    '                <label>Type</label>'+
                    '                <div class="controls">'+
                    '                    <input name="tarif_type" tabindex="5" type="radio" id="minimal-checkbox-1" class="icheck-minimal-green tarif_type_1" value="1">'+
                    '                    <label class="icheck-label form-label" for="minimal-checkbox-1">Global</label>'+
                    '                    <input name="tarif_type" tabindex="5" type="radio" id="minimal-checkbox-2" class="icheck-minimal-red tarif_type_2" value="2">'+
                    '                    <label class="icheck-label form-label" for="minimal-checkbox-2">Spécifique </label>'+
                    '                </div>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="row">'+
                    '        <div class="col-sm-6">'+
                    '            <div class="form-group">'+
                    '                <label for="tarif_zone_emis">Zone d’émission</label>'+
                    '                <select name="tarif_zone_emis" id="tarif_zone_emis" class="select2" required>' +
                    '                       <option value=""></option>'+
                    '                    <?php $dsp_ze = []; foreach($zones_emissions as $ze):?>'+
                    '                       <?php if(!in_array($ze->id , $dsp_ze)):;?>'+
                    '                                <option id="ze_<?=$ze->id;?>" value="<?=$ze->id;?>"><?=str_replace("'",'’',$ze->name);?></option>'+
                    '                       <?php endif;?>'+
                    '                    <?php array_push($dsp_ze , $ze->id); endforeach;?>'+
                    '                </select>'+
                    '            </div>'+
                    '        </div>'+
                    '        <div class="col-sm-6">'+
                    '            <div class="form-group">'+
                    '                <label for="tarif_zone_dest">Zone de destination</label>'+
                    '                <select name="tarif_zone_dest" id="tarif_zone_dest" class="select2" required>'+
                    '                       <option value=""></option>'+
                    '                    <?php $dsp_zd = []; foreach($zones_destination as $zd):?>'+
                    '                           <?php if(!in_array($zd->id , $dsp_zd)):;?>'+
                    '                               <option id="zd_<?=$zd->id;?>" value="<?=$zd->id;?>"><?=str_replace("'",'’',$zd->name);?></option>'+
                    '                           <?php endif;?>'+
                    '                    <?php array_push($dsp_zd , $zd->id); endforeach;?>'+
                    '                </select>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="row">'+
                    '        <div class="col-sm-6">'+
                    '            <div class="form-group">'+
                    '                <label for="opration_type_id">Type</label>'+
                    '                <select name="opration_type_id" id="opration_type_id" class="select2" required>'+
                    '                       <option value=""></option>'+
                    '                    <?php foreach($operations as $op):?>'+
                    '                        <option id="op_<?=$op->id;?>" value="<?=$op->id;?>"><?=str_replace("'",'’',$op->operation_name);?></option>'+
                    '                    <?php endforeach;?>'+
                    '                </select>'+
                    '            </div>'+
                    '        </div>'+
                    '        <div class="col-sm-6">'+
                    '            <div class="form-group">'+
                    '                <label for="opration_type_id">Grille</label>'+
                    '                <select name="tarif_id" id="opration_type_id" class="select2"> required'+
                    '                       <option value=""></option>'+
                    '                    <?php foreach($grille as $g):?>'+
                    '                        <option id="g_<?=$g->id;?>" value="<?=$g->id;?>"><?=str_replace("'",'’',$g->tarifName);?></option>'+
                    '                    <?php endforeach;?>'+
                    '                </select>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="text-right">'+
                    '        <button type="submit" id="grille_form_submit_btn" class="btn btn-primary">Modifier</button>'+
                    '    </div>'+
                    '</form>';

                sweetDialog(zone_form , {size:((mobile)?'100%':'70%')});
                setTimeout(function(){
                    $('#ze_'+zone_data.tarif_zone_emis+'').attr('selected','selected');
                    $('#zd_'+zone_data.tarif_zone_dest+'').attr('selected','selected');
                    $('#g_'+zone_data.tarif_id+'').attr('selected','selected');
                    $('#op_'+zone_data.opration_type_id+'').attr('selected','selected');
                    $('.tarif_type_'+zone_data.tarif_type).prop('checked',true);
                    init_select2();
                },100);
            }
        });
    });

    $(document).on('click','.delete_tarif',{passive:true},function () {
        const id = $(this).attr('data-id');
        const row = $($(this).attr('data-row'));
        function delete_zone(){
            $.post(base_url+'tarification/zone_tarif/delete',{id:id},function (response) {
                response = $.parseJSON(response);
                if(response.status === true){
                    show_message('success',response.message);
                    remove_tag(row);
                }
            });
        }

        sweetConfirm('Etre vous certains de vouloir supprimer ce tarif ?',{yes:delete_zone});
    });
</script>