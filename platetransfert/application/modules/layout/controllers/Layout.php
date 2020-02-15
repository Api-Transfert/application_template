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
		$this->load->view('dashboard',$data);
	}
	public function load_sidebar($data = '')
	{
		$this->load->view('template/sidebar');
	}

}

/* End of file Template.php */
/* Location: ./application/modules/template/controllers/Template.php */

/* End of file Template.php */
/* Location: ./application/modules/template/controllers/Template.php */
