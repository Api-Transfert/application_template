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

		return $this->db->select('tarifName,tarifCurrencyId,tarif.id,tarifDate,currencyName,')
						        ->join('currency','tarif.tarifCurrencyId = currency.currencyId')
                                ->get('tarif')
                                ->$return_type();
    }

    public function update_structure_status(){
        $this->db->where(['structureId'=>$_POST['structure_id']])->update('structure',['structureActive'=>$_POST['new_status']]);
    }

    public function get_zone($where = [], $return_type = 'result'){
        if(empty($where)){
           $where = ['type'=>'emission'];
        }

        return $this->db->select('zones.id ,zone_id , pays.paysId , zone_date , name , paysName, type , zones.size')
                    ->join('zone_pays','zone_pays.zone_id = zones.id')
                    ->join('pays','pays.paysId = zone_pays.paysId')
                    ->where($where)
                    ->get('zones')->$return_type();
    }

    public function get_zone_tarif($where = [] , $return_type = 'result'){
        if(!empty($where)){
            $this->db->where($where);
        }

        return $this->db->select('zone_tarif.id , zone_tarif.zone_tarif_name,operation_type.operation_name,ze.name as zone_emission , zd.name as zone_destination, tarif.tarifName as grille ,zone_tarif.tarif_type')
            ->join('tarif','tarif.id = zone_tarif.tarif_id')
            ->join('zones as ze','ze.id = zone_tarif.tarif_zone_emis')
            ->join('zones as zd','zd.id = zone_tarif.tarif_zone_dest')
            ->join('operation_type','operation_type.id = zone_tarif.opration_type_id')
            ->get('zone_tarif')
            ->$return_type();
    }

}
