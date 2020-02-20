<style>
    #structure_form .custom-switch-btn{padding-top:3px}
</style>
<form id="structure_form" method="post" action="<?=base_url($form_action);?>">


    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="nom">Nom</label></div>
        <div class="col-xs-8"><input type="text" value="<?=(!empty($struct->structureName))?$struct->structureName:'';?>" name="structureName" id="nom" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structurePaysId">Pays : </label></div>
        <div class="col-xs-8">
            <select name="structurePaysId" id="structurePaysId" class="form-control" required>
                <?php foreach($pays as $p):
                    if(!empty($struct)){
                        $selected = ($p->paysId == $struct->paysId)?'selected' : '';
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
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureType">Type : </label></div>
        <div class="col-xs-8">
            <select name="structureType" id="type" class="form-control" required>
                <?php foreach($type as $t):
                    if(!empty($struct)){
                        $selected = ($t->idtypeStructure == $struct->structureType)?'selected' : '';
                    }else{
                        $selected = '';
                    }
                    ?>
                    <option value="<?=$t->idtypeStructure?>" <?=$selected;?>><?=$t->typeName?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureCodeBanque">Code banque : </label></div>
        <div class="col-xs-8"><input type="text" name="structureCodeBanque" value="<?=(!empty($struct->structureCodeBanque))?$struct->structureCodeBanque:'';?>" id="structureCodeBanque" class="form-control"></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureAdresse">Adresse : </label></div>
        <div class="col-xs-8"><input type="text" name="structureAdresse" id="structureAdresse" value="<?=(!empty($struct->structureAdresse))?$struct->structureAdresse:'';?>" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structurePhone">Téléphone:</label></div>
        <div class="col-xs-8"><input type="text" name="structurePhone" value="<?=(!empty($struct->structurePhone))?$struct->structurePhone:'';?>" id="structurePhone" class="form-control" required data-toggle="tooltip" data-placement="top" title="(numéros séparés par une virgule)"></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureEmail">E-mail:</label></div>
        <div class="col-xs-8"><input type="email" name="structureEmail" value="<?=(!empty($struct->structureEmail))?$struct->structureEmail:'';?>" id="structureEmail" class="form-control" required data-toggle="tooltip" data-placement="top" title="(adresses séparées par une virgule)"></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureActionRights">Actions autorisées : </label></div>
        <div class="col-xs-8">
            <select name="structureActionRights" id="structureActionRights" class="form-control">
                <option <?=(!empty($struct->structureActionRights) && $struct->structureActionRights == '1')?'selected':'';?> value="1">Tous</option>
                <option <?=(!empty($struct->structureActionRights) && $struct->structureActionRights == '2')?'selected':'';?> value="2">Emission</option>
                <option <?=(!empty($struct->structureActionRights) && $struct->structureActionRights == '3')?'selected':'';?> value="3">Paiement</option>
            </select>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structurePartReseauTiersEmis">Part Réseau Tiers</label></div>
        <div class="col-xs-8"><input type="number" name="structurePartReseauTiersEmis" value="<?=(!empty($struct->structurePartReseauTiersEmis))?$struct->structurePartReseauTiersEmis:'';?>" id="structurePartReseauTiersEmis" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureTaxe">Taxe</label></div>
        <div class="col-xs-8"><input type="number" value="<?=(!empty($struct->structureTaxe))?$struct->structureTaxe:'';?>" name="structureTaxe" id="structureTaxe" class="form-control" required></div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureDistributeurId">Distributeur</label></div>
        <div class="col-xs-8"><input type="text" name="structureDistributeurId" value="<?=(!empty($struct->structureDistributeurId))?$struct->structureDistributeurId:'';?>" id="structureDistributeurId" class="form-control" required></div>
    </div>

    <?php if(!empty($do_create)):;?>
        <div class="col-sm-6">
            <div class="col-xs-4 text-right"><label class="form-label fs-14" for="">Structure de tutelle :</label></div>
            <div class="col-xs-8">
                <select name="" id="" class="form-control">
                    <option value=""></option>
                    <?php foreach($structure_tutelle as $st):?>
                        <option value="<?=$st->structureId;?>"><?=$st->structureName;?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="col-xs-4 text-right"><label class="form-label fs-14" for="structureTutelleId">Commercial Freelance : </label></div>
            <div class="col-xs-8"><input type="text" name="structureTutelleId" value="<?=(!empty($struct->structureEmail))?$struct->structureEmail:'';?>" id="structureTutelleId" class="form-control" required></div>
        </div>
    <?php endif;?>

    <div class="clearfix"></div>
        <hr>

    <div class="col-sm-6">
        <div class="col-xs-9 text-right"><label class="form-label fs-14" for="structurePrefinanced">Préfinancement : </label></div>
        <div class="col-xs-3 text-right">
            <div class="custom-switch custom-switch-xs">
                <input name="structurePrefinanced" class="custom-switch-input" id="structurePrefinanced" value="<?=(!empty($struct->structurePrefinanced))?$struct->structurePrefinanced:'0';?>" type="checkbox" <?=(!empty($struct->structurePrefinanced) && $struct->structurePrefinanced == '1')?'checked':'';?>>
                <label class="custom-switch-btn" for="structurePrefinanced" data-target="#structurePrefinanced"></label>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-9 text-right"><label class="form-label fs-14" for="structureSendSMSAlert">Alerte SMS : </label></div>
        <div class="col-xs-3 text-right">
            <div class="custom-switch custom-switch-xs">
                <input name="structureSendSMSAlert" class="custom-switch-input" id="sw_structureSendSMSAlert" value="<?=(!empty($struct->structureSendSMSAlert))?$struct->structureSendSMSAlert:'0';?>" <?=(!empty($struct->structureSendSMSAlert) && $struct->structureSendSMSAlert == '1')?'checked':'';?> type="checkbox">
                <label class="custom-switch-btn" for="sw_structureSendSMSAlert" data-target="#sw_structureSendSMSAlert"></label>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-9 text-right"><label class="form-label fs-14" for="St_structureSendEmailAlert">Alerte E-mail : </label></div>
        <div class="col-xs-3 text-right">
            <div class="custom-switch custom-switch-xs">
                <input name="structureSendEmailAlert" class="custom-switch-input" id="structureSendEmailAlert" value="<?=(!empty($struct->structureSendEmailAlert))?$struct->structureSendEmailAlert:'0';?>" <?=(!empty($struct->structureSendSMSAlert) && $struct->structureSendSMSAlert == '1')?'checked':'';?> type="checkbox">
                <label class="custom-switch-btn" for="structureSendEmailAlert" data-target="#structureSendEmailAlert"></label>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-9 text-right"><label class="form-label fs-14" for="structureRestrictPayment" class="fs-14">Paiements limités à la zone géographique</label></div>
        <div class="col-xs-3 text-right">
            <div class="custom-switch custom-switch-xs pl-0">
                <input class="custom-switch-input" name="structureRestrictPayment" id="structureRestrictPayment" value="<?=(!empty($struct->structureRestrictPayment))?$struct->structureRestrictPayment:'0';?>" type="checkbox" <?=(!empty($struct->structureRestrictPayment) && $struct->structureRestrictPayment == '1')?'checked':'';?>>
                <label class="custom-switch-btn" for="structureRestrictPayment" data-target="#structureRestrictPayment"></label>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-9 text-right">
            <label class="form-label fs-14" for="str_structureTaxInJournal" class="fs-14">Traitement de la taxe</label>
            <small class="fs-11">Intégrer la taxe dans le compte de compensation ?</small>
        </div>
        <div class="col-xs-3 text-right">
            <div class="custom-switch custom-switch-xs">
                <input class="custom-switch-input" name="structureTaxInJournal" value="<?=(!empty($struct->structureTaxInJournal))?$struct->structureTaxInJournal:'';?>" id="structureTaxInJournal" type="checkbox" <?=(!empty($struct->structureTaxInJournal) && $struct->structureTaxInJournal == '1')?'checked':'';?>>
                <label class="custom-switch-btn" for="structureTaxInJournal" data-target="#structureTaxInJournal"></label>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="col-xs-8 text-right"><label class="form-label fs-14" for="">Autoriser paiements lorsque solde négatif:</label></div>
        <div class="col-xs-4 text-right">
            <div class="custom-switch custom-switch-xs">
                <input class="custom-switch-input" id="structureAllowPaymentWithNegativeQuota" name="structureAllowPaymentWithNegativeQuota" value="<?=(!empty($struct->structureAllowPaymentWithNegativeQuota))?$struct->structureAllowPaymentWithNegativeQuota:'';?>" type="checkbox" <?=(!empty($struct->structureAllowPaymentWithNegativeQuota) && $struct->structureAllowPaymentWithNegativeQuota == '1')?'checked':'';?>>
                <label class="custom-switch-btn" for="structureAllowPaymentWithNegativeQuota" data-target="#structureAllowPaymentWithNegativeQuota"></label>
            </div>
        </div>
    </div>

    <?php if(empty($do_create)):;?>
        <input type="hidden" name="structure_id" value="<?=(!empty($struct->structureId))?$struct->structureId:'';?>">
        <input type="hidden" name="do_modification" value="yes do it">
    <?php endif;?>


<div class="clearfix"></div>
    <hr>
    <div class="text-center">
        <button type="button" id="save_structure_data" class="btn btn-success btn-corner right15"><i class="fa fa-check"></i> Enregistrer</button>
        <button type="button" class="btn btn-primary btn-corner right15 close_swal2"><i class="fa fa-times"></i> Annuler</button>
    </div>
</form>