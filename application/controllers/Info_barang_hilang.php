<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_barang_hilang extends CI_Controller {

  public function index(){
  $data['barang']     = $this->User_model->get_inventory();
  $query              = $this->db->query('SELECT * FROM peminjaman WHERE status_permintaan <> "penyusunan"');
  $data['peminjam']   = $query->result_array();

	$this->load->view('template_user/header');
	$this->load->view('user/daftar_barang_hilang',$data);
	$this->load->view('template_user/footer');
  }
}

/* End of file info_barang_hilang.php */