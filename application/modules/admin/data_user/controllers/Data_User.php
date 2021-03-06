<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 

*/
class Data_User extends MX_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('m_data_user');
	}
	public function index() {
		$data['title'] = 'Data User';
		$data['content'] = 'user';
		$data['datatables'] = $this->m_data_user->data_operator();
		$data['data_level_user'] = $this->m_data_user->data_level_user();
		$this->load->view('data_user',$data);
	}
	function tambah_operator() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('id_level_user', 'Level User', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			if ($this->m_data_user->check_data()->num_rows() == 1) {
				$this->index();
			} else {
				$tambah_operator = array(
            		'username' => $this->input->post('username'),
            		'password' => get_hash($this->input->post('password')),
            		'level_user' => $this->input->post('id_level_user')
        		);
        		$this->m_data_user->tambah_data_operator($tambah_operator);	
			}
			
		}
    }
    function edit_operator(){
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
            			'level_user' => $this->input->post('id_level_user')
        			);
        			$this->m_data_user->edit_data_operator($data,$edit);	
				} else {
					$data  = array('id_user_login' =>$this->input->post('id_user'));
        			$edit = array(
            			'username' => $this->input->post('username'),
            			'password' => get_hash($this->input->post('password')),
            			'level_user' => $this->input->post('id_level_user')
        			);
        			$this->m_data_user->edit_data_operator($data,$edit);
				}
			} else {
				$data  = array('id_user_login' =>$this->input->post('id_user'));
        		$edit = array(
            		'username' => $this->input->post('username'),
            		'password' => get_hash($this->input->post('password')),
            		'level_user' => $this->input->post('id_level_user')
        		);
        		$this->m_data_user->edit_data_operator($data,$edit);
			}
			
		}
    	
        
    }
    function edit_data_operator($id){
        $data  = array('id_user_login'=>$id);
        $get = $this->m_data_user->get_data_operator($data)->row();
        echo json_encode($get);
    }

    function hapus_operator($id){
        $data  = array('id_user_login'=>$id);
        $this->m_data_user->hapus_data_operator($data);
    }
}