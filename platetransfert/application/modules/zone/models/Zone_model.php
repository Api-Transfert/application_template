<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Company Parexons
Date 26/1/2017
*/

class Zone_model extends CI_Model 
{
    public function update_reseau_status(){
        $this->db->where(['reseauId'=>$_POST['reseauId']])->update('reseau',['resauStatus'=>$_POST['new_status']]);
    }

	public function get_reseau($id="")
	{
	    $output = 'result';
	    if(!empty($id)){
	        $this->db->where('reseauId',$id);
	        $output = 'row';
        }

		return $this->db->get('reseau')->$output();
	}
}
