<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Commision_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_commission($where = [] , $output = 'result'){
        if(!empty($where)) $this->db->where($where);
		return $this->db->select('commissionId,commissionActionType,commissionStructureId, structureName,productName,commissionTaux,
		commissionTauxTutelle,commissionTauxCommercial,commissionBaseTaux,commissionBaseTutelle,
		commissionBaseCommercial,commissionBaseQuickCash,commissionTauxSpecial,commissionBaseSpecial,
		commissionTauxDistributeur,commissionBaseDistributeur')
						->join('structure','commission.commissionStructureId = structure.structureId')
                        ->join('produits','produits.operationtype_id = commission.commissionOperationType')
                        ->get('commission')
                        ->$output();
    }

    public function update_structure_status(){
        $this->db->where(['structureId'=>$_POST['structure_id']])->update('structure',['structureActive'=>$_POST['new_status']]);
    }
}
