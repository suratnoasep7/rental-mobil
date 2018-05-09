<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 

*/
class Dashboard extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('data_dashboard/m_data_dashboard');
	}
	public function index() {
		if($this->session->userdata('is_login') == TRUE) {
			$data['title'] = 'Dashboard';
			$data_menu  = array('level_menu' => $this->session->userdata('is_level_user'));
        	$data['menu'] = $this->m_data_dashboard->get_data_menu($data_menu);
			$this->load->view('dashboard', $data);
		} else {
			redirect('login','refresh');
		}
	}
}