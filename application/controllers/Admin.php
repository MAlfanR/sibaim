<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }

    public function index(){
        
        $data['css'] = 'menu_admin';

        $this->load->view('template_admin/header',$data);
        $this->load->view('admin/menu_admin');
        $this->load->view('template_admin/footer');
    }

    public function view_update_donasi(){

        $data['css'] = 'update_donasi';
        $data['donasi_kitabisa'] = $this->Admin_model->ambil_total_kitabisa();
        $data['total_donasi_langsung'] = $this->Admin_model->ambil_total_donasi();
        $data['value_total_donasi'] = $data['total_donasi_langsung']; 

        $this->load->view('template_admin/header',$data);
        $this->load->view('admin/update_donasi',$data);
        $this->load->view('template_admin/footer');
    }

	public function update_donasi(){
        $nama_donasi = $this->input->post('nama_donasi');
        $jumlah_donasi = $this->input->post('jumlah_donasi');
        $tanggal_donasi = $this->input->post('tanggal_donasi');
        $total_donasi_kitabisa = $this->input->post('total_donasi_kitabisa');
        $total_donasi_langsung = $this->input->post('total_donasi_langsung');

        $data = array(
            'nama_donasi'           => $nama_donasi,
            'jumlah_donasi'         => $jumlah_donasi,
            'tanggal_donasi'        => $tanggal_donasi,
            'total_langsung_donasi' => $total_donasi_langsung,
            'total_kitabisa_donasi' => $total_donasi_kitabisa
        );

        $this->Admin_model->insert_donasi($data);
    }
}
