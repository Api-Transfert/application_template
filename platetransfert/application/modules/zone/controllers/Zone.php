<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Zone extends MY_Controller 
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
	}

	public function index($value='')
	{
		$this->dashboard();
		
	}


	public function dashboard($value='')
	{
		$data['page'] = "zone/zone/accueil";
		$this->layout->template_view($data);
	}

	public function layout_boxed()
	{
		// $data['sidebar'] = $this->template->load_sidebar();
		view('transfert/layout/layout-boxed');
	}

	public function mega_menu($value='')
	{
		view("transfert/layout/mega_menu");
	}

	public function layout_horizontal($value='')
	{
		view("transfert/layout/layout-horizontal");
	}

	public function layout_sidebar_scroll($value='')
	{
		$data['page'] = "extras/layout/layout-sidebar-scroll";
		$this->template->template_view($data);
	}




	public function structure($value='')
	{
		$data['page'] = "transfert/structure/accueil";
		$this->layout->template_view($data);
	}


	public function agence($value='')
	{
		$data['page'] = "transfert/agence/accueil";
		$this->layout->template_view($data);
	}

	public function layout_static_leftbar($value='')
	{
		$data['page'] = "transfert/layout/layout-static-leftbar";
		$this->template->template_view($data);
	}

	public function app_inbox()
	{
		view("transfert/layout/email_template");
	}

	public function email_compose()
	{
		$data['page'] = "transfert/extra/inbox_compose";
		$this->template->template_view($data);
	}

	public function userguide()
	{
		view('userguide/index');
	}
}

/* End of file Extras.php */
/* Location: ./application/controllers/Extras.php */
