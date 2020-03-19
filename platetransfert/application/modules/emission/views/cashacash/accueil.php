<div class="page-container row-fluid container-fluid">
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Emission Cash à Cash</h1>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="text-center bg-accent">Informations Expéditeur</h2>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="form-container">
                                <form id="cashacash_form" class="ajax-form" method="post" action="<?=base_url('emission/cashacash/create');?>" onsubmit="ajax_submit_form_callback = after_submit">

                                    <div class="row">
                                        <div class="col-xs-12">

                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Nom*</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_nom" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Prénom*</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_prenom" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Adresse</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_addresse">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Téléphone</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Nature de la pièce d'identité*:	</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_pid_nature" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Numéro de la pièce d'identité*:</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_pid_numero" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Etablie à*:</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_etablie_a" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Etablie le*:	</label>
                                                    <div class="controls">
                                                        <input type="date" class="form-control" name="exp_etablie_le" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Pays d'émission de la pièce*:
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_pay_emission_piece" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Question secrète*:
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="question_secret" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Réponse*:
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="reponse" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Email:
                                                    </label>
                                                    <div class="controls">
                                                        <input type="email" class="form-control" name="exp_email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Alerte SMS / E-mail:
                                                    </label>
                                                    <div class="controls">
                                                        <input name="exp_alert_email_sms" value="1" tabindex="5" type="radio" id="minimal-checkbox-1" class="icheck-minimal-green" checked>
                                                        <label class="icheck-label form-label" for="minimal-checkbox-1">Oui</label>
                                                        <input name="exp_alert_email_sms" value="0" tabindex="5" type="radio" id="minimal-checkbox-2" class="icheck-minimal-red">
                                                        <label class="icheck-label form-label" for="minimal-checkbox-2">Non</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Bénéficiaires habituels: </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="exp_bene_habituel">
                                                    </div>
                                                </div>
                                            </div>
                                            <header class="panel_header" style="border: none">
                                                <h2 class="bg-accent text-center">Informations Bénéficiaire </h2>
                                            </header>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Nom*: </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="bene_nom" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Prénom*: </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="bene_prenom" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Adresse: </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="bene_addresse">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Téléphone:
                                                    </label>
                                                    <div class="controls">
                                                        <input type="number" class="form-control" name="bene_phone">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Pays*:</label>
                                                    <div class="controls">
                                                        <select class="form-control" name="bene_pays_id" id="bene_pays_id" required=>
                                                            <?php $displayed_pays = []; foreach($pays as $p):?>
                                                                <?php if(!in_array($p->paysId ,$displayed_pays)):;?>
                                                                    <option value="<?=$p->paysId;?>"><?=$p->paysName;?></option>
                                                                <?php endif;?>
                                                            <?php array_push($displayed_pays , $p->paysId); endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <header class="panel_header" style="border: none">
                                                <h2 class="bg-accent text-center"> Informations Montant (XOF) </h2>
                                            </header>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Montant en lettres: </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="ifm_montant_letre">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Montant en chiffres*: </label>
                                                    <div class="controls">
                                                        <input type="number" id="structure_montant" min="1" class="form-control" name="ifm_montant_chiffre" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label"> Frais d'envoi HT:
                                                    <input type="number" value="0" class="no-border" name="ifm_frai_envoi_ht" readonly></label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label"> Taxe:
                                                        <input type="number" class="no-border" name="ifm_taxe" value="0" readonly>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        CTHU: <input type="number" value="0" name="ifm_cthu" class="no-border" readonly>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        Frais d'envoi TTC: <input type="number" name="ifm_frai_envoi_ttc" value="0" class="no-border" readonly>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        Montant en devise: <input type="number" class="no-border" value="0" readonly name="ifm_montant_en_devise">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 no-pl">
                                                <div class="form-group" style="font-size: 2rem; text-align: center">
                                                    <label class="form-label"> <strong>Montant à payer:</strong> </label>
                                                    <div style="margin-top: 1rem">
                                                        <input type="text" ng-init="montant_a_payer='0'" ng-model="montant_a_payer"  name="ifm_montant_a_payer" class="dis-none">
                                                        {{montant_a_payer}} XOF
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pull-right">
                                                <button type="button" id="submit_form" class="btn btn-primary btn-corner right15" disabled><i class="fa fa-check"></i> Enrégistrer</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="clearfix"></div>

            <!-- MAIN CONTENT AREA ENDS -->
        </div>
    </section>
    <!-- END CONTENT -->
</div>
<script>
    const submit_btn = '#submit_form';
    const frais_envois_ht_tag = '[name="ifm_frai_envoi_ht"]';
    const tax_tag = '[name="ifm_taxe"]';
    const frais_envois_ttc_tag = '[name="ifm_frai_envoi_ttc"]';
    const montan_a_payer_tag = '[name="ifm_montant_a_payer"]';

    $(document).on('click','#submit_form',{passive:true},function () {
        if(validate_form('cashacash_form')){
            function submit_form(){
                $('#cashacash_form').submit();
            }
            sweetConfirm('Etre vous sure de vouloir Effectuer ce transfert ?',{yes:submit_form},'Attention !')
        }
    });
    
    $(document).on('blur','#structure_montant , [name="ifm_montant_chiffre"]',{passive:true},function () {
        const value = $(this).val();
        const zone_dest = $('#bene_pays_id').val();

        if(value.length > 0){
            $.post(base_url+'emission/check_structure_quota_sold',{montant:value},function (response) {
                response = $.parseJSON(response);
                if(response.status === true){
                    show_message('success',response.message);
                    check_grille(zone_dest , value);
                }
                else{
                    show_message('error',response.message);
                    reset_information_montant();
                    $(submit_btn).prop('disabled',true);
                }
            })
        }
        else{
            reset_information_montant();
        }


    });

    $(document).on('change','#bene_pays_id',{passive:true},function () {
        const zone_dest = $(this).val();
        const montant   = $('#structure_montant').val();
        if(zone_dest.length > 0 && montant.length > 0){
            check_grille(zone_dest , montant);
        }
    });


    function check_grille(zone_dest , montant){

        if(zone_dest !== undefined && montant !== undefined){
            $.post(base_url+'emission/get_frais',{'zone_dest':zone_dest, 'montant':montant,'operation_type':'1'},function (response) {
                response = $.parseJSON(response);
                if(response.status === true){
                    const frais = Number(response.frais);
                    const frais_reseau = Number(response.frais_reseau);
                    const struc_tx = Number(response.taxe) / 100;
                    const tx = (struc_tx * frais) + (struc_tx * frais_reseau);
                    const frais_ttc = frais + tx;
                    const montant_a_payer = Number(montant) + frais_ttc;

                    $(frais_envois_ht_tag).val(''+frais+'');
                    $(tax_tag).val(''+tx+'');
                    $(frais_envois_ttc_tag).val(''+frais_ttc+'');
                    $(montan_a_payer_tag).val(''+montant_a_payer+'');
                    $(montan_a_payer_tag).change();
                    $(submit_btn).prop('disabled',false);


                    show_message('success',response.message);
                }
                else{
                    show_message('error',response.message);
                    reset_information_montant();
                    $(submit_btn).prop('disabled',true);
                }
            });
        }
    }

    function reset_information_montant(){
        $(frais_envois_ht_tag).val('0');
        $(frais_envois_ttc_tag).val('0');
        $(tax_tag).val('0');
        $(montan_a_payer_tag).val('0');
        $(montan_a_payer_tag).change();
    }

    function after_submit(){
        show_message('success', 'Le transfert a été créé avec succès',4000);
        show_loader();
        setTimeout(function(){
            //refresh();
        },4000);
    }
</script>