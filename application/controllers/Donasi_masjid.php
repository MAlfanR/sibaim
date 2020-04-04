<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_masjid extends CI_Controller {

  public function index()
  {	
  // load halaman donasi masjid    
    $target_donasi = 210000000;
    $persen_donasi = $this->User_model->persen_donasi($target_donasi);
    $data['persen'] = $persen_donasi;
    $data['total_donasi'] = number_format($this->User_model->jumlah_total_donasi(),2,',','.');

    $this->load->view('template_user/header');
    $this->load->view('user/donasi_masjid', $data);
    $this->load->view('template_user/footer'); 
  }

}

/* End of file Donasi_masjid.php */
