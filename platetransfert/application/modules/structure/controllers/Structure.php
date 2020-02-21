<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Structure extends MY_Controller 
{
    private $structure_table = 'structure';
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
		$this->load->model('structure_model');
	}

	public function index($value='')
	{
		$this->dashboard();
	}

	public function dashboard($value='')
	{
		$data['page'] = "structure/structure/accueil";
		$data['stucture_data'] = $this->structure_model->get_structure();
		$this->layout->template_view($data);
	}

	public function update_stucture_status(){
	    if(!empty($_POST)){
	        $this->structure_model->update_structure_status();
        }
    }

	public function edit_structure(){
	    if(!empty($_POST['structure_id'])){
	        if(empty($_POST['do_modification'])){
                $data['struct'] = $this->structure_model->get_structure_for_edition(['structureId'=>$_POST['structure_id']] , 'row');
                $data['pays'] = $this->common_model->select("pays");
                $data['type'] = $this->common_model->select("type_structure");
	            $data['structure_tutelle'] = $this->common_model->getAllData($this->structure_table,'structureId , structureName');
                $data['form_action'] = 'structure/edit_structure';
                if(!empty($_POST['voir_structure'])){
                    $data['voir_structure'] = 'voir structure';
                }
                $this->load->view('structure/structure/ajax/edit_structure',$data);
            }

            else{
	            $str_id = $_POST['structure_id'];
                unset($_POST['structure_id']);
                unset($_POST['do_modification']);
	            $structure_data = remove_empty($_POST);
	            $this->common_model->do_update($this->structure_table,['structureId'=>$str_id] , $structure_data);
	            $this->session->set_flashdata('success','Structure mise à jour avec succès');
//
	            redirect('structure');
            }

        }

    }

    public function create_structure(){
	    if(!empty($_POST)){
	        unset($_POST['structure_id']);
	        unset($_POST['do_modification']);
	        $this->common_model->INSERT($this->structure_table , $_POST);
	        $this->session->set_flashdata('success','Structure crée avec succès');
	        redirect('structure');
        }
        else{
            $data['pays'] = $this->common_model->select("pays");
            $data['type'] = $this->common_model->select("type_structure");
            $data['structure_tutelle'] = $this->common_model->getAllData($this->structure_table,'structureId , structureName');
            $data['form_action'] = 'structure/create_structure';
            $data['do_create'] = 'yes create';
            $this->load->view('structure/structure/ajax/edit_structure',$data);
        }

    }

    public function delete_structure(){
        if(!empty($_POST['structure_id'])){
            $this->common_model->delete(['structureId'=>$_POST['structure_id']] , $this->structure_table);
        }
    }

	public function create(){
	    $data['pays'] = $this->common_model->select('pays');
	    $this->load->view('structure/ajax/create',$data);
    }
}
