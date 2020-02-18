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
	                $this->emission_model->create_cashacash($_POST);
	                $this->session->set_flashdata('success_message','Données enregistrer avec succès');
	                redirect('emission/cashacash');
                }
            }
        }

        $data['page'] = "emission/cashacash/accueil";
        $data['pays'] = $this->common_model->select("pays");
        $this->layout->template_view($data);

		
	}

	public function cashacompte($value='')
	{
		$data['page'] = "emission/cashacompte/accueil";
		$data['stucture_data'] = $this->structure_model->get_structure();
		$this->layout->template_view($data);
	}

	public function cashawallet($value='')
	{
		$data['page'] = "emission/cashawallet/accueil";
		$data['stucture_data'] = $this->structure_model->get_structure();
		$this->layout->template_view($data);
	}

	public function agence($value='')
	{
		$data['page'] = "transfert/agence/accueil";
		$this->layout->template_view($data);
	}

}