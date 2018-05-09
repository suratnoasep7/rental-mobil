<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 

*/
class Data_User extends MX_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('data_user/m_data_user');
		$this->load->model('data_dashboard/m_data_dashboard');
	}
	public function index() {
		$data['title'] = 'Data User';
		$data['content'] = 'dashboard/data_user/data_user';
		$data['datatables'] = $this->m_data_user->data_user();
		$data['data_level_user'] = $this->m_data_user->data_level_user();
		$data_menu  = array('level_menu' => $this->session->userdata('is_level_user'));
		$data['menu'] = $this->m_data_dashboard->get_data_menu($data_menu);
		$this->load->view('dashboard/dashboard',$data);
	}
	function tambah_user() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('id_level_user', 'Level User', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			if ($this->m_data_user->check_data()->num_rows() == 1) {
				$this->index();
			} else {
				$tambah_user = array(
            		'username' => $this->input->post('username'),
            		'password' => get_hash($this->input->post('password')),
            		'id_level_user' => $this->input->post('id_level_user')
        		);
        		$this->m_data_user->tambah_data_user($tambah_user);	
			}
			
		}
    }
    function edit_user(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('id_level_user', 'Level User', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			if ($this->m_data_user->check_data()->num_rows() == 1) {
				$db = $this->m_data_user->check_data()->row();
				if ($this->input->post('password') == '' || $this->input->post('password') == null) {
					$data  = array('id_user_login' =>$this->input->post('id_user'));
        			$edit = array(
            			'username' => $this->input->post('username'),
            			'password' => $db->password,
            			'id_level_user' => $this->input->post('id_level_user')
        			);
        			$this->m_data_user->edit_data_user($data,$edit);	
				} else {
					$data  = array('id_user_login' =>$this->input->post('id_user'));
        			$edit = array(
            			'username' => $this->input->post('username'),
            			'password' => get_hash($this->input->post('password')),
            			'id_level_user' => $this->input->post('id_level_user')
        			);
        			$this->m_data_user->edit_data_user($data,$edit);
				}
			} else {
				$data  = array('id_user_login' =>$this->input->post('id_user'));
        		$edit = array(
            		'username' => $this->input->post('username'),
            		'password' => get_hash($this->input->post('password')),
            		'id_level_user' => $this->input->post('id_level_user')
        		);
        		$this->m_data_user->edit_data_user($data,$edit);
			}
			
		}
    	
        
    }
    function edit_data_user($id){
        $data  = array('id_user_login'=>$id);
        $get = $this->m_data_user->get_data_user($data)->row();
        echo json_encode($get);
    }

    function hapus_user($id){
        $data  = array('id_user_login'=>$id);
        $this->m_data_user->hapus_data_user($data);
    }
}