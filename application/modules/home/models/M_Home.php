<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Home extends CI_Model {

    function __construct () {
	   $this->load->database();
    }

    function get_data_kota() {
        return $this->db->get('t_kota');
    }
    function get_data_durasi() {
    	return $this->db->get('t_durasi');
    }
    function get_data_mobil() {
    	$result = $this->db->query('SELECT id_mobil, nama_mobil,tahun_mobil, tarif_mobil, tarif_supir, gambar_mobil FROM t_mobil WHERE id_mobil NOT IN (SELECT id_mobil FROM t_booking)')->result();
    	return $result;
    }
    function cari_data() {
    	$result = $this->db->query('SELECT id_mobil, nama_mobil,tahun_mobil, tarif_mobil, tarif_supir, gambar_mobil FROM t_mobil WHERE id_mobil NOT IN (SELECT id_mobil FROM t_booking)')->result();
    	return $result;
    }
    function get_data_merk_mobil($data){
        $this->db->where($data);
        return $this->db->get('t_mobil');
    }
}
