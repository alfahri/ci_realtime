<?php

defined('BASEPATH')or exit('No script access allowed');

class Mslider extends CI_Model{
	var $table 	= 'hewans';
	var $id 	= 'hewans_id';
	var $order 	= 'DESC';

	public function get_all()
	{
		$this->db->order_by($this->id, $this->order);
		$this->db->get($this->table)->result();
	}
}

?>