<body>
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


            <div class="col-lg-12">
                <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="text-center bg-accent">Informations Expéditeur</h2>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="form-container">
                                <form id="cashawalet" method="post" action="<?=base_url('emission/cashawallet/create');?>">

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
                                                        <input type="text" class="form-control" name="pid_nature" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Numéro de la pièce d'identité*:</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="pid_numero" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Etablie à*:</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="etablie_a" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Etablie le*:	</label>
                                                    <div class="controls">
                                                        <input type="date" class="form-control" name="etablie_le" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Pays d'émission de la pièce*:
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="pay_emission_piece" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Email:
                                                    </label>
                                                    <div class="controls">
                                                        <input type="email" class="form-control" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Alerte SMS / E-mail:
                                                    </label>
                                                    <div class="controls">
                                                        <input name="alert_email_sms" value="1" tabindex="5" type="radio" id="minimal-checkbox-1" class="icheck-minimal-green" checked>
                                                        <label class="icheck-label form-label" for="minimal-checkbox-1">Oui</label>
                                                        <input name="alert_email_sms" value="0" tabindex="5" type="radio" id="minimal-checkbox-2" class="icheck-minimal-red">
                                                        <label class="icheck-label form-label" for="minimal-checkbox-2">Non</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Bénéficiaires habituels: </label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" name="bene_habituel">
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
                                                        <input type="text" class="form-control" name="montant_letre">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Montant en chiffres*: </label>
                                                    <div class="controls">
                                                        <input type="number" class="form-control" name="montant_chiffre" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label"> Frais d'envoi HT: <strong>0</strong> </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label"> Taxe: <strong>0</strong> </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        CTHU: <strong>0</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        Frais d'envoi TTC: <strong>0</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        Montant en devise: <strong>0</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pl">
                                                <div class="form-group" style="font-size: 2rem; text-align: center">
                                                    <label class="form-label"> <strong>Montant à payer:</strong> </label>
                                                    <div style="margin-top: 1rem">
                                                        0 XOF
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pull-right">
                                                <button type="button" id="submit_form" class="btn btn-primary btn-corner right15"><i class="fa fa-check"></i> Enrégistrer</button>
                                            </div>
                                            <div class="pull-left">
                                                <button type="reset" class="btn btn-success btn-corner right15"><i class="fa fa-eraser"></i> Effacé</button>
                                            </div>
                                            <div class="clearfix"></div>
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
    $(document).on('click','#submit_form',{passive:true},function () {
        if(validate_form('cashawalet')){
            $('#cashawalet').submit();
        }
    });
</script>