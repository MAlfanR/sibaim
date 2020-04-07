<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Form_peminjaman extends CI_Controller {

  public function index()
  {
		$this->load->view('template_user/header');
		$this->load->view('user/form_peminjaman');
		$this->load->view('template_user/footer');
  }

  public function new_form(){
    var_dump($_POST);
    die;
    $ktp = $_FILES['jaminan']['name'];
    $surat = $_FILES['surat_permohonan']['name'];

    $this->load->library('upload');

    $config['upload_path']    = 'assets/files/jaminan/';
    $config['allowed_types']  = 'jpg|png|pdf';
    $config['overwrite']      = true;

    $this->upload->initialize($config);

    if(! $this->upload->do_upload('jaminan')){
      echo "jaminan tidak tersimpan";
    }else{
      $config['upload_path']    = 'assets/files/surat permohonan pinjaman/';
      $config['overwrite']      = true;
      
      $this->upload->initialize($config);
      
      if(! $this->upload->do_upload('surat_permohonan')){
        $error = array('error' => $this->upload->display_errors(),
      'surat' => $surat);
        $this->load->view('eror',$error);
      }else{
        echo "semuanya tersimpan";
      }
    }
  }

  public function send_form(){
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
    $this->email->subject('Pengjuan Peminjaman Barang');
    
    $this->email->attach('assets/files/jaminan/');
    $this->email->attach('assets/files/surat permohonan pinjaman/');
  
    $this->email->send();
  }

}

/* End of file Form_peminjaman.php */
