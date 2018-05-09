<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 

*/
class Logout extends MX_Controller
{
	
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('is_username');
		$this->session->unset_userdata('is_id');
		$this->session->unset_userdata('is_level_user');
		session_destroy();
		redirect('login','refresh');
	}
}