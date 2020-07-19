<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_user extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
	}
	

	public function index()
	{
		if ($this->session->userdata('login') != 1) {
            redirect('Auth','refresh');
         }
		$data['user'] = $this->M_crud->get_data("user")->result();
		$this->load->view('v_header');
		$this->load->view('v_user', $data);
		$this->load->view('v_footer');		
	}

	public function tambah(){
	
		$this->load->view('v_header');
		$this->load->view('v_tambahUser');
		$this->load->view('v_footer');
	}

	public function aksiTambah(){
		$nama = $this->input->post('nama');
		$no_telpon = $this->input->post('no_telpon');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$akses = $this->input->post('akses');
	
		
		$datainput = array(
			'nama' => $nama, 
			'no_telpon' => $no_telpon, 
			'username' => $username, 
			'password' => $password, 
			'akses' => $akses, 
			
        );
        // var_dump($datainput);die();

		if ($this->M_crud->insert_data($datainput,"user")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Disimpan","success")');
			redirect('Master_user','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_user','refresh');
		}
	}

	public function ubah($id){
		$data['user'] = $this->M_crud->find(['id'=>$id],'user')->row_array();
		$this->load->view('v_header');
		$this->load->view('v_ubahUser', $data);
		$this->load->view('v_footer');
	}

	public function aksiUbah(){
        $id =$this->input->post('id');
		$nama = $this->input->post('nama');
		$no_telpon = $this->input->post('no_telpon');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$akses = $this->input->post('akses');
		
		if ($password != null){
			$dataupdate = array(
				'nama' => $nama, 
				'no_telpon' => $no_telpon, 
				'username' => $username, 
				'password' => $password, 
				'akses' => $akses,
			);
		}else{
			$dataupdate = array(
				'nama' => $nama, 
				'no_telpon' => $no_telpon, 
				'username' => $username, 
				'akses' => $akses,
			);
		}
		

		if ($this->M_crud->update_data(['id'=>$id],$dataupdate,"user")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Master_user','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_user','refresh');
		}
	}

	public function hapus($id){
		if ($this->M_crud->delete_data(['id'=>$id],"user")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Master_user','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Data Gagal Dihapus!","error")');
			redirect('Master_user','refresh');
		}
	}

}

/* End of file Master_produk.php */


?>
