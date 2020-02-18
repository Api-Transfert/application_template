<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Structure extends MY_Controller 
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
}
