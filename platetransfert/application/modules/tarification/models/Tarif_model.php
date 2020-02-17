<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class tarif_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_tarif($where = [] , $output = 'result'){
        if(!empty($where)) $this->db->where($where);
		return $this->db->select('tarifName,tarifCurrencyId,tarifId,tarifDate,currencyName,')
						->join('currency','tarif.tarifCurrencyId = currency.currencyId')
                        ->get('tarif')
                        ->$output();
    }

    public function update_structure_status(){
        $this->db->where(['structureId'=>$_POST['structure_id']])->update('structure',['structureActive'=>$_POST['new_status']]);
    }
}
