<?php

class Loginmodel extends CI_Model {


	public function login_admin( $username, $password, $user_type )
	{
		 $match = array(
            'uname'=>$username,
            'pword' =>$password,
            'user_type' => $user_type
        );

		 $this->db->select()->from('users')->where($match);
		 					
		 $q = $this->db->get();
					
		if ( $q->num_rows() ) {
			return $q->row();
			// return TRUE;
		} else {
			return FALSE;
		}
	}
	// public function login_user($username, $password)
	// {
	// 	$query = $this->db->where(['uname'=>$username, 'confirm_pass'=>$password])
	// 					  ->get('registration');
	// 	return $query->result();
	// }

}