<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agence extends MY_Controller
{
    private $agence_table = 'agence';
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
		$this->load->model('agence_model');
	}

	public function index($value='')
	{
		$this->dashboard();
	}

	public function dashboard($value='')
	{
		$data['page'] = "structure/agence/accueil";
		$data['agence_data'] = $this->agence_model->get_agence();
		$this->layout->template_view($data);
	}

    public function update_agence_status(){
        if(!empty($_POST)){
            $this->agence_model->update_agence_status();
        }
    }

	public function edit_agence(){
	    if(!empty($_POST['agence_id'])){
	        if(empty($_POST['do_modification'])){
                $data['agence'] = $this->agence_model->get_agence_for_edition(['agenceId'=>$_POST['agence_id']] , 'row');
                $data['pays'] = $this->common_model->select("pays");
                $data['structure'] = $this->common_model->getAllData('structure','structureId , structureName');
                $data['form_action'] = 'structure/agence/edit_agence';
                if(!empty($_POST['voir_agence'])){
                    $data['voir_agence'] = 'voir agence';
                }
                $this->load->view('structure/agence/ajax/edit_agence',$data);
            }

            else{
	            $agence_id = $_POST['agence_id'];
                unset($_POST['agence_id']);
                unset($_POST['do_modification']);
	            $agence_data = remove_empty($_POST);
	            $this->common_model->do_update($this->agence_table,['agenceId'=>$agence_id] , $agence_data);
	            $this->session->set_flashdata('success','agence mise à jour avec succès');
//
	            redirect('structure/agence');
            }

        }

    }

    public function create_agence(){
	    if(!empty($_POST)){
	        unset($_POST['agence_id']);
	        unset($_POST['do_modification']);
	        $_POST['agenceDate'] = date('Y-m-d H:i:s' , time());
	        $this->common_model->INSERT($this->agence_table , $_POST);
	        $this->session->set_flashdata('success','agence crée avec succès');

	        redirect('structure/agence');
        }
        else{
            $data['structure'] = $this->common_model->getAllData('structure','structureId , structureName');
            $data['pays'] = $this->common_model->select("pays");
            $data['form_action'] = 'structure/agence/create_agence';
            $data['do_create'] = 'yes create';
            $this->load->view('structure/agence/ajax/edit_agence',$data);
        }

    }

    public function delete_agence(){
        if(!empty($_POST['agence_id'])){
            $this->common_model->delete(['agenceId'=>$_POST['agence_id']] , $this->agence_table);
        }
    }

	public function create(){
	    $data['pays'] = $this->common_model->select('pays');
	    $this->load->view('agence/ajax/create',$data);
    }
}
