<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Data_Mobil extends CI_Model {

    function __construct () {
	   $this->load->database();
    }

	function data_mobil(){
		return $this->db->get('t_mobil');
	}	
	
	function tambah_data_user($data){
        return $this->db->insert('t_mobil',$data);
    }

    function get_data_user($data){
        $this->db->where($data);
        return $this->db->get('t_mobil');
    }
    function edit_data_user($data,$edit){
        $this->db->where($data);
        return $this->db->update('t_mobil',$edit);
    }
    function hapus_data_user($data){
        $this->db->where($data);
        return $this->db->delete('t_mobil');
    }
    function check_data() {
        return $this->db->get_where('t_mobil',array('nama_mobil' => $this->input->post('username')));
    }
}
