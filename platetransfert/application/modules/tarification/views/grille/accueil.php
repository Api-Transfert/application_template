<div class="page-container row-fluid container-fluid">
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Grille</h1>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <button class="btn btn-primary add_grille"><i class="fa fa-plus"></i> Ajouter une grille</button>
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
                            <th data-field="Date" data-sortable="true" data-switchable="true">Date</th>
                            <th data-field="Devise" data-sortable="true" data-switchable="true">Devise</th>
                            <th data-field="Action" data-sortable="true" data-switchable="true">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach($tarifs as $tarif):?>
                            <tr id="row_<?=$tarif->id;?>">
                                <td><?=$tarif->tarifName;?></td>
                                <td><?=$tarif->tarifDate;?></td>
                                <td><?=$tarif->currencyName;?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>Actions</span> <span class="caret m-l-10"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="##" class="view_montant" data-id="<?=$tarif->id;?>"><i class="fa fa-eye"></i> Montant</a></li>
                                            <li><a href="##" class="edit_grille" data-id="<?=$tarif->id;?>" data-name="<?=$tarif->tarifName;?>" data-currency_id="<?=$tarif->tarifCurrencyId;?>"><i class="fa fa-edit"></i> Modifier</a></li>
                                            <li><a href="##" class="delete_grille" data-id="<?=$tarif->id;?>" data-row="#row_<?=$tarif->id;?>"><i class="fa fa-trash"></i> Supprimer</a></li>
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

    const new_grille_form = '<form id="new_grille_form" action="<?=base_url('tarification/grille/create');?>" method="post" class="ajax-form">'+
        '    <div class="row">'+
        '        <div class="col-sm-6">'+
        '            <div class="form-group">'+
        '                <label for="grille_name">Nom</label>'+
        '                <input class="form-control" required type="text" id="grille_name" name="tarifName">'+
        '            </div>'+
        '        </div>'+
        '        <div class="col-sm-6">'+
        '            <div class="form-group">'+
        '                <label for="grille_currency">Devise</label>'+
        '                <select class="select2" required name="tarifCurrencyId" id="grille_currency">'+
        '                    <?php foreach($currencies as $currency):?>'+
        '                        <option id="currency_<?=$currency->currencyId;?>" value="<?=$currency->currencyId;?>"><?=$currency->currencyName;?></option>'+
        '                    <?php endforeach;?>'+
        '                </select>'+
        '            </div>'+
        '        </div>'+
        '    </div>'+
        '    <div class="text-right">'+
        '        <button type="submit" id="grille_form_submit_btn" class="btn btn-primary">Ajouter</button>'+
        '    </div>'+
        '</form>';

    $(document).on('click','.view_montant',{passive:true},function () {
        show_loader();
        const tarif_id =$(this).attr('data-id');
        $.post(base_url+'tarification/grille/get_montant/',{tarif_id:tarif_id},function (grille) {
            hide_loader();
            grille = $.parseJSON(grille);
            if(grille.status === true){
                const html = '<div class="row">'+
                    '    <div class="col-sm-6"><label>Montant Min : '+grille.min+'</label></div>'+
                    '    <div class="col-sm-6"><label>Montant Max : '+grille.max+'</label></div>'+
                    '</div>'+
                    '<div class="row">'+
                    '    <div class="col-sm-6"><label>Frais HT : '+grille.frais+'</label></div>'+
                    '    <div class="col-sm-6"><label>Frais Réseau HT : '+grille.frais_reseau+'</label></div>'+
                    '</div>';

                sweetDialog(html);
            }
            else{
                show_message('error',grille.message);
            }
        });
    });
    $(document).on('click','.add_grille',{passive:true},function () {
        sweetDialog(new_grille_form,);
        setTimeout(function(){
            init_select2();
        },100);
    });
    $(document).on('click','.delete_grille',{passive:true},function () {
        const id = $(this).attr('data-id');
        const row = $($(this).attr('data-row'));
        function delete_grille(){
            $.post(base_url+'tarification/grille/delete',{id:id},function (response) {
                response = $.parseJSON(response);
                if(response.status === true){
                    show_message('success',response.message);
                    remove_tag(row);
                }
            });
        }

        sweetConfirm('Etre vous certains de vouloir supprimer cette grille ?',{yes:delete_grille});
    });

    $(document).on('click','.edit_grille',{passive:true},function () {
        const id = $(this).attr('data-id');
        const name = $(this).attr('data-name');
        const currency_id = $(this).attr('data-currency_id');

        sweetDialog(new_grille_form);
        setTimeout(function(){
           $('#currency_'+currency_id+'').attr('selected','selected');
           $('#new_grille_form').attr('action',base_url+'tarification/grille/edit/'+id+'');
           $('#grille_form_submit_btn').text('Modifier');
           $('#grille_name').val(''+name+'');
           init_select2();
        },200);
    });
</script>