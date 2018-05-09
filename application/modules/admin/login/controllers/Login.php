<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login extends MX_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('m_login');
	}
	public function index() {
		if($this->session->userdata('is_login') == TRUE) {
			$this->load->view('dashboard/dashboard');
		} else {
			$this->load->view('login');
		}
	}
	public function proses_login() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			redirect('login','refresh');
		} else {
			if ($this->m_login->check_data()->num_rows() == 1) {
				$db = $this->m_login->check_data()->row();
				if(hash_verified($this->input->post('password'), $db->password)) {
					$session = array(
						'is_login' => true,
						'is_username' => $db->username,
						'is_id' => $db->id_user_login,
						'is_level_user' => $db->id_level_user
					);	
					$this->session->set_userdata($session);
					$data = array('response' => 'dashboard', );
					$response = json_encode($data);
					echo $response;
				} else {
					$data = array('response' => 'password', );
					$response = json_encode($data);
					echo $response;
				}
			} else {
				redirect('login','refresh');
			}
		}
		
	}
}