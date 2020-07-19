<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Auth extends CI_Controller {
     
     public function __construct()
     {
         parent::__construct();

     }
     
 
     public function index()
     {
         $this->load->view('v_login');
     }

     public function login(){
         $username = $this->input->post('username');
         $password = md5($this->input->post('password'));
        //  var_dump($password);die();
         $query = $this->M_crud->find(['username'=>$username,'password'=>$password],'user');
         if ($query->num_rows() >0) {
             $data = $query->row_array();
             $session = array(
                 'id' => $data['id'],
                 'nama' => $data['nama'],
                 'login' => 1,
                'akses' => $data['akses']
             );
             $this->session->set_userdata($session);
             
             redirect('Dashboard','refresh');
             
         }else{
            $this->session->set_flashdata('msg','alert("Username Atau Password Salah")');
			redirect('Auth','refresh');
         }
         
     }

     public function logout(){
        $session = array(
            'nama',
            'login',
            'id',
           'akses'
        );
        $this->session->unset_userdata($session);
        redirect('Auth','refresh');
     }

     public function ubah_password(){
         $this->load->view('v_header');
         $this->load->view('v_ganti_password');
         $this->load->view('v_footer');
     }

     public function ganti_password(){
         $id = $this->session->userdata('id');
         $password = md5($this->input->post('password'));
         if ($this->M_crud->update_data(['id'=>$id],['password'=>$password],'user')) {
			$this->session->set_flashdata('msg', 'notifikasi("Sukses!","Password Berhasil Diubah","success")');
			redirect('Auth/ubah_password','refresh');
		}else {
			$this->session->set_flashdata('msg', 'notifikasi("Gagal!","Silahkan masukkan data dengan benar!","error")');
			redirect('Auth/ubah_password','refresh');
		}
     }
 
 }


 
 /* End of file Auth.php */
  
?>