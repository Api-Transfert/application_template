<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Extras extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->module('template');

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('users/auth/login', 'refresh');
		}
		$this->ion_auth->get_user_group();
	}

	public function dashboard($value='')
	{
		$data['sidebar'] = $this->template->load_sidebar();
		view('extra/dashboard',$data);
	}
	

	public function layout_boxed()
	{
		// $data['sidebar'] = $this->template->load_sidebar();
		view('extras/layout/layout-boxed');
	}

	public function mega_menu($value='')
	{
		view("extras/layout/mega_menu");
	}

	public function layout_horizontal($value='')
	{
		view("extras/layout/layout-horizontal");
	}

	public function layout_sidebar_scroll($value='')
	{
		$data['page'] = "extras/layout/layout-sidebar-scroll";
		$this->template->template_view($data);
	}

	public function layout_static_leftbar($value='')
	{
		$data['page'] = "extras/layout/layout-static-leftbar";
		$this->template->template_view($data);
	}

	public function app_inbox()
	{
		view("extras/layout/email_template");
	}

	public function email_compose()
	{
		$data['page'] = "extras/extra/inbox_compose";
		$this->template->template_view($data);
	}

	public function userguide()
	{
		view('userguide/index');
	}
}

/* End of file Extras.php */
/* Location: ./application/controllers/Extras.php */