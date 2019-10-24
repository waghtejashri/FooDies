<?php
class AdminModel extends CI_Model
{
	public function get_user()
	{
		$sql = $this->db
						->select(['id','uname'])
						->from('users')
						->where('user_type','user')
						->get();
		return $sql->result_array();
	}
	public function delete_users($user_id)
	{
		// $this->db
		// 		->set('block_status','1')
		// 		->where('id', $user_id)
		// 		->update('users');
		return $this->db->delete('users',['id'=>$user_id]);
	}
}
?>