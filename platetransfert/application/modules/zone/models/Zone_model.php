<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Company Parexons
Date 26/1/2017
*/

class Zone_model extends CI_Model 
{
	// get All Users
	public function all_users()
	{
		$this->db->order_by('id','desc');
		$this->db->limit(8);
		$query = $this->db->get('users');
		return $query->result();
	}

	//Count Users
	public function count_users()
	{
		$this->db->select('*');
		$this->db->from('users');
		return $this->db->count_all_results();
	}

	public function recent_users()
	{
		$this->db->where('date', date('Y-m-d'));
		$query = $this->db->get('users');
		return $count = $query->num_rows();
	}

	public function weekly_data()
	{
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('DATE > DATE_SUB(NOW(), INTERVAL 1 WEEK)');
		return $this->db->count_all_results();
	}

	public function get_all_pays($id="")
	{
		$this->db->select('*')
				 ->from('reseau');
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

/* End of file Users_modal.php */
/* Location: ./application/models/Users_modal.php */
