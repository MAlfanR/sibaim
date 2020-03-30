<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_masjid extends CI_Controller {

  public function index()
  {	
  // load halaman donasi masjid
    $data['css'] = 'donasi_masjid';
    $data['total_donasi'] = number_format($this->User_model->jumlah_total_donasi(),2,',','.');

    $this->load->view('template_user/header',$data);
    $this->load->view('user/donasi_masjid', $data);
    $this->load->view('template_user/footer'); 
  }

}

/* End of file Donasi_masjid.php */
