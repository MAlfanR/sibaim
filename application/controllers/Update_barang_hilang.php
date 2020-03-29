<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Update_barang_hilang extends CI_Controller {

  public function index()
  {
    $data['css'] = 'update_barang_hilang';

    $this->load->view('template_admin/header',$data);
    $this->load->view('admin/update_barang_hilang');
    $this->load->view('template_admin/footer');
  }

}

/* End of file Update_barang_hilang.php */
