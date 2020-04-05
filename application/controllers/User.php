<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$target_donasi = 210000000;
		$persen_donasi = $this->User_model->persen_donasi($target_donasi);
		$data['persen'] = $persen_donasi;
		$data['total_donasi'] = number_format($this->User_model->jumlah_total_donasi(),2,',','.');

		// mengambil data foto baranghilang
		$data['foto_barangtemu'] = $this->User_model->get_foto_barangtemu();

		$this->load->view('template_user/header');
		$this->load->view('user/halaman_utama',$data);
		$this->load->view('template_user/footer');
	}

	// load halaman daftar peminjaman barang
	public function view_daftar_peminjaman_barang(){
		$data['css'] = 'daftar_peminjaman_barang';

		$this->load->view('template_user/header',$data);
		$this->load->view('user/daftar_peminjaman_barang');
		$this->load->view('template_user/footer');
	}

	// load halaman list inventori
	public function view_list_inventori(){
		$data['css'] = 'list_inventori';

		$this->load->view('template_user/header',$data);
		$this->load->view('user/list_inventori');
		$this->load->view('template_user/footer');
	}

	// load halaman detail barang ditemukan
	public function view_detail_barang_hilang(){
		$data['css'] = 'barang_hilang';

		$this->load->view('template_user/header',$data);
		$this->load->view('user/barang_hilang');
		$this->load->view('template_user/footer');
	}
}
