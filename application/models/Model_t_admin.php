<?php
class Model_t_admin extends CI_Model
{
	protected $_table = 'user';

	function add($data)
	{
		$this->db->insert($this->_table,$data);
	}

	function addadmin($data)
	{
		$this->db->insert('t_admin',$data);
	}

	function filter($start, $end)
	{
		$this->db->select('present.created_at as absensi, user.name, user.email, user.address, user.phone, present.user_id, user.id');
		$this->db->join('user','present.user_id = user.id');
		$this->db->where('present.created_at >=',$start.' 00:00:00');
		$this->db->where('present.created_at <=',$end.' 23:59:59');
		//$this->db->group_by('present.user_id');
		$this->db->order_by('present.created_at','desc');
		return $this->db->get('present')->result_array();
	}

	function filterstart($start)
	{
		$this->db->join('user','present.user_id = user.id');
		$this->db->where('present.created_at >=',$start.' 00:00:00');
		$this->db->group_by('present.user_id');
		$this->db->order_by('present.created_at','desc');
		return $this->db->get('present')->result_array();
	}

	function filterend($end)
	{
		$this->db->join('user','present.user_id = user.id');
		$this->db->where('present.created_at <=',$end.' 23:59:59');
		$this->db->group_by('user_id');
		$this->db->order_by('present.created_at','desc');
		return $this->db->get('present')->result_array();
	}

	function nofilter()
	{
		$this->db->select('present.created_at as absensi, user.name, user.email, user.address, user.phone, present.user_id, user.id');
		$this->db->join('user','present.user_id = user.id');
		//$this->db->group_by('user_id');
		$this->db->order_by('present.user_id','desc');
		return $this->db->get('present')->result_array();
	}

	function getuser()
	{
		//$this->db->where('level',0);
		return $this->db->get($this->_table)->result_array();
	}

	function admin()
	{
		//$this->db->where('level',0);
		return $this->db->get('t_admin')->result_array();
	}

	function presence()
	{
		$this->db->join('user','present.user_id = user.id');
		return $this->db->get('present')->result_array();
	}

	function login($email)
	{
		$this->db->where('email',$email);
		return $this->db->get($this->_table)->row_array();
	}

	function loginakun($email)
	{
		$this->db->where('email',$email);
		return $this->db->get('t_admin')->row_array();
	}	

	function akun($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get($this->_table)->row_array();
	}

	function getakun($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('t_admin')->row_array();
	}

	function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->_table,$data);
	}

	function updateakun($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('t_admin',$data);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->_table);
	}

	function deleteadmin($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('t_admin');
	}

	function get($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->_table)->row_array();
	}

	function getadmin($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('t_admin')->row_array();
	}

	function detail($id)
	{
		$this->db->join('present','user.id = present.user_id');
		$this->db->where('user.id',$id);
		return $this->db->get($this->_table)->row_array();
	}

	function fetch_data($query)
	{
		$this->db->from("user");
		if($query != '')
		{
			$this->db->like('name', $query);
			$this->db->or_like('email', $query);
			$this->db->or_like('username', $query);
		}
		$this->db->order_by('created_at', 'DESC');
		return $this->db->get();
	}
}
