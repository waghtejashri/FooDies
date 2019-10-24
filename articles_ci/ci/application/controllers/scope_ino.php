<?php

class Scope_Ino extends MY_Controller
{
	
	public function index()
	{
		$this->load->model('idea');
		$ideas = $this->idea->get();
		//print_r($ideas);
		$this->load->view('home', compact('ideas'));
	}

	public function store_idea()
	{
		$input = $this->input->post();
		unset($input['submit']);
		$this->load->model('idea');
		$this->idea->store_ideas($input);
		redirect(base_url().'scope_ino');
	}
}

?>