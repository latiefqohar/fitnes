<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_member extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
	}
	

	public function index()
	{
		if ($this->session->userdata('login') != 1) {
            redirect('Auth','refresh');
         }
		$data['member'] = $this->M_crud->get_data("member")->result();
		$this->load->view('v_header');
		$this->load->view('v_master_member', $data);
		$this->load->view('v_footer');		
	}

	public function tambah(){
	
		$this->load->view('v_header');
		$this->load->view('v_tambahMasterMember');
		$this->load->view('v_footer');
	}

	public function aksiTambah(){
        $id =$this->input->post('id');
		$nama = $this->input->post('nama');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$no_telpon = $this->input->post('no_telpon');
		$tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
	
		
		$datainput = array(
			'id' => $id,
			'nama' => $nama, 
			'tanggal_lahir' => $tanggal_lahir, 
			'alamat' => $alamat, 
			'no_telpon' => $no_telpon, 
			'tgl_pendaftaran' => $tgl_pendaftaran, 
			
        );
        // var_dump($datainput);die();

		if ($this->M_crud->insert_data($datainput,"member")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Disimpan","success")');
			redirect('Master_member','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_member','refresh');
		}
	}

	public function ubah($id){
		$data['member'] = $this->M_crud->find(['id'=>$id],'member')->row_array();
		$this->load->view('v_header');
		$this->load->view('v_ubahMasterMember', $data);
		$this->load->view('v_footer');
	}

	public function aksiUbah(){
        $id =$this->input->post('id');
		$nama = $this->input->post('nama');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$no_telpon = $this->input->post('no_telpon');
		$tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
		
		$dataupdate = array(
			'nama' => $nama, 
			'tanggal_lahir' => $tanggal_lahir, 
			'alamat' => $alamat, 
			'no_telpon' => $no_telpon, 
			'tgl_pendaftaran' => $tgl_pendaftaran, 
		);

		if ($this->M_crud->update_data(['id'=>$id],$dataupdate,"member")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Master_member','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_member','refresh');
		}
	}

	public function hapus($id){
		if ($this->M_crud->delete_data(['id'=>$id],"member")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Master_member','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_member','refresh');
		}
	}

}

/* End of file Master_produk.php */


?>
