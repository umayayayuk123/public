<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class M_Login extends CI_Model
	{
		
		function get_all()
		{
			return $this->db->get('loginpk');
		}

		function input_login($data,$loginpk)
		{
			$this->db->insert($loginpk,$data);
		}

		function cek_UP($username,$password)
		{
			return $this->db->query("	select * from
										user
										where 
										(
										(operator.username='$username')
										or
										(operator.email='$username')
										)
										and
										(operator.password='$password')");
		}
	}
 ?>