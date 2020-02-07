<?php
defined('BASEPATH')or exit('No script access allowed');

class Musers extends CI_Model{
	public $table = 'users';
	// public $id = $this->table.'_id';
	public $order = 'DESC';

	public function login($username, $password)
	{
		$this->db->where('name', $username);
		$this->db->where('password', $password);
		$result = array('content' => $this->db->get($this->table)->row_array(), 'status' => true);
		return $result;
	}
}

?>