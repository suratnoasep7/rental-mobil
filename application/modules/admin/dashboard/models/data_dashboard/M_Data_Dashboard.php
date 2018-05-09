<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Data_Dashboard extends CI_Model {

    function __construct () {
	   $this->load->database();
    }

    function get_data_menu($data){
        $this->db->where($data);
        return $this->db->get('t_menu');
    }
}
