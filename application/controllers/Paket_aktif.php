<?php
 
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Paket_aktif extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        
    }
    
 
     public function index()
     {
        if ($this->session->userdata('login') != 1) {
            redirect('Auth','refresh');
         }
         $data['paket'] = $this->db->query("select a.*,b.nama,c.nama from paket a join member b on a.id_member=b.id join kategori c on a.id_kategori=c.id")->result();
         $this->load->view('v_header');
        $this->load->view('v_paket',$data);
        $this->load->view('v_footer');
    }

    public function tambah(){
        $data['member'] = $this->M_crud->get_data("member")->result();
        $data['kategori'] = $this->M_crud->get_data("kategori")->result();
        
        $this->load->view('v_header');
        $this->load->view('v_tambahPaket', $data);
        $this->load->view('v_footer');
       
        
    }

    public function hitung_paket(){
        $id=$this->input->post('id');
        $data = $this->M_crud->find(['id'=>$id],'kategori')->row_array();
        $tgl1 = date('Y-m-d');
        $tgl2 = date('Y-m-d', strtotime('+'.$data["bulan_aktif"].' month', strtotime($tgl1))); //operasi 
       echo json_encode(["hasil"=>$tgl2,"harga"=>$data['harga']]);
    }

    public function aksiTambah(){
        $id_member = $this->input->post('id_member');
        $id_kategori = $this->input->post('id_kategori');
        $tgl_beli = $this->input->post('tgl_beli');
        $tgl_exp = $this->input->post('tgl_exp');
        $harga = $this->input->post('harga');
        
        $datainput = array(
            "id_member" => $id_member,
            "id_kategori" => $id_kategori,
            "tgl_beli" => $tgl_beli,
            "tgl_exp" => $tgl_exp,
        );
        // query
        $query = $this->M_crud->find(['id_member'=>$id_member],"paket")->num_rows();
        if ($query > 0) {
            $this->session->set_flashdata('msg', 'notifikasi("Gagal!","Data Member Sudah ada silahkan ubah data","error")');
			redirect('Paket_aktif','refresh');
        }else{
            if ($this->M_crud->insert_data($datainput,"paket")) {
                $datatransaksi = array(
                    'jenis_transaksi'=> "PEMBELIAN MEMBER BARU",
                    'tanggal_transaksi'=> date('Y-m-d H:i:s'),
                    'nama_member'=> $id_member,
                    'harga'=> $harga,
                    'total'=> $harga,
                    'kasir'=> $this->session->userdata('nama'),
                );
                $this->M_crud->insert_data($datatransaksi,"transaksi");
                $this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Disimpan","success")');
                redirect('Paket_aktif','refresh');
            }else {
                $this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
                redirect('Paket_aktif','refresh');
            }
        }
        
    }

    public function ubah($id){
        $data['member'] = $this->M_crud->get_data("member")->result();
        $data['kategori'] = $this->M_crud->get_data("kategori")->result();
        $data['paket'] = $this->M_crud->find(['id'=>$id],'paket')->row_array();
        $this->load->view('v_header');
        $this->load->view('v_ubahPaket', $data);
        $this->load->view('v_footer');
    }

    public function aksiUbah(){
        $id =$this->input->post('id');
        $id_member = $this->input->post('id_member');
        $id_kategori = $this->input->post('id_kategori');
        $tgl_beli = $this->input->post('tgl_beli');
        $tgl_exp = $this->input->post('tgl_exp');
        $harga = $this->input->post('harga');
		
		$dataupdate = array(
            "id_member" => $id_member,
            "id_kategori" => $id_kategori,
            "tgl_beli" => $tgl_beli,
            "tgl_exp" => $tgl_exp,
		);

		if ($this->M_crud->update_data(['id'=>$id],$dataupdate,"paket")) {
            $datatransaksi = array(
                'jenis_transaksi'=> "PAKET MEMBER LAMA",
                'tanggal_transaksi'=> date('Y-m-d H:i:s'),
                'nama_member'=> $id_member,
                'harga'=> $harga,
                'total'=> $harga,
                'kasir'=> $this->session->userdata('nama'),
            );
            $this->M_crud->insert_data($datatransaksi,"transaksi");
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Paket_aktif','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Paket_aktif','refresh');
		}
    }
    
    public function hapus($id){
		if ($this->M_crud->delete_data(['id'=>$id],"paket")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Data Berhasil Diubah","success")');
			redirect('Paket_aktif','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Paket_aktif','refresh');
		}
	}
 
 }
 
 /* End of file Paket_aktif.php */
 


?>