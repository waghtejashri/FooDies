<?php

class Idea extends CI_Model
{
	public function get()
	{
		$query = $this->db
							->select(['title','body'])
							->from('scope')
							->get();
		return $query->result_array();
	}
	public function store_ideas($array)
	{
		return $this->db->insert('scope',$array);
	}
}