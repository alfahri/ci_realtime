<?php

if(!defined('BASEPATH'))
{
	exit('Ga ada yang boleh akses');
}

class Mhewan extends CI_Model
{
	var $table 		= 'posts';
	// var $id 		= $this->table.'_id';
	var $order 		= 'DESC';

	public function get_all()
	{
		$this->db->order_by($this->table.'_serial_id', $this->order)->limit('15');
		return $this->db->get($this->table)->result();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function get_id($id)
	{
		$this->db->where('hewans_id', $id);
		return $this->db->get($this->table)->row();
	}
}

?>