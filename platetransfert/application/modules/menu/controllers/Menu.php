<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->module('layout');
		if (!$this->ion_auth->logged_in())
		{
			redirect('users/auth/login', 'refresh');
		}
		$this->ion_auth->get_user_group();
		$this->load->model('menu_model');
	}
	public function index()
	{
        if ($_POST) {
            $data = array(
                'perm_name' => post('perm_name'),
                'icon' => post('icon'),
                'menu_name' => 'head',
                'url' => post('url'),
                'slug' => slugify(post('perm_name')),
                'level' => 0,
                'parent_id' => 0,
            );

            $result = $this->common_model->add('permissions', $data);

            if ($result) {
                $this->session->set_flashdata('success_message','Permission Added Successfully');
                redirect('menu', 'refresh');
            } else {
                $msg = "Error";
                $this->session->set_flashdata('error_message', $msg);
                redirect('menu', 'refresh');
            }
        }
        else {

            $data['head_permissions'] = $this->common_model->getAllData('permissions', '*', '', array('level' => 0),'order ASC');
            $data['sub_permissions'] = $this->common_model->getAllData('permissions', '*', '', array('level' => 1),'order ASC');

            $data['page'] = "menu/index";
            $this->layout->template_view($data);

        }
    }

    public function sub_permission()
    {
        $icon = (!empty($_POST['perm_icon']))?$_POST['perm_icon'] : 'fas fa-dot-circle';
        $data = array(
            'perm_name' => post('perm'),
            'icon' => $icon,
            'slug' => slugify(post('perm')),
            'level' => 1,
            'menu_name' => 'sub',
            'url' => post('url'),
            'parent_id' => post('head_perm'),
        );

        $result = $this->common_model->add('permissions', $data);

        if ($result) {
            $msg = "Permission Added Successfully";
            $this->session->set_flashdata('success_message', $msg);
            redirect('menu', 'refresh');
        } else {
            $msg = "Error";
            $this->session->set_flashdata('error_message', $msg);
            redirect('menu', 'refresh');
        }
    }

    public function delete_perm($id)
    {
        $this->common_model->delete(array('perm_id' => $id),'permissions');
        $this->common_model->delete(array('parent_id' => $id),'permissions');

//        $msg = "Permission Delete Successfully";
//        $this->session->set_flashdata('success_message', $msg);
//        redirect('menu', 'refresh');
    }

    public function get_perm()
    {
        $id = post('id');
        $level = post('level');

        if($level == 0)
        {
            $edit_id = array('perm_id' => $id);

            $result = $this->common_model->getAllData('permissions','*',1,$edit_id);

            echo(json_encode($result));
        }
        else
        {
            $result =  $this->common_model->getAllData('permissions','*',1,array('perm_id' => $id));

            echo (json_encode($result));
        }
    }

    public function update_perm()
    {
        if (!$this->ion_auth->is_admin())
        {
            return show_error("You Must Be An Administrator To View This Page");
        }
        $data = array(
            'perm_name' => post('perm_name'),
            'icon' => post('icon'),
            'url' => post('url'),
        );

        $result = $this->common_model->update(array('perm_id' => post('id')),$data,"permissions");

        if ($result)
        {
            $msg = "Head Permission Update Successfully";
            $this->session->set_flashdata('success_message',$msg);
            redirect('menu','refresh');
        }
        else
        {
            $msg = "Error";
            $this->session->set_flashdata('error_message',$msg);
            redirect('menu','refresh');
        }
    }

    public function update_sub_permission()
    {
        $icon = (!empty($_POST['perm_icon']))?$_POST['perm_icon'] : 'fas fa-dot-circle';
        $data = array(
            'icon'=>$icon,
            'perm_name' => post('perm'),
            'url' => post('url'),
            'parent_id' => post('head_perm'),
        );

        $result = $this->common_model->update(array('perm_id' => post('id')),$data,"permissions");

        if ($result) {
            $msg = "Sub Permission Updated Successfully";
            $this->session->set_flashdata('success_message', $msg);
            redirect('menu', 'refresh');
        } else {
            $msg = "Error";
            $this->session->set_flashdata('error_message', $msg);
            redirect('menu', 'refresh');
        }
    }

    public function reorder_menu(){
        if(!empty($_POST)){
            foreach($_POST as $perm_id=>$order){
                $this->db->where('perm_id',$perm_id)->update('permissions',['order'=>$order]);
            }
            $this->session->set_flashdata('message','Menu successfully reordered');

        }
    }

    public function update_menu_parent(){
        $this->db->update('permissions',['parent_id'=>null]);
        if(!empty($_POST)){

            foreach($_POST as $perm_id=>$parent){

                $this->db->where('perm_id',$perm_id)->update('permissions',['parent_id'=>$parent]);

                $this->db->where('perm_id',$perm_id)->update('permissions',['menu_name'=>'sub' , 'level'=>'1']);
            }
            //$this->session->set_flashdata('message','Menu successfully reordered');

        }
        else{
            $this->db->update('permissions',['menu_name'=>'head' , 'level'=>'0']);
        }
    }
}