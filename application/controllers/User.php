<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index()
	{
		$data['css'] = 'halaman_utama';

		$this->load->view('template_user/header', $data);
		$this->load->view('user/halaman_utama');
		$this->load->view('template_user/footer');
	}
	
	public function view_sejarah(){
		$data['css'] = 'tentang_sejarah';

		$this->load->view('template_user/header', $data);
		$this->load->view('user/tentang_sejarah');
		$this->load->view('template_user/footer');
	}
}
