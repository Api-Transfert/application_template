<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Emission_model extends CI_Model
{
    private $cashacash_table = 'emission__cashacash';
    public function __construct()
    {
        parent::__construct();
    }

    public function get_structure(){
        return $this->db->select('structureId,structureName , typeName, structureSoldeQuota , paysName , structureActive')
                        ->join('pays','pays.paysId = structure.structurePaysId')
                        ->join('type_structure','type_structure.idtypeStructure = structure.structureType')
                        ->get('structure')
                        ->result();
    }

    public function update_structure_status(){
        $this->db->where(['structureId'=>$_POST['structure_id']])->update('structure',['structureActive'=>$_POST['new_status']]);
    }

    public function create_cashacash($data = []){
        if(!empty($data)){
            $this->db->insert($this->cashacash_table , $data);
        }
    }
}
