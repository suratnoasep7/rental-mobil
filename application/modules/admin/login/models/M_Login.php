<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 

*/
class M_Login extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}
	
	function check_data() {
		return $this->db->get_where('t_user_login',array('username' => $this->input->post('username')));
	}
}