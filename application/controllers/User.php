<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$target_donasi 			= 210000000;
		$persen_donasi 			= $this->User_model->persen_donasi($target_donasi);
		$data['persen'] 		= $persen_donasi;
		$data['total_donasi'] 	= number_format($this->User_model->jumlah_total_donasi(),2,',','.');

		$data['foto_barangtemu'] = $this->User_model->get_foto_barangtemu();

		$data['admin'] = $this->db->get('admin')->result_array();

		$this->load->view('template_user/header');
		$this->load->view('user/halaman_utama',$data);
		$this->load->view('template_user/footer');
	}
}
