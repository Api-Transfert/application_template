<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Emission_model extends CI_Model
{
    private $cashacash_table    = 'emission__cashacash';
    private $cashawalet_table   = 'emission__cashawalet';

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

    public function create_transfert($data = []){
        if(!empty($data)){
            $time = time();
            $transfert_data =[];


            $transfert_data['exp_nom']               = $data['exp_nom'];
            $transfert_data['exp_prenom']            = $data['exp_prenom'];
            $transfert_data['exp_addresse']          = $data['exp_addresse'];
            $transfert_data['exp_phone']             = $data['exp_phone'];
            $transfert_data['bene_nom']              = $data['bene_nom'];
            $transfert_data['bene_prenom']           = $data['bene_prenom'];
            $transfert_data['bene_pays_id']          = $data['bene_pays_id'];
            $transfert_data['exp_bene_habituel']     = $data['exp_bene_habituel'];
            $transfert_data['exp_etablie_a']         = $data['exp_etablie_a'];
            $transfert_data['exp_etablie_le']        = $data['exp_etablie_le'];
            $transfert_data['exp_pay_emission_piece']= $data['exp_pay_emission_piece'];
            $transfert_data['exp_email']             = $data['exp_email'];
            $transfert_data['exp_alert_email_sms']   = $data['exp_alert_email_sms'];
            $transfert_data['exp_pid_nature']        = $data['exp_pid_nature'];
            $transfert_data['exp_pid_numero']        = $data['exp_pid_numero'];
            $transfert_data['agence_user_id']        = $this->session->userdata('user_id');
            $transfert_data['ifm_montant_letre']     = $data['ifm_montant_letre'];
            $transfert_data['ifm_montant_chiffre']   = $data['ifm_montant_chiffre'];
            $transfert_data['ifm_frai_envoi_ttc']    = $data['ifm_frai_envoi_ttc'];
            $transfert_data['ifm_taxe']              = $data['ifm_taxe'];
            $transfert_data['ifm_montant_en_devise'] = $data['ifm_montant_en_devise'];
            $transfert_data['ifm_cthu']              = $data['ifm_cthu'];
            $transfert_data['date ']                 = date('d-m-Y H:i:s');
            $transfert_data['time ']                 = $time;
            $transfert_data['status ']               = 0;

            $this->db->insert('transferts',$transfert_data);
            $transfert_id = $this->db->get_where('transferts',['time'=>$time])->row()->id;
            if(!empty($transfert_id)){
                return $transfert_id;
            }
            else{
                return false;
            }

        }
        else return false;
    }

    public function create_cashacash($transfert_id = '' , $data = []){
        if(!empty($data) and !empty($transfert_id)){
            $cash_a_cash_data= [
                'transferts_id'=>$transfert_id,
                'question_secret'=>$data['question_secret'],
                'reponse'=>$data['reponse'],
                'addresse'=>$data['exp_addresse'],
                'bene_phone'=>$data['bene_phone'],
            ];

            $this->db->insert('transferts__cashacash',$cash_a_cash_data);
            return true;
        }
        return false;
    }

    public function create_cashawalet($data = []){
        if(!empty($data)){
            $this->db->insert($this->cashawalet_table , $data);
        }
    }

    public function get_zone($where = []){

    }

    public function get_tarif($where = [] , $return_type = 'row'){
        return $this->db->where($where)->get('joinzonetarif')->$return_type();
    }



}
