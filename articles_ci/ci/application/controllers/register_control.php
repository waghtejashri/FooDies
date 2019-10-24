<?php

class Register_control extends MY_Controller
{
	
	public function index()
	{

		$this->load->library('form_validation');
		$this->load->view('Registration');

	}
	public function get_register()
	{
		$this->load->library('form_validation');

		$post=$this->input->post();
		unset($post['submit']);
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		$this->load->model('registration_model');
		$reg=$this->registration_model->store_user_details($post);
		//$user = $this->registration_model->user($reg);
		if($reg)
		{
			$this->session->set_flashdata('feedback', 'Register Successfully');
			$this->session->set_flashdata('feedback_class','alert alert-dismissible alert-success');
		}
		else
		{
			$this->session->set_flashdata('feedback', 'Register UnSuccessful');
			$this->session->set_flashdata('feedback_class','alert alert-dismissible alert-danger');
		}
		return redirect('login');
	}

}

?>
