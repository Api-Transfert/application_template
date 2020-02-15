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

	public function select($table)
	{
		$query = $this->db->get($table);
		return $query->result();
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

		$this->db->update($table, $data, array('id' => $id));

		return TRUE;
	}

	public function delete($id,$table)
	{
		$this->db->where($id);
		$this->db->delete($table);
		return TRUE;
	}
}