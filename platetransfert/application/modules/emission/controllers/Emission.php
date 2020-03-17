<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emission extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->module('layout');

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('users/auth/login', 'refresh');
		}
		$this->ion_auth->get_user_group();
		$this->load->model('emission_model');
	}

	public function index($value='')
	{
		$this->dashboard();
	}

	public function cashacash($action = '')
	{
	    if(!empty($action)){
	        if($action == 'create'){
	            if(!empty($_POST)){

	                if($this->check_structure_quota_sold($_POST['ifm_montant_chiffre'])){
                        $transfert_id = $this->emission_model->create_transfert($_POST);
                        if($transfert_id != false){
                            if(!empty($transfert_id)){
                                $result = $this->emission_model->create_cashacash($transfert_id , $_POST);
                                if($result){
                                    $response = [
                                        'status'=>true,
                                        'message'=>'Le transfert a été créé avec succès'
                                    ];
                                }
                                else{
                                    $response = [
                                        'status'=>false,
                                        'message','Une erreur est survenue. Veillez réessayer',
                                    ];
                                }
                            }
                        }
                        else{
                            $response = [
                                'status'=>false,
                                'message','Impossible de créer le transfert.',
                            ];
                        }
                    }
                    else{
                        $response = [
                            'status'=>false,
                            'message'=>'Désoler Votre structure n’a pas assez de fond pour transférer ce montant !',
                        ];
                    }




                    display(json_encode($response));
                }
            }
        }
        else{

            $data['page'] = "emission/cashacash/accueil";
            $data['pays'] = $this->common_model->select("pays");
            $this->layout->template_view($data);
        }


		
	}

	public function cashacompte($value='')
	{
        if(!empty($action)){
            if($action == 'create'){
                if(!empty($_POST)){
                    $this->emission_model->create_cashacompte($_POST);
                    $this->session->set_flashdata('success_message','Données enregistrer avec succès');
                    redirect('emission/cashacompte');
                }
            }
        }

		$data['page'] = "emission/cashacompte/accueil";
        $data['pays'] = $this->common_model->select("pays");
        $this->layout->template_view($data);
	}

	public function cashawallet($action='')
	{
        if(!empty($action)){
            if($action == 'create'){
                if(!empty($_POST)){
                    $this->emission_model->create_cashawalet($_POST);
                    $this->session->set_flashdata('success_message','Données enregistrer avec succès');
                    redirect('emission/cashawallet');
                }
            }
        }
		$data['page'] = "emission/cashawallet/accueil";
        $data['pays'] = $this->common_model->select("pays");
        $this->layout->template_view($data);
	}

	public function agence($value='')
	{
		$data['page'] = "transfert/agence/accueil";
		$this->layout->template_view($data);
	}

	public function check_structure_quota_sold($amount = ''){

	    if(!empty($_POST['montant'])){
	        $montant =(int) $_POST['montant'];
	        $structure_data = $this->common_model->get_users_strc_data();
	        $solde = (float) $structure_data->structureSoldeQuota;

	        if($montant <= $solde){
	            $response = [
	                'status'=>true,
                    'message'=>'Montant valide',
                ];
            }
            else{
	            $response = [
	                'status'=>false,
                    'message'=>'Désoler Votre structure n’a pas assez de fond pour transférer ce montant !',
                ];
            }

            display(json_encode($response));
        }

        if(!empty($montant)){
            $montant =(int) $_POST['montant'];
            $structure_data = $this->common_model->get_users_strc_data();
            $solde = (float) $structure_data->structureSoldeQuota;

            if($montant <= $solde){
                return true;
            }
            else{
                return false;
            }

        }
    }

    public function getFrais ($args = []) {
        $operationType  = $args['operationType'];
        $montant        = $args['montant'];
        $taxe           = $args['taxe'];
        $currency       = $args['currency'];
        $paysEmis       = $args['paysEmis'];
        $paysDest       = $args['paysDest'];

        $where_tafif = [
            'joinzonetarifZoneemisId'=>$paysEmis,
            'joinzonetarifZonedestId'=>$paysDest,
            'joinzonetarifOperationType'=>$operationType,
        ];

        $tarifs_data = $this->emission_model->get_tarif($where_tafif);
        $emisZones = $this->emission_model->get_zone([]);


        $emisZones = $this->emission_model->get_zone(array ('paysId' => $args['paysEmis']));
        $destZones = $this->model->zonedest->getZones (array ('paysId' => $args['paysDest']));

        if ($emisZones and $destZones) {
            foreach ($emisZones['zoneemisId'] as $e => $zoneemisId) {
                foreach ($destZones['zonedestId'] as $d => $zonedestId) {
                    $conds = [
                        'where' => [
                            'joinzonetarifZoneemisId' => $zoneemisId,
                            'joinzonetarifZonedestId' => $zonedestId,
                            'joinzonetarifOperationType' => $args['operationType'],
                            'joinzonetarifType' => 2
                        ]
                    ];

                    if ($tarifs = $this->model->joinzonetarif->search ($conds)) {
                        foreach ($tarifs['joinzonetarifId'] as $key => $joinzonetarifId) {
                            // Get tarif agences
                            if ($agences = $this->model->jointarifagence->search (array ('where' => array ('jointarifagenceJoinzonetarifId' => $tarifs['joinzonetarifId'][$key])))) {
                                foreach ($agences['jointarifagenceAgenceId'] as $jta => $agenceId) {
                                    if ($this->model->user->extendedGet ('agenceId') != $agenceId) continue;
                                    $this->model->jointarifagence->catchProperties ($agences, $jta);
                                    $this->model->joinzonetarif->catchProperties ($agences, $jta);
                                    break 2;
                                }
                            }
                            // Get tarif structures
                            if ($structures = $this->model->jointarifstructure->search (array ('where' => array ('jointarifstructureJoinzonetarifId' => $tarifs['joinzonetarifId'][$key])))) {
                                foreach ($structures['jointarifstructureStructureId'] as $jts => $structureId) {
                                    if ($this->model->user->extendedGet ('structureId') != $structureId) continue;
                                    $this->model->jointarifstructure->catchProperties ($structures, $jts);
                                    $this->model->joinzonetarif->catchProperties ($structures, $jts);
                                    break 2;
                                }
                            }
                        }
                    }
                    if (!$this->model->joinzonetarif->get ('Id')) {
                        $conds['where']['joinzonetarifType'] = 1;
                        $conds['options']['catch'] = true;
                        $this->model->joinzonetarif->searchOne ($conds);
                    }
                    if ($this->model->joinzonetarif->get ('Id')) {
                        $montant = $this->model->currency->convert (array ('amount' => $args['montant'], 'from' => $args['currency'], 'to' => $this->model->joinzonetarif->extendedGet ('currencyCode')));
                        $exchangeRates = $this->model->currency->getConversionRates();
                        // Get additionnal taxes
                        if ($taxes = $this->model->jointaxetarif->search (array ('where' => array ('jointaxetarifJoinzonetarifId' => $this->model->joinzonetarif->get ('Id'))))) {
                            foreach ($taxes['taxeValue'] as $t => $value) {
                                if ($taxes['taxeFixed'][$t] == 1) {
                                    $additionalTax += $taxAmount = $value;
                                } else $additionalTax += $taxAmount = round ($montant * $value / 100, 2);
                                $additionalTaxes[$taxes['taxeName'][$t]] = $taxAmount;
                            }
                        }
                        // Get fees
                        $conds = array ('fields' => array ('grilleFrais','grilleFraisReseau'), 'where' => array ('grilleMin|<=' => $montant, 'grilleMax|>=' => $montant, 'grilleTarifId' => $this->model->joinzonetarif->get ('TarifId')));
                        $this->db->select ($conds);
                        if ($this->db->numRows) {
                            $this->row = $row = $this->db->fetchAssoc();
                            $row['grilleFraisTaxe'] =  ceil ($row['grilleFrais'] * $args['taxe'] / 100);
                            $row['grilleFraisTTC'] = $row['grilleFrais'] + $row['grilleFraisTaxe'];
                            $row['grilleFraisReseauTaxe'] = $row['grilleFraisReseau'] * $args['taxe'] / 100;
                            $row['grilleFraisReseauTTC'] = round ($row['grilleFraisReseau'] + $row['grilleFraisReseauTaxe']);
                            $row['grilleTaxe'] = $row['grilleFraisTaxe'] + $row['grilleFraisReseauTaxe'];
                            $row['grilleTotalFrais'] = round ($row['grilleFrais'] + $row['grilleFraisReseau'] + $row['grilleTaxe'] + $additionalTax);
                            if ($args['montant'] > 5000) $row['grilleTotalFrais'] += $this->model->conf['frais']['timbre'];
                            $row['additionalTaxes'] = $additionalTaxes;
                            if (!$args['localCurrency']) {
                                foreach ($row as $k => $val) if (substr_count ($k, 'grille')) $row[$k] = $row[$k] / $exchangeRates['exchangeRate'];
                                if ($row['additionalTaxes']) {
                                    foreach ($row['additionalTaxes'] as $k => $val) $$row['additionalTaxes'][$k] = $row['additionalTaxes'][$k] / $exchangeRates['exchangeRate'];
                                }
                            } elseif ($this->model->joinzonetarif->extendedGet('currencyCode') != $this->model->conf['exchangerate']['local']) {
                                //$exchangeRates = $this->model->currency->getConversionRates(array ('from' => $this->model->joinzonetarif->extendedGet('currencyCode')));
                                foreach ($row as $k => $val) if (substr_count ($k, 'grille')) $row[$k] = $row[$k] * $exchangeRates['fromExchangeRate'];
                                if ($row['additionalTaxes']) {
                                    foreach ($row['additionalTaxes'] as $k => $val) $row['additionalTaxes'][$k] = $row['additionalTaxes'][$k] * $exchangeRates['fromExchangeRate'];
                                }
                            }
                            return $row;
                        }
                    }
                }
            }
        }
    }

}