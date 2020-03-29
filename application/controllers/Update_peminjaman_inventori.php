<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Update_peminjaman_inventori extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url('login'));
  }
  }
  

  public function index()
  {
    $data['css'] = 'update_peminjaman_inventori';

    $this->load->view('template_admin/header',$data);
    $this->load->view('admin/update_peminjaman_inventori');
    $this->load->view('template_admin/footer');
  }

}

/* End of file Update_peminjaman_inventori.php */
