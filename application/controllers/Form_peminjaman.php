<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Form_peminjaman extends CI_Controller {

  public function index()
  {
    $data['css'] = 'form_peminjaman';
		$this->load->view('template_user/header', $data);
		$this->load->view('user/form_peminjaman');
		$this->load->view('template_user/footer');
  }

}

/* End of file Form_peminjaman.php */
