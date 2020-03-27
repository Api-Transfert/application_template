<div class="page-container row-fluid container-fluid">
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Zones</h1>
                    </div>
                </div>
            </div>


            <section>
                    <div class="">
                        <ul class="nav nav-tabs nav-justified primary">
                            <li class="active">
                                <a href="#emission" data-toggle="tab">
                                    <i class="fa fa-home"></i> Emission
                                </a>
                            </li>
                            <li>
                                <a href="#destination" data-toggle="tab">
                                    <i class="fa fa-home"></i> Destination
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content primary">
                            <?php include_once('zone_emission.php'); ?>

                            <?php include_once('zone_destination.php'); ?>
                        </div>
                    </div>
                </section>

        </div>
    </section>
</div>

<script>
    $(document).on('click','.add_zone',{passive:true},function () {
        const type =  $(this).attr('data-type');
        const zone_form = '<form id="zone_form" action="'+base_url+'tarification/zone/add" class="ajax-form m-t-30">'+
            '    <div class="row">'+
            '        <div class="col-sm-6">'+
            '            <div class="form-group">'+
            '                <label for="zone_name">Nom</label>'+
            '                <input name="name" id="zone_name" type="text" class="form-control" required>'+
            '            </div>'+
            '        </div>'+
            '        <div class="col-sm-6">'+
            '            <div class="form-group">'+
            '                <label for="zone_size">Taille</label>'+
            '                <input type="number" name="size" id="zone_size" class="form-control" required>'+
            '                <input type="hidden" name="type" value="'+type+'" class="form-control">'+
            '            </div>'+
            '        </div>'+
            '    </div>'+
            '    <div class="text-right">'+
            '        <button class="btn btn-primary" type="submit">Ajouter</button>'+
            '    </div>'+
            '</form>';

        sweetDialog(zone_form,{title : 'Ajouter zone '+type+''});
    });

    $(document).on('click','.edit_zone',{passive:true},function () {
        const id = $(this).attr('data-id');
        $.post(base_url+'tarification/zone/get_zone_data',{id:id},function (zone_data) {
            zone_data = $.parseJSON(zone_data);
           if(zone_data.status === true){
               const zone_form = '<form id="zone_form" action="'+base_url+'tarification/zone/edit/'+id+'" class="ajax-form m-t-30">'+
                   '    <div class="row">'+
                   '        <div class="col-sm-6">'+
                   '            <div class="form-group">'+
                   '                <label for="zone_name">Nom</label>'+
                   '                <input name="name" id="zone_name" value="'+zone_data.name+'" type="text" class="form-control" required>'+
                   '            </div>'+
                   '        </div>'+
                   '        <div class="col-sm-6">'+
                   '            <div class="form-group">'+
                   '                <label for="zone_size">Taille</label>'+
                   '                <input type="number" name="size" value="'+zone_data.size+'" id="zone_size" class="form-control" required>'+
                   '            </div>'+
                   '        </div>'+
                   '    </div>'+
                   '    <div class="text-right">'+
                   '        <button class="btn btn-primary" type="submit">Modifier</button>'+
                   '    </div>'+
                   '</form>';

               sweetDialog(zone_form);
           }
        });
    });

    $(document).on('click','.delete_zone',{passive:true},function () {
        const id = $(this).attr('data-id');
        const row = $($(this).attr('data-row'));
        function delete_zone(){
            $.post(base_url+'tarification/zone/delete',{id:id},function (response) {
                response = $.parseJSON(response);
                if(response.status === true){
                    show_message('success',response.message);
                    remove_tag(row);
                }
            });
        }

        sweetConfirm('Etre vous certains de vouloir supprimer cette zone ?',{yes:delete_zone});
    });
</script>