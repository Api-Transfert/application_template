<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Structure_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_structure($where = [] , $output = 'result'){
        if(!empty($where)) $this->db->where($where);
        return $this->db->select('structureId,structureName, typeName, structureSoldeQuota , paysName , structureActive')
                        ->join('pays','pays.paysId = structure.structurePaysId')
                        ->join('type_structure','type_structure.idtypeStructure = structure.structureType')
                        ->get('structure')
                        ->$output();
    }

    public function get_structure_for_edition($where = [] , $output = 'result'){
        if(!empty($where)){
            $this->db->where($where);
        }
        return $this->db->select('structureId,structureName,structureActionRights,structureCodeBanque,structureType,structureAllowPaymentWithNegativeQuota,structureTaxInJournal,structureTaxe,structureDistributeurId,structureRestrictPayment,structurePartReseauTiersEmis, typeName,structureSendEmailAlert,structurePhone,structureEmail, structureSoldeQuota,structureAdresse,structureSendSMSAlert , paysName,pays.paysId , structureActive,structurePrefinanced')
            ->join('pays','pays.paysId = structure.structurePaysId')
            ->join('type_structure','type_structure.idtypeStructure = structure.structureType')
            ->get('structure')
            ->$output();
    }

    public function update_structure_status(){
        $this->db->where(['structureId'=>$_POST['structure_id']])->update('structure',['structureActive'=>$_POST['new_status']]);
    }
}
