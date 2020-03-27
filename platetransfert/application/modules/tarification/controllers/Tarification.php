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

    public function grille($action = '' , $id = '')
    {
        if(!empty($action)){
            if($action == 'create'){
                if(!empty($_POST)){
                    $this->common_model->INSERT('tarif',$_POST);
                    $response = [
                        'status'=>true,
                        'message'=>'grille crée avec success'
                    ];
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

            if($action == 'delete'){
                $this->common_model->delete($_POST , 'tarif');
                $response = [
                    'status'=>true,
                    'message'=>'Grille supprimer avec succès'
                ];
                display(json_encode($response));
            }

            if($action == 'edit'){
                if(!empty($_POST) and !empty($id)){
                    $this->common_model->update(['id'=>$id],$_POST,'tarif');
                    $response = [
                        'status'=>true,
                        'message'=>'Grille modifier avec succès.'
                    ];
                    display(json_encode($response));
                }
            }
        }
        else{

            $data['page'] = "tarification/grille/accueil";
            $data['tarifs'] = $this->tarif_model->get_tarif();
            $data['currencies'] = $this->common_model->GET('currency');
            $this->layout->template_view($data);
        }

    }

    public function zone($action = '' , $id = ''){
        if(!empty($action)){
            if(!empty($_POST)){
                if($action == 'add'){
                    $_POST['zone_date'] = date('Y-m-d H:i:s');
                    $this->common_model->INSERT('zones',$_POST);
                    $response = [
                                    'status'=>true,
                                    'message'=>'Zone '.$_POST['type'].' ajouter avec succès'
                                ];
                    display(json_encode($response));
                }

                if($action == 'get_zone_data'){
                    if(!empty($_POST['id'])){
                        $zone_data = $this->common_model->GET('zones',$_POST,'row_array');
                        $zone_data['status'] = true;

                        display(json_encode($zone_data));
                    }
                }

                if($action == 'delete'){
                    $this->common_model->delete($_POST , 'zones');
                    $response = [
                        'status'=>true,
                        'message'=>'zone supprimer avec succès'
                    ];
                    display(json_encode($response));
                }

                if($action == 'edit'){
                    if(!empty($_POST) and !empty($id)){
                        $this->common_model->update(['id'=>$id],$_POST,'zones');
                        $response = [
                            'status'=>true,
                            'message'=>'Zone modifier avec succès.'
                        ];
                        display(json_encode($response));
                    }
                }
            }
        }
        else{
            $data['page'] = 'tarification/zone/accueil';
            $data['zones_emissions'] = $this->tarif_model->get_zone(['zones.type'=>'emission']);
            $data['zones_destination'] = $this->tarif_model->get_zone(['zones.type'=>'destination']);
            $this->layout->template_view($data);
        }

    }

    public function zone_tarif($action = '' , $id = ''){
        if(!empty($action)){
         if(!empty($_POST)){
             if($action == 'create'){
                 $_POST['tarif_date'] = date('Y-m-d H:i:s');
                 $this->common_model->INSERT('zone_tarif',$_POST);
                 $response = [
                                 'status'=>true,
                                 'message'=>'Tarif ajouter avec succès'
                             ];

                 display(json_encode($response));
             }

             if($action == 'get_zone_data'){
                 if(!empty($_POST['id'])){
                     $zone_data = $this->common_model->GET('zone_tarif',$_POST,'row_array');
                     $zone_data['status'] = true;

                     display(json_encode($zone_data));
                 }
             }

             if($action == 'edit'){
                 if(!empty($_POST) and !empty($id)){
                     $this->common_model->update(['id'=>$id],$_POST,'zone_tarif');
                     $response = [
                         'status'=>true,
                         'message'=>'Tarif modifier avec succès.'
                     ];
                     display(json_encode($response));
                 }
             }

             if($action == 'delete'){
                 $this->common_model->delete($_POST , 'zone_tarif');
                 $response = [
                     'status'=>true,
                     'message'=>'Tarif supprimer avec succès'
                 ];
                 display(json_encode($response));
             }
         }
        }

        else{
            $data['page']               = 'tarification/zone_tarif/accueil';
            $data['zone_tarifs']        = $this->tarif_model->get_zone_tarif();
            $data['zones_emissions']    = $this->common_model->GET('zones',['type'=>'emission']);
            $data['zones_destination']  = $this->common_model->GET('zones',['type'=>'destination']);
            $data['operations']           = $this->common_model->GET('operation_type');
            $data['grille']             = $this->common_model->GET('tarif');
            $this->layout->template_view($data);
        }

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
