<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 

*/
class Not_Found extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->load->view('not_found');
	}
}