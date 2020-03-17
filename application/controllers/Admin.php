<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }

    // public function view($admin){

    //       if(!file_exists(APPPATH."views/admin/".$admin.'.php')){
    //           show_404();
    //       }

    //     if($admin =='menu_admin'){
    //         $this->load->view('admin/'.$admin);
    //     }else{
    //         $this->load->view('admin/'.$admin);
    //     }
       
        
    // }

    public function index(){
        $this->load->view('admin/menu_admin');
    }


	
}
