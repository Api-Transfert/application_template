<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Tarification extends MY_Controller 
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
        $this->load->model('tarif_model');
    }

    public function index($value='')
    {
        redirect('users/auth/login');
    }

    public function grille($action = '')
    {
        if(!empty($action)){
            if($action == 'create'){
                if(!empty($_POST)){

                    if($this->check_structure_quota_sold($_POST['ifm_montant_chiffre'])){
                        $transfert_id = $this->tarif_model->create_transfert($_POST);
                        if($transfert_id != false){
                            if(!empty($transfert_id)){
                                $result = $this->tarif_model->create_cashacash($transfert_id , $_POST);
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

            if($action == 'get_montant'){
                if(!empty($_POST['tarif_id'])){
                    $grille = $this->tarif_model->get_grille(['tarif_id'=>$_POST['tarif_id']] , 'row_array');
                    if(!empty($grille)){
                        $grille['status'] =true;
                    }
                    else{
                        $grille = [
                            'status'=>false,
                            'message'=>'Aucun Montant trouvé'
                        ];
                    }
                    display(json_encode($grille));
                }
            }
        }
        else{

            $data['page'] = "tarification/grille/accueil";
            $data['tarifs'] = $this->tarif_model->get_tarif();
            $this->layout->template_view($data);
        }

    }

    public function zone(){
        $data['page'] = 'tarification/zone/accueil';
        $data['zones_emissions'] = $this->tarif_model->get_zone(['zones.type'=>'emission']);
        $data['zones_destination'] = $this->tarif_model->get_zone(['zones.type'=>'destination']);
        $this->layout->template_view($data);
    }

    public function zone_tarif(){
        $data['page'] = 'tarification/zone_tarif/accueil';
        $data['zone_tarifs'] = $this->tarif_model->get_zone_tarif();
        $this->layout->template_view($data);
    }

    public function get_frais($data = []){
        if(!empty($data)){
            $zone_emis_id   = $data['zone_emis_id'];
            $zone_dest_id   = $data['zone_dest_id'];
            $operation_type = $data['operation_type'];
            $currency_id    = $data['currency_id'];
        }
    }
}
