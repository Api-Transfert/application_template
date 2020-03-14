<style>
    #structure_form .custom-switch-btn{padding-top:3px}
    <?php if(!empty($voir_agence)):;?>
        .form-control{border:none !important;background-color: transparent !important;}
        label{font-weight: bold !important;}
    <?php endif;?>
</style>
<form id="agence_form" method="post" action="<?=base_url($form_action);?>">


    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">Nom : </label></div>
        <div class="col-xs-8"><input type="text" value="<?=(!empty($reseau->reseauName))?$reseau->reseauName:'';?>" name="reseauName" id="nom" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">Date : </label></div>
        <div class="col-xs-8"><input type="text" value="<?=(!empty($reseau->reseauDate))?$reseau->reseauDate:'';?>" name="reseauDate" id="nom" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">Description : </label></div>
        <div class="col-xs-8"><input type="text" value="<?=(!empty($reseau->reseauDescription))?$reseau->reseauDescription:'';?>" name="reseauDescription" id="nom" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">Taille : </label></div>
        <div class="col-xs-8"><input type="number" value="<?=(!empty($reseau->reseauSize) || $reseau->reseauSize == '0')?$reseau->reseauSize:'';?>" name="reseauSize" id="nom" class="form-control" required></div>
    </div>
    
    <div class="clearfix"></div>

    <?php if(empty($do_create)):;?>
        <input type="hidden" name="reseauId" value="<?=(!empty($reseau->reseauId))?$reseau->reseauId:'';?>">
        <input type="hidden" name="do_modification" value="yes do it">
    <?php endif;?>


<div class="clearfix"></div>
    <?php if(empty($see_data)):;?>
        <hr>
        <div class="text-center">
            <button type="submit" id="save_agence_data" class="btn btn-success btn-corner right15"><i class="fa fa-check"></i> Enregistrer</button>
            <button type="button" class="btn btn-primary btn-corner right15 close_swal2"><i class="fa fa-times"></i> Annuler</button>
        </div>
    <?php endif;?>
</form>