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

        // jika ada data baru nilai lebih dari 0
        $affect_rows = $this->Admin_model->insert_donasi($data);

        if($affect_rows > 0){
            $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Done!</strong> Data berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');

            redirect(base_url('admin/view_update_donasi'));
        }else{
            $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!</strong> Data tidak berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect(base_url('admin/view_update_donasi'));
        }
    }

    public function view_barang_hilang(){

        $data['css'] = 'update_barang_hilang';

        $this->load->view('template_admin/header',$data);
        $this->load->view('admin/update_barang_hilang');
        $this->load->view('template_admin/footer');
    }
}
