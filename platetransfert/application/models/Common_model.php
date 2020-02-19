<?php defined('BASEPATH') OR exit('No direct script access allowed');

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




    public function INSERT($table = NULL, $data = array())
    {
        if (!empty($table) AND !empty($data)) {
            $this->db->insert($table, $data);
        }
    }

    public function GET_DATA($table = NULL, $where = array(), $order_by_column = NULL, $order_direction = 'DESC')
    {
        if (!empty($table)) {
            if (empty($order_by_column)) {
                return $this->db->where($where)
                    ->get($table);
            } else {
                return $this->db->where($where)
                    ->order_by($order_by_column, $order_direction)
                    ->get($table);
            }
        }
    }

    public function GET_COLUMNS($table = NULL, $columns = array(), $where = array(), $order_direction = '')
    {
        if (!empty($table)) {
            if (empty($order_direction)) {
                return $this->db->where($where)
                    ->select(implode(',', $columns))
                    ->get($table);
            } else {
                return $this->db->where($where)
                    ->select(implode(',', $columns))
                    ->order_by($order_direction)
                    ->get($table);
            }
        }
    }

    public function GET_COLUMNS_LIKE($table = NULL, $columns = array(), $where = array(),$where_not_in = array(), $order_direction = '' , $where_col = array())
    {
        if (!empty($table))
        {
            //order by statement is missing
            if (empty($order_direction))
            {
                //where not in statement available
                if(!empty($where_not_in[0] AND !empty($where_not_in[1])))
                {
                    return $this->db->like($where)
                        ->where($where_col)
                        ->select(implode(',', $columns))
                        ->where_not_in($where_not_in[0],$where_not_in[1])
                        ->get($table);
                }
                //where not in statement missing
                else
                {
                    return $this->db->like($where)
                        ->where($where_col)
                        ->select(implode(',', $columns))
                        ->get($table);
                }
            }
            //order by statement is available
            else
            {
                //where not in statement is available
                if(!empty($where_not_in[0] AND !empty($where_not_in[1])))
                {
                    return $this->db->like($where)
                        ->select(implode(',', $columns))
                        ->where($where_col)
                        ->where_not_in($where_not_in[0],$where_not_in[1])
                        ->order_by($order_direction)
                        ->get($table);
                }
                //where not in statement is missing
                else
                {
                    return $this->db->like($where)
                        ->select(implode(',', $columns))
                        ->where($where_col)
                        ->order_by($order_direction)
                        ->get($table);
                }


            }
        }
    }

    public function QUERY($request)
    {
        if(!empty($request))
        {
            $this->db->query($request);
        }
        else return false;
    }
    /**
     * @param array $tables
     * @param array $cond
     * @param array $columns
     * @param array $where
     * @param string $order_direction
     *
     * GET_COLUMNS_JOIN([table1 , table2],[user_id , user_id] , ['username','email','table1.user_id] , ['user_name'=>'john'])
     * produce : select(username , email , table1.user_id) from table1 join table2 on table1.user_id = table2.user_id
     */
    public function GET_COLUMNS_JOIN($tables = [], $cond = [], $columns = array(), $where = array(), $order_by = '')
    {
        if(empty($order_by))
        {
            return $this->db->select(implode(',', $columns))
                ->where($where)
                ->join($tables[0],"{$tables[0]}.{$cond[0]} = {$tables[1]}.{$cond[1]}")
                ->get($tables[1]);
        }
        else
        {
            return $this->db->select(implode(',', $columns))
                ->where($where)
                ->join($tables[0],"{$tables[0]}.{$cond[0]} = {$tables[1]}.{$cond[1]}")
                ->order_by($order_by)
                ->get($tables[1]);
        }
    }

    public function IS_UNIQUE($table = '', $where_unique = array())
    {
        if (!empty($table) && !empty($where_unique)) {

            $request = $this->db->where($where_unique)
                ->get($table);
            return ($request->num_rows()> 0)?false : true;
        }


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

    public function user_head_privilege($gp_id)
    {
        $this->db->select('*');
        $this->db->from('groups');
        $this->db->join('group_perm', 'group_perm.group_id = groups.id');
        $this->db->join('permissions', 'permissions.perm_id = group_perm.perm_id');
        $this->db->where('permissions.level', 0);
        $this->db->order_by('permissions.order');
        $this->db->where('group_perm.group_id',$gp_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function user_sub_privilege($gp_id,$perm_id)
    {
        $this->db->select('*');
        $this->db->from('groups');
        $this->db->join('group_perm', 'group_perm.group_id = groups.id');
        $this->db->join('permissions', 'permissions.perm_id = group_perm.perm_id');
        $this->db->where('permissions.parent_id', $perm_id);
        $this->db->where('permissions.level', 1);
        $this->db->group_by('permissions.order');
        $this->db->where('group_perm.group_id',$gp_id);
        $query = $this->db->get();
        return $query->result();
    }

}