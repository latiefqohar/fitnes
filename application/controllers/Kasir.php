<?php
 
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Kasir extends CI_Controller {
 
     public function index()

     {
        if ($this->session->userdata('login') != 1) {
            redirect('Auth','refresh');
         }
         $data['harga'] = $this->M_crud->get_data("harga")->result();
          $this->load->view('v_header');
          $this->load->view('v_kasir', $data);
          $this->load->view('v_footer');  
     }

     public function cek_harga(){
         $id = $this->input->post('id');
         $data = $this->M_crud->find(['id'=>$id],'harga')->row_array();
         echo json_encode(["harga"=>$data['harga']]);
     }
     public function cek_member(){
        $id = $this->input->post('id');
        $data = $this->db->query('select a.*,b.nama from paket a join member b on a.id_member=b.id where id_member="'.$id.'" and tgl_exp > "'.date('Y-m-d').'"')->row_array();;
        echo json_encode($data);
    }

    public function bayar(){
        $jenis_transaksi = "PEMBAYARAN";
        $tanggal_transaksi = date('Y-m-d H:i:s');
        $nama_member = $this->input->post('nama_member');
        $harga = $this->input->post('harga');
        $diskon = $this->input->post('diskon');
        $total = $this->input->post('total');
        $kasir = $this->input->post('kasir');
        $datainput = array(
            'jenis_transaksi' => $jenis_transaksi,
            'tanggal_transaksi' => $tanggal_transaksi,
            'nama_member' => $nama_member,
            'harga' => $harga,
            'diskon' => $diskon,
            'total' => $total,
            'kasir' => $kasir,
        );
        // var_dump($total);die();
        if ($this->M_crud->insert_data($datainput,"transaksi")) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Transaksi Berhasil","success")');
			redirect('Kasir','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Kasir','refresh');
		}
        
    }
 
 }
 
 /* End of file Kasir.php */
 

?>