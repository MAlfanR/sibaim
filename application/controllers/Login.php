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

  }

  function view_lupa_password(){
    $this->load->view('admin/lupa_password');
  }

  // menghancurkan session
  function logout(){
    $this->session->sess_destroy();
    
    // kembali ke view login
    redirect(base_url('admin'));
    
  }

  //fungsi lupa password
  public function forgot_password(){
    
    $email = $this->input->post('email');
    // token lupa password dengan expire time
    $token = base64_encode(random_bytes(32));
    $time = time();
     
    $data = array(
      'email'         => $email,
      'token'         => $token,
      'time_created'  => $time
    );

    // insert token baru di tabel admin_token
    $this->Admin_model->insert_token($data);

    $this->_send_forgot_password($email, $token);

    redirect(base_url('admin'));
  }

  // fungsi mengirim link ganti password
  private function _send_forgot_password($email, $token){
    $config = [
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_user' => 'sibaimitera@gmail.com',
      'smtp_pass' => '1rengoku^',
      'smtp_port' => 465,
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'newline'   => "\r\n"
    ];

    $this->email->initialize($config);

    $this->email->from('sibaimitera@gmail.com', 'sibaim');
    $this->email->to($email);
    $this->email->subject('Change Password');
    $this->email->message('Klik tautan untuk mengubah password : <a href="'.base_url().'login/ubah_password?email='.$email.'&token='. urlencode($token) .'">Ubah Password</a>');

    $this->email->send();
  }

  // fungsi pergi ke halaman ubah password
  public function ubah_password(){
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

    // data dari tabel admin
    $data_admin = $this->Admin_model->get_data_admin();

    if($data_admin['email_admin'] == $email){
      $this->Admin_model->ubah_password($password, $email);
      $this->Admin_model->delete_token($token);
      redirect('admin');
    }else{
      echo "email tidak ada di database";
    }
  }
}

/* End of file Login.php */
