<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

    public function index()
    {
        $this->load->view('surat/surat');
    }

}

/* End of file Surat.php */
