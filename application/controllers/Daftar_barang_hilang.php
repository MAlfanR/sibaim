<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_barang_hilang extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }
    
    
    public function index()
    {
        $data['barang'] = $this->Admin_model->get_barang_hilang();

        $this->load->view('template_admin/header');
        $this->load->view('admin/daftar_barang_hilang', $data);
        $this->load->view('template_admin/footer');
    }

    public function hapus_barang($id,$foto){
        $row = $this->Admin_model->delete_barangtemu($id);

        if($row > 0){
            unlink("assets/images/BarangHilang/".$foto);
            redirect(base_url('Daftar_barang_hilang'));
        }else{
            echo 'data tidak terhapus';
        }
    }

}


/* End of file Daftar_barang_hilang.php */
