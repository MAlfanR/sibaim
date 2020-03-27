<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

  public function index()
  {
    $data['css'] = 'tentang_organisasi';

		$this->load->view('template_user/header', $data);
		$this->load->view('user/tentang_organisasi');
		$this->load->view('template_user/footer');
  }

}

/* End of file Organisasi.php */
