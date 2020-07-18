<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_nasabah');
		
	}
	

	public function index()
	{
		$data['pengajuan'] = $this->M_nasabah->analisa();
		$this->load->view('v_header');
		$this->load->view('v_analisa', $data);
		$this->load->view('v_footer');
	}

}

/* End of file Analisa.php */


?>
