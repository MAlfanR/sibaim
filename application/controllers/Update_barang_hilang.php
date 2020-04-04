<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Update_barang_hilang extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url('login'));
    }
  }
  

  public function index()
  {
    $this->load->view('template_admin/header');
    $this->load->view('admin/update_barang_hilang');
    $this->load->view('template_admin/footer');
  }

  public function insert_barang_hilang(){

    $config['upload_path']    = 'assets/images/BarangHilang/';
    $config['allowed_types']  = 'jpg|png';
    $config['overwrite']      = true;

    $this->load->library('upload', $config);

    if(! $this->upload->do_upload('foto')){
      echo "error";
      die;
    }else{
      // berhasil upload
      $nama = $this->input->post('nama_barang');
      $keterangan = $this->input->post('keterangan_barang');
      $lokasi = $this->input->post('lokasi_barang');
      $tanggal = $this->input->post('tanggal_barang');
      $foto = $_FILES["foto"]["name"];
      
      $data = array(
        "nama_barangtemu"       => $nama,
        "tanggal_barangtemu"    => $tanggal,
        "keterangan_barangtemu" => $keterangan,
        "foto_barangtemu"       => $foto,
        "lokasi_barangtemu"     => $lokasi
      );

      $affect_rows = $this->Admin_model->insert_barang_temu($data);

      if($affect_rows > 0){
        // jika berhasil di input ke database
        $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Done!</strong> Data berhasil disimpan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

        redirect(base_url('Update_barang_hilang'));

      }else{
        // jika tidak berhasil di input ke database foto yang sudah disimpan akan dihapus
        $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Failed!</strong> Data tidak berhasil disimpan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

        unlink("assets/images/BarangHilang/".$foto);

        redirect(base_url('Update_barang_hilang'));
      }
    }
  }
}

/* End of file Update_barang_hilang.php */
