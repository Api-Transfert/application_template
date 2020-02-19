

<!-- START CONTENT -->
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row" style=''>

        <div class="container">
            <button class="btn btn-primary"><i class="fa fa-plus"></i> crée </button>

        </div>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
					<h1 class="title">Tarification</h1>
					
					<?php  //var_dump($tarif_data);?>
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
                        <th data-field="date" data-sortable="true" data-switchable="true">Nom</th>
                        <th data-field="operat" data-sortable="true" data-switchable="true">Opération</th>
                        <th data-field="zone_emis" data-sortable="true" data-switchable="true">Zone d'émission</th>
						<th data-field="zone_dest" data-sortable="true" data-switchable="true">Zone de destination</th>
						<th data-field="grille" data-sortable="true" data-switchable="true">Grille</th>
						<th data-field="type" data-sortable="true" data-switchable="true">Type</th>
						
						<th data-field="actions" data-sortable="true">Actions</th>
					</tr>
					

					 </thead>
                    <tbody>
                    <?php foreach($joinzonetarif_data as $jztarif):?>
                        <tr>
							<td><?=$jztarif->tarifDate?></td>
                            <td><?=$jztarif->tarifName?></td>
							<td><?=$jztarif->currencyName?></td>
							
							<td>
                                <div class="btn-group">
                                    <button class="btn btn-primary">Actions</button> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="strc_view" data-id="<?=$tarif->joinzonetarifId?>" href="##"><i class="fa fa-eye"></i> Voir</a></li>
                                        <li><a class="strc_edit" data-id="<?=$tarif->joinzonetarifId?>" href="##"><i class="fa fa-edit"></i> Modifier</a></li>
                                        <li><a class="strc_delete" data-id="<?=$tarif->joinzonetarifId?>" href="##"><i class="fa fa-trash"></i> Supprimer</a></li>
                                        <li class="divider"></li>
                                        
                                
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
<!-- END CONTENT -->
<div class="page-chatapi hideit">

    <div class="search-bar">
        <input type="text" placeholder="Search" class="form-control">
    </div>

    <div class="chat-wrapper">
        <h4 class="group-head">Favourites</h4>
        <ul class="contact-list">

            <li class="user-row " id='chat_user_1' data-user-id='1'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-1.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Joge Lucky</a></h4>
                    <span class="status available" data-status="available"> Available</span>
                </div>
                <div class="user-status available">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_2' data-user-id='2'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-2.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Folisise Chosiel</a></h4>
                    <span class="status away" data-status="away"> Away</span>
                </div>
                <div class="user-status away">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_3' data-user-id='3'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-3.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Aron Gonzalez</a></h4>
                    <span class="status busy" data-status="busy"> Busy</span>
                </div>
                <div class="user-status busy">
                    <i class="fa fa-circle"></i>
                </div>
            </li>

        </ul>

        <h4 class="group-head">More Contacts</h4>
        <ul class="contact-list">

            <li class="user-row " id='chat_user_4' data-user-id='4'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-4.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Chris Fox</a></h4>
                    <span class="status offline" data-status="offline"> Offline</span>
                </div>
                <div class="user-status offline">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_5' data-user-id='5'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-5.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Mogen Polish</a></h4>
                    <span class="status offline" data-status="offline"> Offline</span>
                </div>
                <div class="user-status offline">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_6' data-user-id='6'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-1.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Smith Carter</a></h4>
                    <span class="status available" data-status="available"> Available</span>
                </div>
                <div class="user-status available">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_7' data-user-id='7'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-2.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Amilia Gozenal</a></h4>
                    <span class="status busy" data-status="busy"> Busy</span>
                </div>
                <div class="user-status busy">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_8' data-user-id='8'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-3.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Tahir Jemyship</a></h4>
                    <span class="status away" data-status="away"> Away</span>
                </div>
                <div class="user-status away">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_9' data-user-id='9'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-4.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Johanson Wright</a></h4>
                    <span class="status busy" data-status="busy"> Busy</span>
                </div>
                <div class="user-status busy">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_10' data-user-id='10'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-5.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Loni Tindall</a></h4>
                    <span class="status away" data-status="away"> Away</span>
                </div>
                <div class="user-status away">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_11' data-user-id='11'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-1.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Natcho Herlaey</a></h4>
                    <span class="status idle" data-status="idle"> Idle</span>
                </div>
                <div class="user-status idle">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_12' data-user-id='12'>
                <div class="user-img">
                    <a href="#"><img src="<?=bs()?>assets/data/profile/avatar-2.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Shakira Swedan</a></h4>
                    <span class="status idle" data-status="idle"> Idle</span>
                </div>
                <div class="user-status idle">
                    <i class="fa fa-circle"></i>
                </div>
            </li>

        </ul>
    </div>

</div>

<div class="chatapi-windows ">

</div>
</div>
<!-- END CONTAINER -->
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
          sweetDialog(edit_str_form,{size:'90%'});
      })
  });
</script>
