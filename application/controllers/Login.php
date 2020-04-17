<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->load->view('admin/login_admin');
  }

  function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username_admin' => $username,
      'password_admin' => md5($password)
    );

    $cek = $this->Admin_model->cek_login("admin",$where)->num_rows();

    if($cek > 0){
      $data = $this->db->get_where('admin',array('username_admin' => $username))->result_array()[0];

      $data_session = array(
        'id'       => $data['id_admin'],
        'username' => $username,
        'password' => $password,
        'name'     => $data['nama_admin'],
        'email'    => $data['email_admin'],
        'kontak'   => $data['kontak_admin'],
        'status'   => "login"
      );

      $this->session->set_userdata($data_session);

      redirect(base_url('admin'));   
    }else{
      $this->session->set_flashdata('wrong','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Gagal!</strong> ada kesalahan dalam memasukkan username atau password.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      redirect(base_url('login'));
    }
  }

  function logout(){
    $this->session->sess_destroy();
    
    redirect(base_url('admin'));  
  }
}

/* End of file Login.php */
