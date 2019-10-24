<?php
class Registration_Model extends CI_Model
{
	public function store_user_details($array)
	{
		$uname=$array['uname'];
		$type=$array['user_type'];
		$pass=$array['confirm_pass'];
		$block_status=0;
		
		$query = $this->db->query("INSERT INTO users(`uname`, `pword`, `user_type`,`block_status`) VALUES ('$uname', '$pass', '$type','$block_status')");
		return $this->db->insert('registration',$array);
	}
}
?>