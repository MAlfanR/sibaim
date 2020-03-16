<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

  // meload view login
  public function index()
  {
    $this->load->view('admin/login_admin');
  }

  // mengirim input user & cek apakah dia admin
  function login(){
    
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username_admin' => $username,
      'password_admin' => $password
    );

    // cek dengan fungsi di admin_model
    $cek = $this->Admin_model->cek_login("admin",$where)->num_rows();
    if($cek > 0){

      // session data yang ingin disimpan
      $data_session = array(
        'username' => $username,
        'status'   => "login"
      );

      $this->session->set_userdata($data_session);

      
      redirect(base_url('admin'));
      
    }else{

    }

    // menghancurkan session
    function logout(){
      $this->session->session_destroy();
      
      // kembali ke view login
      redirect(base_url('login'));
      
    }
  }

}

/* End of file Login.php */
