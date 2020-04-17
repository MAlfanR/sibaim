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
          echo "data tidak berhasil disimpan";
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
