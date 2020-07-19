<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Auth extends CI_Controller {
 
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
 
 }
 
 /* End of file Auth.php */
  
?>