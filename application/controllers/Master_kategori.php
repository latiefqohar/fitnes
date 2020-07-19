<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_kategori extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
	}
	

	public function index()
	{
		if ($this->session->userdata('login') != 1) {
            redirect('Auth','refresh');
         }
		$data['kategori'] = $this->M_crud->get_data("kategori")->result();
		$this->load->view('v_header');
		$this->load->view('v_master_kategori', $data);
		$this->load->view('v_footer');		
	}

	public function tambah(){
	
		$this->load->view('v_header');
		$this->load->view('v_tambahMasterKategori');
		$this->load->view('v_footer');
	}

	public function aksiTambah(){
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$bulan_aktif = $this->input->post('bulan_aktif');	
		
		$datainput = array(
			'nama' => $nama, 
			'keterangan' => $keterangan, 
			'harga' => $harga, 
			'bulan_aktif' => $bulan_aktif, 
			
		);

		if ($this->M_crud->insert_data($datainput,"kategori")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Disimpan","success")');
			redirect('Master_kategori','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_kategori','refresh');
		}
	}

	public function ubah($id){
		$data['kategori'] = $this->M_crud->find(['id'=>$id],'kategori')->row_array();
		$this->load->view('v_header');
		$this->load->view('v_ubahMasterKategori', $data);
		$this->load->view('v_footer');
	}

	public function aksiUbah(){
        $id =$this->input->post('id');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$bulan_aktif = $this->input->post('bulan_aktif');	
		
		$dataupdate = array(
			'nama' => $nama, 
			'keterangan' => $keterangan, 
			'harga' => $harga, 
			'bulan_aktif' => $bulan_aktif, 
		);

		if ($this->M_crud->update_data(['id'=>$id],$dataupdate,"kategori")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Master_kategori','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_kategori','refresh');
		}
	}

	public function hapus($id){
		if ($this->M_crud->delete_data(['id'=>$id],"kategori")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Master_kategori','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_kategori','refresh');
		}
	}

}

/* End of file Master_produk.php */


?>
