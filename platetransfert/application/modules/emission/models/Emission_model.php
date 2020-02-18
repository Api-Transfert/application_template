<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Emission_model extends CI_Model
{
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
}
