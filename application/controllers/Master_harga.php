<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_harga extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
	}
	

	public function index()
	{
		$data['harga'] = $this->M_crud->get_data("harga")->result();
		$this->load->view('v_header');
		$this->load->view('v_harga', $data);
		$this->load->view('v_footer');		
	}

	public function tambah(){
	
		$this->load->view('v_header');
		$this->load->view('v_tambahHarga');
		$this->load->view('v_footer');
	}

	public function aksiTambah(){
		$lama_jam = $this->input->post('lama_jam');
		$harga = $this->input->post('harga');
		
		
		$datainput = array(
			'lama_jam' => $lama_jam, 
			'harga' => $harga, 
        );
        // var_dump($datainput);die();

		if ($this->M_crud->insert_data($datainput,"harga")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Disimpan","success")');
			redirect('Master_harga','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_harga','refresh');
		}
	}

	public function ubah($id){
		$data['harga'] = $this->M_crud->find(['id'=>$id],'harga')->row_array();
		$this->load->view('v_header');
		$this->load->view('v_ubahHarga', $data);
		$this->load->view('v_footer');
	}

	public function aksiUbah(){
        $id =$this->input->post('id');
		$lama_jam = $this->input->post('lama_jam');
		$harga = $this->input->post('harga');
		
	
			$dataupdate = array(
				'lama_jam' => $lama_jam, 
			'harga' => $harga, 
			);
		
		if ($this->M_crud->update_data(['id'=>$id],$dataupdate,"harga")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Master_harga','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Master_harga','refresh');
		}
	}

	public function hapus($id){
		if ($this->M_crud->delete_data(['id'=>$id],"harga")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Master_harga','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Data Gagal Dihapus!","error")');
			redirect('Master_harga','refresh');
		}
	}

}

/* End of file Master_produk.php */


?>
