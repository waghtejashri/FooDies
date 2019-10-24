<?php

class About_controller extends MY_Controller
{
	public function index()
	{
		$this->load->library('form_validation');
		$this->load->view('about');
	}
}

?>