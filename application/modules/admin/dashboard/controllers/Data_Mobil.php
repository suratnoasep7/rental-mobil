<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 

*/
class Data_Mobil extends MX_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('data_mobil/m_data_mobil');
		$this->load->model('data_dashboard/m_data_dashboard');
	}
	public function index() {
		$data['title'] = 'Data Mobil';
		$data['content'] = 'dashboard/data_mobil/data_mobil';
		$data_menu  = array('level_menu' => $this->session->userdata('is_level_user'));
		$data['menu'] = $this->m_data_dashboard->get_data_menu($data_menu);
		$data['datatables'] = $this->m_data_mobil->data_mobil();
		$this->load->view('dashboard/dashboard',$data);
	}
	function tambah_mobil() {
		$this->form_validation->set_rules('merk_mobil', 'Merk Mobil', 'trim|required');
		$this->form_validation->set_rules('tarif_mobil', 'Tarif Mobil', 'trim|required');
		$this->form_validation->set_rules('tarif_supir', 'Tarif Supir', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			if ($this->m_data_mobil->check_data()->num_rows() == 1) {
				$data = array('response' => 'merk', );
				$response = json_encode($data);
				echo $response;
			} else {
				if(!empty($_FILES['file']['name'])) {
					$acak=rand(00000000000,99999999999);
					$bersih=$_FILES['file']['name'];
					$nm=str_replace(" ","_","$bersih");
					$pisah=explode(".",$nm);
					$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
					$nama_murni=date('Y-m-d');
					$ekstensi_kotor = $pisah[1];
										
					$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
					$file_type_baru = strtolower($file_type);
										
					$ubah=$acak.'-'.$nama_murni; 
					$n_baru = $ubah.'.'.$file_type_baru;
						
					$config['upload_path']	= "./assets/gambar_mobil/";
					$config['allowed_types']= 'jpg|jpeg';
					$config['file_name'] = $n_baru;
					$config['max_size']     = '25000';
				 
					$this->load->library('upload', $config);
				 
					if ($this->upload->do_upload("file")) {
						$data	 	= $this->upload->data();
			 
						/* PATH */
						$source             = "./assets/gambar_mobil/".$data['file_name'] ;
						
						// Permission Configuration
						chmod($source, 0777);
						$img['quality']      = '100%' ;
						$img['source_image'] = $source;
						$img['new_image']    = $source;
						
						$upd['foto'] = $data['file_name'];

						$tambah_mobil = array(
            				'nama_mobil' => $this->input->post('merk_mobil'),
            				'tahun_mobil' => $this->input->post('tahun_mobil'),
            				'tarif_mobil' => $this->input->post('tarif_mobil'),
            				'tarif_supir' => $this->input->post('tarif_supir'),
            				'gambar_mobil' => $upd['foto']
        				);
        				$message = $this->m_data_mobil->tambah_data_mobil($tambah_mobil);
        				if ($message == true) {
        					$data = array('response' => 'success', );
							$response = json_encode($data);
							echo $response;
        				} else {
        					$data = array('response' => 'error', );
							$response = json_encode($data);
							echo $response;
        				}
					}
				} else {
					$tambah_mobil = array(
            			'nama_mobil' => $this->input->post('merk_mobil'),
            			'tahun_mobil' => $this->input->post('tahun_mobil'),
            			'tarif_mobil' => $this->input->post('tarif_mobil'),
            			'tarif_supir' => $this->input->post('tarif_supir')
        			);
        			$message = $this->m_data_mobil->tambah_data_mobil($tambah_mobil);
        			if ($message == true) {
        				$data = array('response' => 'success', );
						$response = json_encode($data);
						echo $response;
        			} else {
        				$data = array('response' => 'error', );
						$response = json_encode($data);
						echo $response;
        			}	
				}	
			}
			
		}
    }
    function edit_mobil(){
		$this->form_validation->set_rules('merk_mobil', 'Merk Mobil', 'trim|required');
		$this->form_validation->set_rules('tarif_mobil', 'Tarif Mobil', 'trim|required');
		$this->form_validation->set_rules('tarif_supir', 'Tarif Supir', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			if (empty($_FILES['file']['name'])) {
        		$data  = array('id_mobil' =>$this->input->post('id_mobil'));
        		$edit = array(
            		'nama_mobil' => $this->input->post('merk_mobil'),
            		'tahun_mobil' => $this->input->post('tahun_mobil'),
            		'tarif_mobil' => $this->input->post('tarif_mobil'),
            		'tarif_supir' => $this->input->post('tarif_supir')
        		);
        		$this->m_data_mobil->edit_data_mobil($data,$edit);
        	} else {
    			$acak=rand(00000000000,99999999999);
				$bersih=$_FILES['file']['name'];
				$nm=str_replace(" ","_","$bersih");
				$pisah=explode(".",$nm);
				$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
				$nama_murni=date('Y-m-d');
				$ekstensi_kotor = $pisah[1];
									
				$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
				$file_type_baru = strtolower($file_type);
									
				$ubah=$acak.'-'.$nama_murni; 
				$n_baru = $ubah.'.'.$file_type_baru;
					
				$config['upload_path']	= "./assets/gambar_mobil/";
				$config['allowed_types']= 'jpg|jpeg';
				$config['file_name'] = $n_baru;
				$config['max_size']     = '25000';
			 
				$this->load->library('upload', $config);
			 
				if ($this->upload->do_upload("file")) {
					$data	 	= $this->upload->data();
		 
					/* PATH */
					$source             = "./assets/gambar_mobil/".$data['file_name'] ;
					
					// Permission Configuration
					chmod($source, 0777) ;
		 
					$img['quality']      = '100%' ;
					$img['source_image'] = $source;
					$img['new_image']    = $source;
					
					$upd['foto'] = $data['file_name'];
		 
					$data  = array('id_mobil' =>$this->input->post('id_mobil'));
	        		$edit = array(
	            		'nama_mobil' => $this->input->post('merk_mobil'),
	            		'tahun_mobil' => $this->input->post('tahun_mobil'),
	            		'tarif_mobil' => $this->input->post('tarif_mobil'),
	            		'tarif_supir' => $this->input->post('tarif_supir'),
	            		'gambar_mobil' => $upd['foto']
	        		);
    				$this->m_data_mobil->edit_data_mobil($data,$edit);
				}
        	}
			
			
		}
    	
        
    }
    function edit_data_mobil($id){
        $data  = array('id_mobil'=>$id);
        $get = $this->m_data_mobil->get_data_mobil($data)->row();
        echo json_encode($get);
    }

    function hapus_mobil($id){
        $data  = array('id_mobil'=>$id);
        $get = $this->m_data_mobil->get_data_mobil($data)->row();
        $image = $get->gambar_mobil;
        $message = $this->m_data_mobil->hapus_data_mobil($data);
        if ($message == true) {
        	if ($image !== '') {
        		$source = "./assets/gambar_mobil/".$image;
				chmod($source, 0777);
        		unlink($source);
        	}
        }
    }
}