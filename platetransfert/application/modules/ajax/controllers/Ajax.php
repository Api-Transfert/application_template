<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_uniquity()
    {
        if(!empty($_POST))
        {
            $where_unique = [
                "{$_POST['column']}" => $_POST['value']
            ];

            $data['response'] = ($this->common_model->IS_UNIQUE($_POST['table'],$where_unique))?'true':'false';
            $this->load->view('public/uniqity_response',$data);
        }
    }

    public function check_uniquity_multi_col()
    {
        if(!empty($_POST))
        {
            $where_unique = [];
            foreach ($_POST['conditions'] as $column => $value)
            {
                $column = str_replace('-not_equal',' !=',$column);
                $where_unique["{$column}"] = $value;
            }

            $data['response'] = ($this->common_model->IS_UNIQUE($_POST['table'],$where_unique))?'true':'false';
            $this->load->view('public/uniqity_response',$data);
        }
    }

    public function run_query()
    {
        if(!empty($_POST['sql_query']))
        {
            $this->db->query($_POST['sql_query']);
        }
    }

    public function do_upload( $path = '', $picture_name = '')
    {
        if(!empty($path)){
            $path = str_replace('--','/',$path);
            //make sure the path ends with a forward slash... so that we can add the file name and save it into the specified directory
            if(get_last_char($path) !='/'){
                $path.='/';
            }
        }

        //get the image name send in parameter if not empty, otherwise use a random generated id for the image name.
        $image_name = (!empty($picture_name))?$picture_name : random_id();

        //setting image configuration for (upload_image lib)
        $config['image_path'] =  ROOTPATH($path);
        $config['file_extension'] = 'png';
        $config['image_file'] = $_FILES['user_file'];
        $config['image_name'] = $image_name;
        $config['extension'] = ['JPG','jpg', 'PNG', 'png', 'JPEG', 'jpeg', 'webp'];
        //load upload library
        $this->load->library('upload', $config);

        $upload_result = $this->upload_image->load_image($config);

        $this->data['upload_result'] = ($upload_result == $config['image_name'].'.'.$config['file_extension'])?$upload_result : 'error';
        $this->load->view('upload_resonse', $this->data);
    }

    public function autocomplete_lang(){

        if(!empty($_POST['sql_query'])){
            $data['response'] = $this->db->query($_POST['sql_query'])->result();
            $data['search'] = $_POST['search'];
            $this->load->view('lancer/ajax/autocomplete_lang_response',$data);
        }

    }
}