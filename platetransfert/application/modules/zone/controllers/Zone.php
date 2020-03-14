<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Zone extends MY_Controller
{
    private $reseau_table = 'reseau';
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model(array('zone_model'));
		$this->load->module('layout');

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('users/auth/login', 'refresh');
		}
		$this->ion_auth->get_user_group();
	}

	public function index($value='')
	{
        $data['zones']=$this->zone_model->get_reseau();
        $data['page'] = "zone/accueil";
        $this->layout->template_view($data);

	}

    public function update_reseau_status(){
        if(!empty($_POST)){
            $this->zone_model->update_reseau_status();
        }
    }

    public function edit_zone(){
        if(!empty($_POST['reseauId'])){
            if(empty($_POST['do_modification'])){
                $data['reseau'] = $this->zone_model->get_reseau($_POST['reseauId']);
                $data['form_action'] = 'zone/edit_zone';
                if(!empty($_POST['see_data'])){
                    $data['see_data'] = 'see data';
                }
                $this->load->view('zone/ajax/edit_zone',$data);
            }

            else{
                $reseau_id = $_POST['reseauId'];
                unset($_POST['reseauId']);
                unset($_POST['do_modification']);
                $reseau_data = remove_empty($_POST);
                $this->common_model->do_update($this->reseau_table,['reseauId'=>$reseau_id] , $reseau_data);
                $this->session->set_flashdata('success','Zone mis à jour avec succès');
                redirect('zone');
            }

        }

    }
}