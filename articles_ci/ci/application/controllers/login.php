<?php

Class Login extends MY_Controller {

	public function index()
	{
		if( $this->session->userdata('user_id') )
			return redirect('blog/dashboard');
		
		$this->load->helper('form');
		$this->load->view('admin_login');
	}

	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if( $this->form_validation->run('admin_login') ) 
		{ //if validation passes Success
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$user_type = $this->input->post('user_type');
			
			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->login_admin($username, $password, $user_type);
		//print_r($login_id);exit();
			if( $login_id) {
				
				$this->session->set_userdata('user_id', $login_id->id );
				$this->session->set_userdata('uname', $login_id->uname);
				$this->session->set_userdata('user_type', $login_id->user_type);
				return redirect('blog/dashboard');
				//credentials valid, login user.
			} else {
				$this->session->set_flashdata('login_failed','Invalid Username/Password.');
				return redirect('login');
			}
		} else {
			$this->load->view('admin_login');
			// echo validation_errors();
		}
	} 

	public function user_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if( $this->form_validation->run('user_login') ) 
		{ //if validation passes Success
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			print_r("hello");exit();
			$this->load->model('loginmodel');
			$loging = $this->loginmodel->login_user($username, $password);
			if($loging){
				$this->session->set_userdata('userid', $loging);
				return redirect('blog/dashboard');
			}
			else{
				$this->session->set_flashdata('login_failed', 'Invalid Username/Password.');
				return redirect('login');
			}
		}
		else {
			$this->load->view('admin_login');
			// echo validation_errors();
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}

?>






