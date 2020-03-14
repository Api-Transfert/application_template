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
	                $transfert_id = $this->emission_model->create_transfert($_POST);
	                if($transfert_id != false){
                        if(!empty($transfert_id)){
                            $result = $this->emission_model->create_cashacash($transfert_id , $_POST);
                            if($result){
                                $response = [
                                    'status'=>true,
                                    'message'=>'Transfert Cree avec success'
                                ];
                            }
                            else{
                                $response = [
                                  'status'=>false,
                                  'message','Une erreur est survenue.. Veillez reesayer',
                                ];
                            }
                        }
                    }
                    else{
                        $response = [
                            'status'=>false,
                            'message','imposible de cree le transfert',
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

}