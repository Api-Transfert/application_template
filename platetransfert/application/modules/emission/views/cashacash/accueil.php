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
                                <form id="cashacash_form" class="ajax-form" method="post" action="<?=base_url('emission/cashacash/create');?>">

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
                                                        <select class="form-control" name="bene_pays_id" required=>
                                                            <?php foreach($pays as $p):?>
                                                                <option value="<?=$p->paysId;?>"><?=$p->paysName;?></option>
                                                            <?php endforeach;?>
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
                                                        0 XOF
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
    $(document).on('click','#submit_form',{passive:true},function () {
        if(validate_form('cashacash_form')){
            $('#cashacash_form').submit();
        }
    });
    
    $(document).on('blur','#structure_montant , [name="ifm_montant_chiffre"]',{passive:true},function () {
        const value = $(this).val();
        $.post(base_url+'emission/check_structure_quota_sold',{montant:value},function (response) {
            response = $.parseJSON(response);
            if(response.status === true){
                show_message('success',response.message);
                $(submit_btn).prop('disabled',false);
            }
            else{
                show_message('error',response.message);
                $(submit_btn).prop('disabled',true);
            }
        })
    });
</script>