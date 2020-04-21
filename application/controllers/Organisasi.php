<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

  public function index(){
    $data['teks'] = $this->User_model->get_teks('Organisasi');
    $data['foto'] = $this->User_model->get_foto('Organisasi');

		$this->load->view('template_user/header');
		$this->load->view('user/tentang_organisasi', $data);
		$this->load->view('template_user/footer');
  }
}

/* End of file Organisasi.php */
