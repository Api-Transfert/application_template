<!-- START CONTENT -->
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row" style=''>

        <div class="container">
            <button id="create_structure" class="btn btn-primary"><i class="fa fa-plus"></i> crée </button>

        </div>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Structures</h1>
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
                    <tr>
                        <th data-field="nom" data-sortable="true" data-switchable="true">Nom</th>
                        <th data-field="type" data-sortable="true" data-switchable="true">Type</th>
                        <th data-field="solde" data-sortable="true" data-switchable="true">Solde</th>
                        <th data-field="pays" data-sortable="true">Pays</th>
                        <th data-field="status" data-sortable="true">Statut</th>
                        <th data-field="actions" data-sortable="true">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($stucture_data as $stuc):?>
                        <tr id="row_<?=$stuc->structureId;?>">
                            <td><?=$stuc->structureName?></td>
                            <td><?=$stuc->typeName?></td>
                            <td><?=$stuc->structureSoldeQuota?></td>
                            <td><?=$stuc->paysName?></td>
                            <td>
                                <?php if($stuc->structureActive == '1'):; $check='checked'?>
                                    <button id="struc_st_<?=$stuc->structureId;?>" class="btn-link"><i class="fa fa-check text-success"></i></button>
                                <?php else : $check = '';?>
                                    <button id="struc_st_<?=$stuc->structureId;?>" class="btn-link"><i class="fa fa-times text-danger"></i></button>
                                <?php endif;?>
                            </td>
                            <td>
                               <div class="btn-group">
                                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>Actions</span> <span class="caret m-l-10"></span></button>
                                   <ul class="dropdown-menu" role="menu">
                                       <li><a class="strc_view" data-id="<?=$stuc->structureId?>" href="##"><i class="fa fa-eye"></i> Voir</a></li>
                                       <li><a class="strc_edit" data-id="<?=$stuc->structureId?>" href="##"><i class="fa fa-edit"></i> Modifier</a></li>
                                       <li><a class="strc_delete" data-row="#row_<?=$stuc->structureId;?>" data-id="<?=$stuc->structureId?>" href="##"><i class="fa fa-trash"></i> Supprimer</a></li>
                                       <li class="divider"></li>
                                       <li>
                                           <div class="p-t-3 p-b-3 p-l-20 p-r-20">
                                               <span>Status</span>
                                               <div class="custom-switch custom-switch-xs pl-0 dis-inline-block t-middle pull-right">
                                                   <input class="custom-switch-input" id="swtich_struc_<?=$stuc->structureId;?>" type="checkbox" <?=$check?>>
                                                   <label class="custom-switch-btn switch_structure_state" data-id="<?=$stuc->structureId?>" data-st-tag="#struc_st_<?=$stuc->structureId;?>" for="swtich_struc_<?=$stuc->structureId;?>"></label>
                                               </div>
                                           </div>
                                       </li>
                                       <li class="divider"></li>
                                       <li><a class="strc_quota" data-id="<?=$stuc->structureId?>" href="##">Quota</a></li>
                                       <li><a class="strc_debit_credit" data-id="<?=$stuc->structureId?>" href="##">Débit / crédit</a></li>
                                       <li><a class="strc_seuil_alert" data-id="<?=$stuc->structureId?>" href="##">Seuils d’alerte</a></li>
                                       <li><a class="strc_transfert" data-id="<?=$stuc->structureId?>" href="##">Transferts</a></li>

                                   </ul>
                               </div>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </section>
        </div>
        <div class="clearfix"></div>

        <!-- MAIN CONTENT AREA ENDS -->
    </div>
</section>



<script>
  $(document).on('click','.switch_structure_state',{passive:true},function () {
      const structure_id = $(this).attr('data-id');
      const inp_tag = $('#'+$(this).attr('for'));
      const switch_init_state = $(inp_tag).prop('checked');
      const switch_final_state = !switch_init_state;
      const new_value = (switch_final_state === true)?'1':'0';
      const st_tag = $($(this).attr('data-st-tag'));
      var msg = ((switch_final_state === false)?'Confirmez-vous la désactivation de cette structure ?' : 'Confirmez-vous l’activation de cette structure ?');

      function update_structure_status(){
          $.post(base_url+'structure/update_stucture_status',{'structure_id':structure_id , 'new_status':new_value},function () {
              if(switch_final_state === false){
                  show_message('warning','Structure désactivé avec succès');
                  $(st_tag).html('<i class="fa fa-times text-danger"></i>');
              }
              else{
                  show_message('success','Structure activé avec succès');
                  $(st_tag).html('<i class="fa fa-check text-success"></i>');
              }
              $(inp_tag).prop('checked',switch_final_state);
          });
      }

      swal_confirm('Attention',msg,{yes : update_structure_status});
  });

  $(document).on('click','.strc_edit',{passive:true},function () {
      const structure_id = $(this).attr('data-id');
      show_loader();
      $.post(base_url+'structure/edit_structure',{'structure_id':structure_id},function (edit_str_form) {
          sweetDialog(edit_str_form,{size:'90%' , showCancelButton:false});
          enable_tooltip();
      })
  });
  
  $(document).on('click','#save_structure_data',{passive:true},function () {
      if(validate_form('structure_form')){
          $('#structure_form').submit();
      }
  });
  
  $(document).on('click','#create_structure',{passive:true},function () {
      show_loader();
      $.post(base_url+'structure/create_structure',{},function (create_str_form) {
          sweetDialog(create_str_form,{size:'90%' , showCancelButton:false});
          enable_tooltip();
      });
  });
  
  $(document).on('click','.strc_delete',{passive:true},function () {
        const st_id = $(this).attr('data-id');
        const row_tag = $($(this).attr('data-row'));
        function delete_structure(){
            $.post(base_url+'structure/delete_structure',{'structure_id':st_id},function () {
                show_message('success','Structure supprimé avec succès');
                $(row_tag).remove();

            })
        }
        swal_confirm('Attention !','Etre vous certain de vouloir suprimer cette Structure ?',{yes:delete_structure},);


    });

  $(document).on('click','.strc_view',{passive:true},function () {
        const structure_id = $(this).attr('data-id');
        show_loader();
        $.post(base_url+'structure/edit_structure',{'voir_structure':'voir_structure','structure_id':structure_id},function (view_structure) {
            sweetDialog(view_structure,{size:'90%' , showCancelButton:false});
            enable_tooltip();
            $('#structure_form *').prop('disabled',true);
        });
    });

  //fix pour bouton switch
  $(document).on('submit','form',{passive:true},function (e) {
      const form = $(this);
      if(!has_attr(form,'let_it_go')){
          e.preventDefault();
          $(form).attr('let_it_go' , 'submiting');
          //retirer l'id pour s'assurer que la valeur ne sera pas modifier lor de l'envois
          $('.custom-switch-input').removeAttr('id');
          setTimeout(function () {
              $('.custom-switch-input').prop('checked',true);
              setTimeout(function () {
                  $(form).submit();
              },50)
          },50)
      }

  });

</script>