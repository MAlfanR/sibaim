<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_password extends CI_Controller {

  public function index()
  {
    $this->load->view('admin/lupa_password');
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
      $this->email->subject('Sibaim change password instruction');
      $this->email->message('Hi Admin, atas permintaan Anda untuk reset password, silahkan klik tautan untuk mengubah password : <a href="'.base_url().'Ubah_password/index?email='.$email.'&token='. urlencode($token) .'">Ubah Password</a>');
  
      $this->email->send();
    }

}

/* End of file Lupa_password.php */
