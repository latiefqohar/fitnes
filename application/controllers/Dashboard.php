<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
 
     public function index()
     {
        if ($this->session->userdata('login') != 1) {
            redirect('Auth','refresh');
         }

        $data['total_transaksi'] =  $this->M_crud->get_data('transaksi')->num_rows();
        $data['total_transaksi_hari_ini'] =  $this->db->query('select sum(total) as total from transaksi where DATE_FORMAT(tanggal_transaksi, "%Y-%m-%d") = "'.date('Y-m-d').'"')->row_array();
        $data['transaksi_hari_ini'] =  $this->db->query('select total from transaksi where DATE_FORMAT(tanggal_transaksi, "%Y-%m-%d") = "'.date('Y-m-d').'"')->num_rows();
        $data['member_baru'] =  $this->db->query('select total from transaksi where jenis_transaksi="PEMBELIAN MEMBER BARU"')->num_rows();
        $data['transaksi_terbaru'] =  $this->db->query('select * from transaksi order by id ASC limit 10')->result();
        ;


         $this->load->view('v_header');
         $this->load->view('v_dashboard',$data);
         $this->load->view('v_footer');
         
     }
 
 }
 
 /* End of file Dashboard.php */
  
?>