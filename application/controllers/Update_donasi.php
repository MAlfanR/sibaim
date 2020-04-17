<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_donasi extends CI_Controller {

  public function __construct(){
    parent::__construct();

    if($this->session->userdata('status') != "login"){
        redirect(base_url('login'));
    }
  }
  

  public function index(){
    $data['donasi_kitabisa']        = $this->Admin_model->ambil_total_kitabisa();
    $data['total_donasi_langsung']  = $this->Admin_model->ambil_total_donasi();
    $data['value_total_donasi']     = $data['total_donasi_langsung']; 

    $this->load->view('template_admin/header');
    $this->load->view('admin/update_donasi',$data);
    $this->load->view('template_admin/footer');
  }

  public function act_update_donasi(){
    $this->form_validation->set_rules('nama_donasi', 'Nama Donatur', 'required', array('required' => 'anda harus memasukkan nama donasi'));
    $this->form_validation->set_rules('jumlah_donasi', 'Jumlah Donasi', 'required|is_natural_no_zero', array('required' => 'anda harus memasukkan jumlah donasi', 'is_natural_no_zero' => 'jumlah donasi tidak boleh nol atau dibawahnya'));
    $this->form_validation->set_rules('tanggal_donasi', 'Tanggal Donasi', 'required|differs[0000-00-00]', array('required' => 'anda harus memasukkan tanggal donasi','differs[0000-00-00]' => 'anda harus memasukkan tanggal donasi'));
    $this->form_validation->set_rules('total_donasi_kitabisa', 'Donasi Kitabisa', 'required|is_natural', array('required' => 'anda harus memasukkan donasi dari kitabisa', 'is_natural' => 'jumlah donasi dari kitabisa tidak boleh negatif'));

    
    if ($this->form_validation->run() == TRUE) {
      $nama_donasi            = $this->input->post('nama_donasi');
      $jumlah_donasi          = $this->input->post('jumlah_donasi');
      $tanggal_donasi         = $this->input->post('tanggal_donasi');
      $total_donasi_kitabisa  = $this->input->post('total_donasi_kitabisa');
      $total_donasi_langsung  = $this->input->post('total_donasi_langsung');

      $data = array(
        'nama_donasi'           => $nama_donasi,
        'jumlah_donasi'         => $jumlah_donasi,
        'tanggal_donasi'        => $tanggal_donasi,
        'total_langsung_donasi' => $total_donasi_langsung,
        'total_kitabisa_donasi' => $total_donasi_kitabisa
      );

      $affect_rows = $this->Admin_model->insert_donasi($data);

      if($affect_rows > 0){

        $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil disimpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        redirect(base_url('Update_donasi'));

      }else{

        $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Data tidak berhasil disimpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        redirect(base_url('Update_donasi'));
      }
    } else {
      $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> '. validation_errors().'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        redirect(base_url('Update_donasi'));
    }
  }
}

/* End of file Update_donasi.php */
