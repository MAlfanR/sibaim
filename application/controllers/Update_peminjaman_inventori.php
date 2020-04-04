<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Update_peminjaman_inventori extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url('login'));
    }
  }
  

  public function index()
  {
    // ambil data barang inventori
    $data['inventori'] = $this->Admin_model->get_inventori();

    $this->load->view('template_admin/header');
    $this->load->view('admin/update_peminjaman_inventori', $data);
    $this->load->view('template_admin/footer');
  }

  public function tambahInventori(){
    $config['upload_path']    = 'assets/images/Inventori/';
    $config['allowed_types']  = 'jpg|png';
    
    $this->load->library('upload', $config);

    if(! $this->upload->do_upload('foto')){
      echo "foto tidak tersimpan";
    }else{
      $nama = $this->input->post('nama');
      $jumlah = $this->input->post('jumlah');
      $biaya = $this->input->post('biaya');
      $denda = $this->input->post('denda');
      $foto = $_FILES['foto']['name'];

      $data = array(
        'nama_inventory' => $nama,
        'jumlah_inventory' => $jumlah,
        'harga_inventory' => $biaya,
        'foto_inventory' => $foto,
        'denda_inventory' => $denda
      );

      $row = $this->Admin_model->insertInventori($data);

      if($row > 0){
        echo "data berhasil disimpan";
      }else{
        echo "data tidak berhasil disimpan";
      }
    }
  }

}

/* End of file Update_peminjaman_inventori.php */
