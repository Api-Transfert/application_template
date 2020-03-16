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

    public function get_tarif($where = [] , $return_type = 'result'){
        if(!empty($where)){
            $this->db->where($where);
        }

		return $this->db->select('tarifName,tarifCurrencyId,tarifId,tarifDate,currencyName,')
						        ->join('currency','tarif.tarifCurrencyId = currency.currencyId')
                                ->get('tarif')
                                ->$return_type();
    }

    public function update_structure_status(){
        $this->db->where(['structureId'=>$_POST['structure_id']])->update('structure',['structureActive'=>$_POST['new_status']]);
    }

    public function get_zone_emission($where = [] , $return_type = 'result'){
        if(!empty($were)){
            $this->db->where($where);
        }
        return $this->db
                    ->join('pays','pays.paysId = joinpayszoneemis.paysId')
                    ->get('joinpayszoneemis')->$return_type();
    }

    public function get_zone_destination($where = [] , $return_type = 'result'){
        if(!empty($were)){
            $this->db->where($where);
        }
        return $this->db
                    ->join('pays' , 'pays.paysId = joinpayszonedest.paysId')
                    ->get('joinpayszonedest')->$return_type();
    }

}
