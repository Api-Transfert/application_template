<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends MY_Controller 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function template_view($data = NULL)
	{
	    $data['this_structure_data'] = $this->common_model->get_users_strc_data();
	    $data['this_agence_data']    = $this->common_model->get_users_agence_data();

		$this->load->view('dashboard',$data);
	}
	public function load_sidebar($data = '')
	{
		$this->load->view('template/sidebar');
	}

}