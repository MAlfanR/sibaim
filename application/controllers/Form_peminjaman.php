<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_peminjaman extends CI_Controller {

  public function index(){
      $data['barang'] = $this->User_model->get_inventory();

		  $this->load->view('template_user/header');
		  $this->load->view('user/form_peminjaman', $data);
		  $this->load->view('template_user/footer');
  }

  public function addDataBaru(){

    $this->form_validation->set_rules('judul', 'Judul Kegiatan', 'required', array('required' => 'judul kegiatan belum dimasukkan'));
    $this->form_validation->set_rules('penyelenggara', 'Penyelenggara Kegiatan', 'required', array('required' => 'penyelenggara kegiatan belum dimasukkan'));
    $this->form_validation->set_rules('penanggung', 'Penanggung Jawab Kegiatan', 'required', array('required' => 'penanggung jawab kegiatan belum dimasukkan'));
    $this->form_validation->set_rules('hp', 'Nomor HP', 'required|is_natural', array('required' => 'nomor hp belum dimasukkan', 'is_natural' => 'nomor hp hanya boleh berisikan angka'));
    $this->form_validation->set_rules('jaminan', 'Jaminan', 'required', array('required' => 'jaminan belum dimasukkan'));
    $this->form_validation->set_rules('lokasi', 'Lokasi', 'required', array('required' => 'lokasi kegiatan belum dimasukkan'));
    $this->form_validation->set_rules('tglSewa', 'Tanggal Sewa', 'required', array('required' => 'tanggal mulai menyewa barang belum dimasukkan'));
    $this->form_validation->set_rules('tglKembali', 'Tanggal Kembali', 'required', array('required' => 'tanggal mengenbalikan barang belum dimasukkan'));

    
    if ($this->form_validation->run() == TRUE) {
       if(strtotime($_POST['tglSewa']) <= strtotime($_POST['tglKembali'])){
        $tglPengajuan = $_POST['tglSewa'];
        $denda        = $this->denda($tglPengajuan);
  
        $data = array(
            'judul_kegiatan'           => $_POST['judul'],
            'penyelenggara_kegiatan'   => $_POST['penyelenggara'],
            'penanggung_jawab'         => $_POST['penanggung'],
            'noHp'                     => $_POST['hp'],
            'jaminan'                  => $_POST['jaminan'],
            'lokasi'                   => $_POST['lokasi'],
            'tanggal_peminjaman'       => $_POST['tglSewa'],
            'tanggal_pengembalian'     => $_POST['tglKembali'],
            'denda_peminjaman'         => $denda,
            'total_harga'              => 0,
            'status_permintaan'        => 'penyusunan'
        );
  
        $this->db->insert('peminjaman', $data);
  
        $id_peminjaman  = $this->db->insert_id();
        $row            = $this->db->affected_rows();
      
        if($row > 0){
            redirect(base_url('Peminjaman_inventori/index/'.$id_peminjaman));
        }else{
            $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Kesalahan!</strong> terjadi kesalahan sehingga tidak dapat menyimpan data.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect('Form_peminjaman');
        }
       }else{
            $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Kesalahan!</strong> Tanggal mengembalikan lebih kecil dari tanggal menyewa.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect('Form_peminjaman');
       }
    } else {
        $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Kesalahan!</strong> '.validation_errors().'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        redirect('Form_peminjaman');
    }
  }

  function denda($tglPengajuan){
      $time  = strtotime($tglPengajuan) - time();
      $denda = 0;

      if($time < 86400 ){
          $denda = 15000;
      }else if($time < 172800){
          $denda = 10000;
      }else if($time < 259200){
          $denda = 5000;
      }else{
          $denda = 0;
      }

      return $denda;
  }
}

/* End of file Form_peminjaman.php */
