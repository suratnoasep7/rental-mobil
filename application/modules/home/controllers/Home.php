<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 

*/
class Home extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('m_home');
	}
	public function index() {
		$data['data_kota'] = $this->m_home->get_data_kota();
		$data['data_durasi'] = $this->m_home->get_data_durasi();
		$data['data_mobil'] = $this->m_home->get_data_mobil();
		$this->load->view('home', $data);
	}
	public function pencarian() {
		$data_mobil = $this->m_home->cari_data();
    	$result = $this->load->view('content', array('data_mobil'=>$data_mobil), true);
    	$response = array(
      		'response' => $result,
    	);
    	echo json_encode($response);
	}
	public function sewa_mobil($id) {
		$data  = array('id_mobil'=>$id);
        $get = $this->m_home->get_data_merk_mobil($data)->row();
        echo json_encode($get);
	}
}