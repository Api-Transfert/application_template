<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Agence_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_agence($where = [] , $output = 'result'){
        if(!empty($where)) $this->db->where($where);
        return $this->db->select('agence.* , structureName')
                        ->join('pays','pays.paysId = agence.agencePaysId')
                        ->join('structure','structure.structureId = agence.agenceStructureId')
                        ->get('agence')
                        ->$output();
    }

    public function get_agence_for_edition($where = [] , $output = 'result'){
        if(!empty($where)){
            $this->db->where($where);
        }
        return $this->db->get('agence')->$output();
    }

    public function update_agence_status(){
        $this->db->where(['agenceId'=>$_POST['agence_id']])->update('agence',['agenceActive'=>$_POST['new_status']]);
    }
}
