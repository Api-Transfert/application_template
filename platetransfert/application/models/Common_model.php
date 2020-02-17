<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Auther : Salman Iqbal
* IDE    : Sublime
* Date   : 2/5/2017
*/
class Common_model extends CI_Model
{
	public function add($table,$data)
	{
		$query = $this->db->insert($table,$data);
		return TRUE;
	}

	public function select($table , $where = [] , $output = 'result')
	{
        if(!empty($where)) $this->db->where($where);
        $query = $this->db->get($table);
		return $query->$output();
	}

	public function update_data($id,$table)
	{
		$this->db->where($id);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function update($id,$data,$table)
	{
		if (empty($id)) return FALSE;

		$this->db->update($table, $data, $id);

		return TRUE;
	}

	public function delete($id,$table)
	{
		$this->db->where($id);
		$this->db->delete($table);
		return TRUE;
	}

	function getAllData($table,$specific='',$row='',$Where='',$order='',$limit='',$groupBy='',$like = '')
	{
		// If Condition
		if (!empty($Where)):
			$this->db->where($Where);
		endif;
		// If Specific Columns are require
		if (!empty($specific)):
			$this->db->select($specific);
		else:
			$this->db->select('*');
		endif;

		if (!empty($groupBy)):
			$this->db->group_by($groupBy);
		endif;
		// if Order
		if (!empty($order)):
			$this->db->order_by($order);
		endif;
		// if limit
		if (!empty($limit)):
			$this->db->limit($limit);
		endif;

		//if like
		if(!empty($like)):
			$this->db->like($like);
		endif;	
		// get Data
		
		//if select row
		if(!empty($row)):
			$GetData = $this->db->get($table);
			return $GetData->row();
		else:
			$GetData = $this->db->get($table);
			return $GetData->result();
		endif;	
	}

	function DJoin($field,$tbl,$jointbl1,$Joinone,$row='',$jointbl3='',$Where='',$order='',$groupy = '',$limit = '',$query = '')
    {
        $this->db->select($field);
        $this->db->from($tbl);
        $this->db->join($jointbl1,$Joinone);
        if (!empty($jointbl3)):
            foreach ($jointbl3 as $Table => $On):
                $this->db->join($Table,$On);
            endforeach;
        endif;
        // if Group
		if (!empty($groupy)):
			$this->db->group_by($groupy);
		endif;
        if(!empty($order)):
            $this->db->order_by($order);
        endif;
        if(!empty($Where)):
            $this->db->where($Where);
        endif;
        if(!empty($limit)):
            $this->db->limit($limit);
        endif;
        
        if(!empty($row)):
			$query = $this->db->get();
			return $query->row();
		else:
	        $query=$this->db->get();
	        return $query->result();
	    endif;	    

    }

    public function get_user_privileges($id)
    {
        $this->db->select('*')
            ->from('groups')
            ->join('group_perm', "groups.id = group_perm.group_id")
            ->join('permissions', "permissions.perm_id = group_perm.perm_id")
            ->where('group_perm.group_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function remove_from_privileges($privilege_ids=false, $group_id=false)
    {
        // group id is required
        if(empty($group_id))
        {
            return FALSE;
        }

        // if privilege id(s) are passed remove privilege from the group(s)

        if(!is_array($privilege_ids))
        {
            $privilege_ids = array($privilege_ids);
        }

        foreach($privilege_ids as $privilege_id)
        {
            $this->db->select('*')
                ->from('group_perm')
                ->join('groups', "groups.id = group_perm.group_id")
                ->join('permissions', "permissions.perm_id = group_perm.perm_id")
                ->where('group_perm.group_id',$group_id);
            // ->where('group_perm.perm_id',$privilege_id);
            $this->db->delete();
        }

        return TRUE;
    }

}