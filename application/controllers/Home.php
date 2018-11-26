
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $data;
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('auth');		
		$this->load->helper('url');			
		$this->load->database();
		$this->load->model('sbm_model');	
		$this->data['error'] = array();
		$this->data['title'] = 'SBM';
	}

	public function index(){	
		$this->data['subtitle'] = 'List';
		$this->data['class'] = __CLASS__;
		$this->data['result'] = $this->sbm_model->get_daftar_sbm();
		$this->data['result_provinsi'] = $this->sbm_model->get_provinsi();
		$this->data['result_kota'] = $this->sbm_model->get_kota();
		$this->load->view('sbm_index', $this->data);
	}
	
}

