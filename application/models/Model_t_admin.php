<?php
class Model_t_admin extends CI_Model
{
	protected $_table = 'user';

	function add($data)
	{
		$this->db->insert($this->_table,$data);
	}

	function getuser()
	{
		//$this->db->where('level',0);
		return $this->db->get($this->_table)->result_array();
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

	function akun($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get($this->_table)->row_array();
	}

	function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->_table,$data);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->_table);
	}

	function get($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->_table)->row_array();
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
