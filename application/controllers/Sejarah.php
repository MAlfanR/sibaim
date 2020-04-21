<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

  public function index(){
    $data['teks'] = $this->User_model->get_teks('Sejarah');
    $data['foto'] = $this->User_model->get_foto('Sejarah');
  
		$this->load->view('template_user/header');
		$this->load->view('user/tentang_sejarah', $data);
		$this->load->view('template_user/footer');
  }
}

/* End of file Sejarah.php */
