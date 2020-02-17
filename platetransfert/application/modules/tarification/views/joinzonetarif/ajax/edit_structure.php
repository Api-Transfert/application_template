
<div class="">

   <div class="row m-b-20 bg-accent">
       <div class="col-sm-4">
           <div class="col-xs-4 text-right"><label for="nom">Nom</label></div>
           <div class="col-xs-8"><input type="text" value="<?=$struct->structureName;?>" name="structureName" id="nom" class="form-control" required></div>
       </div>

       <div class="col-sm-4">
           <div class="col-xs-4 text-right"><label for="structurePaysId">Pays : </label></div>
           <div class="col-xs-8">
               <select name="structurePaysId" id="structurePaysId" class="form-control" required>
                   <?php foreach($pays as $p):?>
                       <option value="<?=$p->paysId?>"><?=$p->paysName?></option>
                   <?php endforeach;?>
               </select>
           </div>
       </div>

       <div class="col-sm-4">
           <div class="col-xs-4 text-right"><label for="structureType">Type : </label></div>
           <div class="col-xs-8">
               <select name="structureType" id="type" class="form-control" required>
                   <?php foreach($type as $t):?>
                       <option value="<?=$t->idtypeStructure?>"><?=$t->typeName?></option>
                   <?php endforeach;?>
               </select>
           </div>
       </div>
   </div>

    <div class="row m-b-20">
        <div class="col-sm-6">
            <div class="col-xs-6 text-right"><label for="structureCodeBanque">Code banque : </label></div>
            <div class="col-xs-6"><input type="text" name="structureCodeBanque" id="structureCodeBanque" class="form-control"></div>
        </div>

        <div class="col-sm-6">
            <div class="col-xs-6 text-right"><label for="structurePrefinanced">Préfinancement : </label></div>
            <div class="col-xs-6 text-left">
                <div class="custom-switch custom-switch-xs">
                    <input class="custom-switch-input" id="prefinancement" value="<?=$struct->structurePrefinanced;?>" name="structurePrefinanced" type="checkbox" <?=($struct->structurePrefinanced == '1')?'checked':'';?>>
                    <label class="custom-switch-btn" for="prefinancement" data-target="#prefinancement"></label>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-b-20 bg-accent">
        <div class="col-sm-4">
            <div class="col-xs-4 text-right"><label for="structureAdresse">Adresse : </label></div>
            <div class="col-xs-8"><input type="text" name="structureAdresse" id="structureAdresse" value="<?=$struct->structureAdresse;?>" class="form-control" required></div>
        </div>

        <div class="col-sm-4">
            <div class="col-xs-8 text-right"><label for="structureSendSMSAlert">Alerte SMS : </label></div>
            <div class="col-xs-4 text-left">
                <div class="custom-switch custom-switch-xs pull-left">
                    <input class="custom-switch-input" id="sw_structureSendSMSAlert" value="<?=$struct->structureSendSMSAlert;?>" name="structureSendSMSAlert" <?=($struct->structureSendSMSAlert == '1')?'checked':'';?> type="checkbox">
                    <label class="custom-switch-btn" for="sw_structureSendSMSAlert" data-target="#sw_structureSendSMSAlert"></label>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="col-xs-8 text-right"><label for="St_structureSendEmailAlert">Alerte E-mail : </label></div>
            <div class="col-xs-4 text-left">
                <div class="custom-switch custom-switch-xs pull-left">
                    <input class="custom-switch-input" id="structureSendEmailAlert" value="<?=$struct->structureSendEmailAlert;?>" name="structureSendEmailAlert" type="checkbox">
                    <label class="custom-switch-btn" for="structureSendEmailAlert" data-target="#structureSendEmailAlert"></label>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-15">
        <div class="col-xs-4 text-right"><label for="structurePhone">Téléphone: <small class="fs-11">(numéros séparés par une virgule)</small></label></div>
        <div class="col-xs-8"><input type="text" name="structurePhone" value="<?=$struct->structurePhone;?>" id="structurePhone" class="form-control" required></div>
    </div>

    <div class="row mb-15 bg-accent">
        <div class="col-xs-4 text-right"><label for="structureEmail">E-mail <small class="fs-11">(adresses séparées par une virgule)</small> </label></div>
        <div class="col-xs-8"><input type="text" name="structureEmail" value="<?=$struct->structureEmail;?>" id="structureEmail" class="form-control" required></div>
    </div>

    <div class="row mb-15">
        <div class="col-xs-4 text-right"><label for="str_structureTaxInJournal">Traitement de la taxe</label></div>
        <div class="col-xs-8 text-left">
            <small class="fs-11">Intégrer la taxe dans le compte de compensation ?</small>
            <div class="custom-switch custom-switch-xs">
                <input class="custom-switch-input" value="<?=$struct->structureTaxInJournal;?>" id="structureTaxInJournal" type="checkbox" <?=($struct->structureTaxInJournal == '1')?'checked':'';?>>
                <label class="custom-switch-btn" for="structureTaxInJournal" data-target="#structureTaxInJournal"></label>
            </div>
        </div>
    </div>

    <div class="row mb-15 bg-accent">
        <div class="col-xs-9 "><label for="structureRestrictPayment">Paiements limités à la zone géographique</label></div>
        <div class="col-xs-2 text-left">
            <div class="custom-switch custom-switch-xs pl-0">
                <input class="custom-switch-input" id="structureRestrictPayment" value="<?=$struct->structureRestrictPayment;?>" type="checkbox" <?=($struct->structureRestrictPayment == '1')?'checked':'';?>>
                <label class="custom-switch-btn" for="structureRestrictPayment" data-target="#structureRestrictPayment"></label>
            </div>
        </div>
    </div>


    <div class="row m-b-20">
        <div class="col-sm-6">
            <div class="col-xs-6 text-right"><label for="structureActionRights">Actions autorisées</label></div>
            <div class="col-xs-6">
                <select name="structureActionRights" id="structureActionRights" class="form-control">
                    <option <?=($struct->structureActionRights == '1')?'selected':'';?> value="1">Tous</option>
                    <option <?=($struct->structureActionRights == '2')?'selected':'';?> value="2">Emission</option>
                    <option <?=($struct->structureActionRights == '3')?'selected':'';?> value="3">Paiement</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="col-xs-7 text-right"><label for="structurePartReseauTiersEmis">Part Réseau Tiers</label></div>
            <div class="col-xs-5"><input type="text" name="structurePartReseauTiersEmis" value="<?=$struct->structurePartReseauTiersEmis;?>" id="structurePartReseauTiersEmis" class="form-control" required></div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="col-xs-4 text-right"><label for="structureTaxe">Taxe</label></div>
            <div class="col-xs-8"><input type="text" value="<?=$struct->structureTaxe;?>" name="structureTaxe" id="structureTaxe" class="form-control" required></div>
        </div>

        <div class="col-sm-4 mb-15">
            <div class="col-xs-7 text-right"><label for="structureDistributeurId">Distributeur</label></div>
            <div class="col-xs-5"><input type="text" name="structureDistributeurId" <?=$struct->structureDistributeurId;?> id="structureDistributeurId" class="form-control" required></div>
        </div>
    </div>



    <div class="row mb-15">
        <div class="col-xs-8 text-right"><label for="">Autoriser paiements lorsque solde négatif:</label></div>
        <div class="col-xs-4">
            <div class="custom-switch custom-switch-xs text-left">
                <input class="custom-switch-input" id="structureAllowPaymentWithNegativeQuota" value="<?=$struct->structureAllowPaymentWithNegativeQuota;?>" type="checkbox" <?=($struct->structureAllowPaymentWithNegativeQuota == '1')?'checked':'';?>>
                <label class="custom-switch-btn" for="structureAllowPaymentWithNegativeQuota" data-target="#structureAllowPaymentWithNegativeQuota"></label>
            </div>
        </div>
    </div>



</div>
