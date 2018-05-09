<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Data_User extends CI_Model {

    function __construct () {
	   $this->load->database();
    }

	function data_operator(){
		return $this->db->get('t_user_login');
	}
    function data_level_user() {
        return $this->db->get('t_level_user');
    }	
	
	function tambah_data_operator($data){
        return $this->db->insert('t_user_login',$data);
    }

    function get_data_operator($data){
        $this->db->where($data);
        return $this->db->get('t_user_login');
    }
    function edit_data_operator($data,$edit){
        $this->db->where($data);
        return $this->db->update('t_user_login',$edit);
    }
    function hapus_data_operator($data){
        $this->db->where($data);
        return $this->db->delete('t_user_login');
    }
    function check_data() {
        return $this->db->get_where('t_user_login',array('username' => $this->input->post('username')));
    }
}
