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
                        <tr>
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
                                       <li><a class="strc_delete" data-id="<?=$stuc->structureId?>" href="##"><i class="fa fa-trash"></i> Supprimer</a></li>
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
      })
  });
  
  $(document).on('click','#save_structure_data',{passive:true},function () {
          $('#structure_form').submit();
//      if(validate_form('structure_form')){
//      }
  });
  
  $(document).on('click','#create_structure',{passive:true},function () {
      show_loader();
      $.post(base_url+'structure/create_structure',{},function (create_str_form) {
          sweetDialog(create_str_form,{size:'90%' , showCancelButton:false});
      });
  });

  function sweetAlertTwo(params){

      $('#sweetAlertTow').remove();

      params = params || {};

      var defaultParams = {
          title: params.title || '',
          titleText: '',
          text: '',
          html: params.html || '',
          footer: '',
          icon: params.icon || undefined,
          iconHtml: undefined,
          toast: false,
          animation: true,
          showClass: {
              popup: 'swal2-show',
              backdrop: 'swal2-backdrop-show',
              icon: 'swal2-icon-show'
          },
          hideClass: {
              popup: 'swal2-hide',
              backdrop: 'swal2-backdrop-hide',
              icon: 'swal2-icon-hide'
          },
          customClass: undefined,
          target:params.target || 'body',
          backdrop:(params.backdrop !== undefined)?params.backdrop:true,
          heightAuto:(params.heightAuto !== undefined)?params.heightAuto:true,
          allowOutsideClick:(params.allowOutsideClick !== undefined)?params.allowOutsideClick:true,
          allowEscapeKey:(params.allowEscapeKey !== undefined)?params.allowEscapeKey:true,
          allowEnterKey:(params.allowEnterKey !== undefined)?params.allowEnterKey:true,
          stopKeydownPropagation:(params.stopKeydownPropagation !== undefined)?params.stopKeydownPropagation:true,
          keydownListenerCapture:(params.keydownListenerCapture !== undefined)?params.keydownListenerCapture:false,
          showConfirmButton:(params.showConfirmButton !== undefined)?params.showConfirmButton : true,
          showCancelButton:(params.showCancelButton !== undefined)?params.showCancelButton:false,
          preConfirm:params.preConfirm || undefined,
          confirmButtonText:params.confirmButtonText || params.confirmButtonText ||'OK',
          confirmButtonAriaLabel:params.confirmButtonAriaLabel || '',
          confirmButtonColor:params.confirmButtonColor || undefined,
          cancelButtonText:params.cancelButtonText || 'Cancel',
          cancelButtonAriaLabel:params.cancelButtonAriaLabel || '',
          cancelButtonColor:params.cancelButtonColor || undefined,
          buttonsStyling:(params.buttonsStyling !== undefined)?params.buttonsStyling:true,
          reverseButtons:(params.reverseButtons !== undefined)?params.reverseButtons:false,
          focusConfirm:(params.focusConfirm !== undefined)?params.focusConfirm:true,
          focusCancel:(params.focusCancel !== undefined)?params.focusCancel:false,
          showCloseButton:(params.showCloseButton !== undefined)?params.showCloseButton:false,
          closeButtonHtml:params.closeButtonHtml || '&times;',
          closeButtonAriaLabel:params.closeButtonAriaLabel || 'Close this dialog',
          showLoaderOnConfirm:(params.showLoaderOnConfirm !== undefined)?params.showLoaderOnConfirm:false,
          imageUrl:params.imageUrl || undefined,
          imageWidth:params.imageWidth || undefined,
          imageHeight:params.imageHeight || undefined,
          imageAlt:params.imageAlt || '',
          timer:params.timer || undefined,
          timerProgressBar:(params.timerProgressBar !== undefined)?params.timerProgressBar:false,
          width:params.width || undefined,
          padding:params.padding || undefined,
          background:params.background || undefined,
          input:params.input || undefined,
          inputPlaceholder:params.inputPlaceholder || '',
          inputValue:params.inputValue || '',
          inputOptions:params.inputOptions || {},
          inputAutoTrim:(params.inputAutoTrim !== undefined)?params.inputAutoTrim:true,
          inputAttributes:params.inputAttributes || {},
          inputValidator:params.inputValidator || undefined,
          validationMessage:params.validationMessage || undefined,
          grow:(params.grow !== undefined)?params.grow:false,
          position:params.position || 'center',
          progressSteps:params.progressSteps || [],
          currentProgressStep:params.currentProgressStep || undefined,
          progressStepsDistance:params.progressStepsDistance || undefined,
          onBeforeOpen:params.onBeforeOpen || undefined,
          onOpen:params.onOpen || undefined,
          onRender:params.onRender || undefined,
          onClose:params.onClose || undefined,
          onAfterClose:params.onAfterClose || undefined,
          onDestroy:params.onDestroy || undefined,
          scrollbarPadding:(params.scrollbarPadding !== undefined)?params.scrollbarPadding:true
      };

      var show_icon = {
          error:'display:none',
          info:'display:none',
          question:'display:none',
          warning:'display:none',
          success:'display:none',
      };

      switch(defaultParams.icon){
          case 'error':show_icon.error = 'display:flex';break;
          case 'info':show_icon.info = 'display:flex';break;
          case 'question':show_icon.question = 'display:flex';break;
          case 'success':show_icon.success = 'display:flex';break;
      }

      var show = {
          html: 'display:block',
          title: ((defaultParams.title.length > 0)?'display:flex':'display:none')
      };


      
        var html = '<div class="swal2-container swal2-center swal2-backdrop-show" id="sweetAlertTow" style="overflow-y: auto;">'+
            '<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">'+
            '<div class="swal2-header">'+
            '<ul class="swal2-progress-steps" style="display: none;"></ul>'+
            '<div class="swal2-icon swal2-error" style="'+show_icon.error+'"><span class="swal2-x-mark"> <span class="swal2-x-mark-line-left"></span> <span class="swal2-x-mark-line-right"></span> </span></div>'+
            '<div class="swal2-icon swal2-question" style="'+show_icon.question+'"></div>'+
            '<div class="swal2-icon swal2-warning" style="'+show_icon.warning+'"></div>'+
            '<div class="swal2-icon swal2-info" style="'+show_icon.info+'"><div class="swal2-icon-content">i</div></div>'+
            '<div class="swal2-icon swal2-success" style="'+show_icon.success+'"></div>'+
            '<img class="swal2-image" style="display: none;">'+
            '<h2 class="swal2-title" id="swal2-title" style="'+show.title+'">'+defaultParams.title+'</h2>'+
            '<button type="button" class="swal2-close" onclick="closeSwallTwo();" aria-label="Close this dialog" style="display: flex;">×</button>'+
            '</div>'+
            '<div class="swal2-content">'+
            '<div id="swal2-content" class="swal2-html-container" style="'+show.html+'">'+defaultParams.html+'</div>'+
            '<input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;">'+
            '<div class="swal2-range" style="display: none;"><input type="range">'+
            '<output></output>'+
            '</div>'+
            '<select class="swal2-select" style="display: none;"></select>'+
            '<div class="swal2-radio" style="display: none;"></div>'+
            '<label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea>'+
            '<div class="swal2-validation-message" id="swal2-validation-message"></div>'+
            '</div>'+
            '<div class="swal2-actions">'+
            '<button onclick="closeSwallTwo();" type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: '+((defaultParams.showConfirmButton === true )?'inlinr-block':'none')+'; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">'+
            'OK'+
            '</button>'+
            '<button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button>'+
            '</div>'+
            '<div class="swal2-footer" style="display: none;"></div>'+
            '<div class="swal2-timer-progress-bar" style="display: none;"></div>'+
            '</div>'+
            '</div>';
      $('body').after(html);
      $('body').addClass('pace-done swal2-shown swal2-height-auto');
      $('#swall_two').show('slow');
  }

</script>