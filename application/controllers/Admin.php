<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	// public function index()
	// {
	// 	$this->load->view('welcome_message');
    // }
    
    public function view($admin){

          if(!file_exists(APPPATH."views/admin/".$admin.'.php')){
              show_404();
          }

        if($admin =='menu_admin'){
            $this->load->view('admin/'.$admin);
        }else{
        $this->load->view('admin/'.$admin);
        }
       
        
    }
	
}
