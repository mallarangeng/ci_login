<?php
class M_login extends CI_Model
{
	function validate($username, $password)
	{
		$pass_enc = md5($password);
		
		$query2 = $this->db->query("SELECT login, passwd FROM members WHERE login = '$username' AND passwd = '$pass_enc'");
		if($query2->num_rows() == 1)
		{
			return TRUE;
		}
	}	
}