<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel_donasi extends CI_Controller {

    public function __construct(){
      parent::__construct();

      if($this->session->userdata('status') != "login"){
        redirect(base_url('login'));
      }
    }

    public function index(){
       $data['donasi'] = $this->db->order_by('id_donasi', 'DESC')->get('donasi')->result_array();

       $data['total_donasi_langsung'] = $this->Admin_model->ambil_total_donasi();
       $data['value_total_donasi'] = $data['total_donasi_langsung']; 

       $this->load->view('template_admin/header');
       $this->load->view('admin/tabel_donasi', $data);
       $this->load->view('template_admin/footer'); 
    }

    public function delete($id){
        $this->db->delete('donasi', array('id_donasi' => $id));
        $row = $this->db->affected_rows();

        if($row > 0){
            $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil dihapus.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect(base_url('Tabel_donasi'));
        }else{
            $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Done!</strong> Data tidak berhasil dihapus.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect(base_url('Tabel_donasi'));
        }
    }

    public function getDataById(){
        $id = $_POST['id'];

        $data = $this->db->get_where('donasi', array('id_donasi' => $id))->result_array()[0];

        echo json_encode($data);
    }

    public function editDonasi(){

        $this->form_validation->set_rules('nama_donasi', 'Nama Donasi', 'required', array('required' => 'Anda harus memasukkan nama donatur'));
        $this->form_validation->set_rules('tanggal_donasi', 'Tanggal Donasi', 'required', array('required' => 'Anda harus memasukkan tanggal donasi'));
        $this->form_validation->set_rules('jumlah_donasi', 'Jumlah Donasi', 'required|is_natural_no_zero', array('required' => 'Anda harus memasukkan jumlah donasi', 'is_natural_no_zero' => 'jumlah donasi tidak boleh nol atau negatif'));
        
        
        if ($this->form_validation->run() == TRUE) {
          $data = array(
            'nama_donasi'           => $_POST['nama_donasi'],
            'jumlah_donasi'         => $_POST['jumlah_donasi'],
            'tanggal_donasi'        => $_POST['tanggal_donasi'],
            'total_langsung_donasi' => $_POST['total_langsung_donasi']
          );

          $this->db->where('id_donasi', $_POST['id_donasi']);
          $this->db->update('donasi', $data);

          $row = $this->db->affected_rows();

          if($row > 0){
            $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect(base_url('Tabel_donasi'));
          }else{
            $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Data tidak berhasil diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
  
            redirect(base_url('Tabel_donasi'));
          }
        } else {
          $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong>'. validation_errors() .'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
  
            redirect(base_url('Tabel_donasi'));
        } 
    }
}

/* End of file Tabel_donasi.php */
