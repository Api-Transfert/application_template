<style>
    #agence_form .custom-switch-btn{padding-top:3px}
    <?php if(!empty($voir_agence)):;?>
        .form-control{border:none !important;background-color: transparent !important;}
        label{font-weight: bold !important;}
    <?php endif;?>
</style>
<form id="agence_form" method="post" action="<?=base_url($form_action);?>">


    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">Nom : </label></div>
        <div class="col-xs-8"><input type="text" value="<?=(!empty($agence->agenceName))?$agence->agenceName:'';?>" name="agenceName" id="nom" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">Adresse : </label></div>
        <div class="col-xs-8"><input type="text" value="<?=(!empty($agence->agenceAdresse))?$agence->agenceAdresse:'';?>" name="agenceAdresse" id="nom" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">Téléphone : </label></div>
        <div class="col-xs-8"><input type="text" value="<?=(!empty($agence->agencePhone))?$agence->agencePhone:'';?>" name="agencePhone" id="nom" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">E-mail : </label></div>
        <div class="col-xs-8"><input type="email" value="<?=(!empty($agence->agenceEmail))?$agence->agenceEmail:'';?>" name="agenceEmail" id="nom" class="form-control" required></div>
    </div>


    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureType">Structure : </label></div>
        <div class="col-xs-8">
            <select name="agenceStructureId" id="type" class="form-control" required>
                <?php foreach($structure as $struc):
                    if(!empty($struc)){
                        $selected = ($struc->structureId == $agence->agenceStructureId)?'selected' : '';
                    }else{
                        $selected = '';
                    }
                    ?>
                    <option value="<?=$struc->structureId?>" <?=$selected;?>><?=$struc->structureName?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structurePaysId">Pays : </label></div>
        <div class="col-xs-8">
            <select name="agencePaysId" id="agencePaysId" class="form-control" required>
                <?php foreach($pays as $p):
                    if(!empty($agence)){
                        $selected = ($p->paysId == $agence->agencePaysId)?'selected' : '';
                    }
                    else{
                        $selected = '';
                    }
                    ?>
                    <option value="<?=$p->paysId?>" <?=$selected;?>><?=$p->paysName?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structurePaysId">Zone : </label></div>
        <div class="col-xs-8">
            <select name="agenceReseauId" id="agenceReseauId" class="form-control" required>
                <option value="">Selectionnez une zone</option>
                <?php foreach($zones as $zone):
                    if(!empty($agence)){
                        $selected = ($zone->reseauId == $agence->agenceReseauId)?'selected' : '';
                    }
                    else{
                        $selected = '';
                    }
                    ?>
                    <option value="<?=$zone->reseauId?>" <?=$selected;?>><?=$zone->reseauName;?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    
    <div class="col-sm-6 m-t-10">
        <div class="col-xs-4 text-right"><label class="fs-14" for="agenceActives">Status</label></div>
        <div class="col-xs-8 text-left">
            <div class="custom-switch custom-switch-xs pl-0">
                <input class="custom-switch-input" name="agenceActive" value="<?=(!empty($agence->agenceActive))?$agence->agenceActive:'';?>" id="agenceActive" type="checkbox" <?=(!empty($agence->agenceActive) && $agence->agenceActive == '1')?'checked':'';?>>
                <label class="custom-switch-btn" data-target="#agenceActive" for="agenceActive"></label>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <?php if(empty($do_create)):;?>
        <input type="hidden" name="agence_id" value="<?=(!empty($agence->agenceId))?$agence->agenceId:'';?>">
        <input type="hidden" name="do_modification" value="yes do it">
    <?php endif;?>


<div class="clearfix"></div>
    <?php if(empty($voir_agence)):;?>
        <hr>
        <div class="text-center">
            <button type="button" id="save_agence_data" class="btn btn-success btn-corner right15"><i class="fa fa-check"></i> Enregistrer</button>
            <button type="button" class="btn btn-primary btn-corner right15 close_swal2"><i class="fa fa-times"></i> Annuler</button>
        </div>
    <?php endif;?>
</form>