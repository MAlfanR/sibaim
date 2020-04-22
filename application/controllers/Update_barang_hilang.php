<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_barang_hilang extends CI_Controller {

  public function __construct(){
    parent::__construct();

    if($this->session->userdata('status') != "login"){
      redirect(base_url('login'));
    }
  }
  
  public function index(){
    $this->load->view('template_admin/header');
    $this->load->view('admin/update_barang_hilang');
    $this->load->view('template_admin/footer');
  }

  public function insert_barang_hilang(){

    $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', array('required' => 'anda harus memasukkan nama barang'));
    $this->form_validation->set_rules('keterangan_barang', 'Keterangan Barang', 'required', array('required' => 'anda harus memasukkan keterangan barang'));
    $this->form_validation->set_rules('lokasi_barang', 'Lokasi Barang', 'required', array('required' => 'anda harus memasukkan lokasi barang ditemukan'));
    $this->form_validation->set_rules('tanggal_barang', 'Tanggal Barang', 'required', array('required' => 'anda harus memasukkan tanggal barang ditemukan'));
    if(empty($_FILES['foto']['name'])){
      $this->form_validation->set_rules('foto', 'Foto Barang', 'required', array('required' => 'anda harus mengunggah foto barang'));
    }
    
    
    if ($this->form_validation->run() == TRUE) {
      $config['upload_path']    = 'assets/images/BarangHilang/';
      $config['allowed_types']  = 'jpg|png';
      $config['overwrite']      = true;

      $this->load->library('upload', $config);

      if(! $this->upload->do_upload('foto')){

        echo "error";
        die;

      }else{

        $nama       = $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan_barang');
        $lokasi     = $this->input->post('lokasi_barang');
        $tanggal    = $this->input->post('tanggal_barang');
        $foto       = $_FILES["foto"]["name"];
      
        $data = array(
          "nama_barangtemu"       => $nama,
          "tanggal_barangtemu"    => $tanggal,
          "keterangan_barangtemu" => $keterangan,
          "foto_barangtemu"       => $foto,
          "lokasi_barangtemu"     => $lokasi
        );

        $affect_rows = $this->Admin_model->insert_barang_temu($data);

        if($affect_rows > 0){

          $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil disimpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

          redirect(base_url('Update_barang_hilang'));

        }else{
        
          $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Data tidak berhasil disimpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

          unlink("assets/images/BarangHilang/".$foto);

          redirect(base_url('Update_barang_hilang'));
        }
      }
    } else {
      $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong>'. validation_errors() .'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      redirect(base_url('Update_barang_hilang'));
    }
  }
}

/* End of file Update_barang_hilang.php */
