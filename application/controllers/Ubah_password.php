<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Ubah_password extends CI_Controller {

  public function index()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    $admin = $this->Admin_model->get_data_token();

    if($admin->email == $email && $admin->token == $token && (time() - intval($admin->time_created) < 60*60*24)){
      $data['email'] = $email;
      $data['token'] = $token;

      $this->load->view('admin/ubah_password', $data);
    }else if($admin){
      $this->Admin_model->delete_token($admin->token);
    }else{
      echo "cek kode lagi";
    }
  }

    // fungsi mengubah password & menghapus data token
  public function act_ubah_password(){
     $email = $this->input->post('email');
     $token = $this->input->post('token');
     $password = $this->input->post('password');
    $rePassword = $this->input->post('rePassword');
     // data dari tabel admin
     $data_admin = $this->Admin_model->get_data_admin();
  
     if($data_admin['email_admin'] == $email){
       if($password==$rePassword){
       $this->Admin_model->ubah_password(md5($password), $email);
       $this->Admin_model->delete_token($token);
       redirect('admin');
       }else{
         echo "Password yang Anda ketikkan berbeda";
       }
     }else{
       echo "email tidak ada di database";
     }
  }

}

/* End of file Ubah_password.php */
