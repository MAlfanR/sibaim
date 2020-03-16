<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function view()
	{
		$this->load->view('user/'.'halaman_utama.html');
	}
	
}
