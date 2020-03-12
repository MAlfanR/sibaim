<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function view($admin = 'login_admin'){
         if(!file_exists(APPPATH."views/admin".$admin.'.php')){
             show_404();
         }

        $this->load->view('admin/'.$admin);
        $this->load->view('admin/'.'menu_admin');
        
    }
	
}
