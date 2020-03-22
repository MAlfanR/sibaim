<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	

	public function index()
	{
		$data['css'] = 'halaman_utama';

		$target_donasi = 210000000;
		$persen_donasi = $this->User_model->persen_donasi($target_donasi);
		$data['persen'] = $persen_donasi;

		$this->load->view('template_user/header', $data);
		$this->load->view('user/halaman_utama',$data);
		$this->load->view('template_user/footer');
	}
	
	public function view_sejarah(){
		$data['css'] = 'tentang_sejarah';

		$this->load->view('template_user/header', $data);
		$this->load->view('user/tentang_sejarah');
		$this->load->view('template_user/footer');
	}

	public function view_organisasi(){
		$data['css'] = 'tentang_organisasi';

		$this->load->view('template_user/header', $data);
		$this->load->view('user/tentang_organisasi');
		$this->load->view('template_user/footer');
	}

	// load halaman donasi masjid
	public function view_donasi_masjid(){
		$data['css'] = 'donasi_masjid';

		$this->load->view('template_user/header',$data);
		$this->load->view('user/donasi_masjid');
		$this->load->view('template_user/footer');
	}

	// load halaman daftar peminjaman barang
	public function view_daftar_peminjaman_barang(){
		$data['css'] = 'daftar_peminjaman_barang';

		$this->load->view('template_user/header',$data);
		$this->load->view('user/daftar_peminjaman_barang');
		$this->load->view('template_user/footer');
	}
}
