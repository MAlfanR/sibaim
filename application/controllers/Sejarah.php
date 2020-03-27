<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

  public function index()
  {
    $data['css'] = 'tentang_sejarah';

		$this->load->view('template_user/header', $data);
		$this->load->view('user/tentang_sejarah');
		$this->load->view('template_user/footer');
  }

}

/* End of file Sejarah.php */
