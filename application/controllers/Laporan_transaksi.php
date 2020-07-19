<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Laporan_transaksi extends CI_Controller {
 
     public function index()
     {
        if ($this->session->userdata('login') != 1) {
            redirect('Auth','refresh');
         }
         $data['tipe_pembayaran'] = $this->db->query("select jenis_transaksi from transaksi group by jenis_transaksi")->result();
         if (isset($_POST['jenis_pembayaran']) && isset($_POST['tanggal'])) {
             $tanggal= $this->input->post('tanggal');
             $tgl_mulai = substr($tanggal,6,4)."-".substr($tanggal,0,2)."-".substr($tanggal,3,2);
             $tgl_selesai = substr($tanggal,19,4)."-".substr($tanggal,13,2)."-".substr($tanggal,16,2);
             $jenis_transaksi = $this->input->post('jenis_pembayaran');
             
            if($jenis_transaksi == 'semua_transaksi'){
                $data['total_transaksi'] = $this->db->query(" select sum(total) as total from transaksi where tanggal_transaksi >'".$tgl_mulai."' and tanggal_transaksi < '".$tgl_selesai."'")->row_array();
                $data['transaksi'] = $this->db->query("select * from transaksi where tanggal_transaksi >'".$tgl_mulai."' and tanggal_transaksi < '".$tgl_selesai."'")->result();
                 
            }else{
                $data['total_transaksi'] = $this->db->query(" select sum(total) as total from transaksi where tanggal_transaksi >'".$tgl_mulai."' and tanggal_transaksi < '".$tgl_selesai."' and jenis_transaksi = '".$jenis_transaksi."'")->row_array();
                $data['transaksi'] = $this->db->query("select * from transaksi where tanggal_transaksi >'".$tgl_mulai."' and tanggal_transaksi < '".$tgl_selesai."' and jenis_transaksi = '".$jenis_transaksi."'")->result();
            }
         }else{
            $data['total_transaksi'] = $this->db->query(" select sum(total) as total from transaksi")->row_array();
            $data['transaksi'] = $this->M_crud->get_data("transaksi")->result();
         }
        
         $this->load->view('v_header');
         $this->load->view('v_laporan_transaksi',$data);
         $this->load->view('v_footer');
     }
 
 }
 
 /* End of file Controllername.php */
  
?>