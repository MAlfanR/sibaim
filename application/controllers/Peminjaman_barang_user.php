<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_barang_user extends CI_Controller {

  public function index()
  {
	$this->load->view('template_user/header');
	$this->load->view('user/daftar_peminjaman_barang');
	$this->load->view('template_user/footer');
  }

}

/* End of file Peminjaman_barang_user.php */
