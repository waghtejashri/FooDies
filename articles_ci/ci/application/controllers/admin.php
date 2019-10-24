<?php
class Admin extends MY_Controller
{
	public function index()
	{
		$this->load->model('adminmodel');
		$users = $this->adminmodel->get_user();
		//print_r($users);
		$this->load->view('block_user_view', compact('users'));
	}
	public function delete_user()
	{
		$this->load->model('adminmodel');
		$uid = $this->input->post('user_id');

		return $this->_falshAndRedirect(
					$this->adminmodel->delete_users($uid),
					"User Block Successully.",
					"User Failed To Block, Please Try Again."
				);
	}
	private function _falshAndRedirect( $successful, $successMessage, $failureMessage )
	{
		if( $successful ) {
			$this->session->set_flashdata('feedback',$successMessage);
			$this->session->set_flashdata('feedback_class', 'alert-success');
		} else {
			$this->session->set_flashdata('feedback', $failureMessage);
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('admin');
	}
}
?>