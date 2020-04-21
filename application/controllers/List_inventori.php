<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_inventori extends CI_Controller {

    public function index(){
        $data['inventori'] = $this->Admin_model->get_inventori();

        $this->load->view('template_admin/header');
        $this->load->view('admin/list_inventori', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambahInventori(){

        $this->form_validation->set_rules('nama', 'Nama Barang', 'required|callback_alpha_dash_space', array('required' => 'Anda harus memasukkan nama barang'));
        $this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'required|is_natural_no_zero', array('required' => 'Anda harus memasukkan jumlah barang', 'is_natural_no_zero' => 'Jumlah barang tidak boleh nol atau negatif'));
        $this->form_validation->set_rules('biaya', 'Biaya Barang', 'required|is_natural', array('required' => 'Anda harus memasukkan biaya barang', 'is_natural' => 'Biaya barang tidak boleh negatif'));
        
        
        if ($this->form_validation->run() == TRUE) {
          $nama     = $this->input->post('nama');
          $jumlah   = $this->input->post('jumlah');
          $biaya    = $this->input->post('biaya');
          $denda    = $this->input->post('denda');
          $foto     = $_FILES['foto']['name'];
  
          $data = array(
            'nama_inventory'    => $nama,
            'jumlah_inventory'  => $jumlah,
            'harga_inventory'   => $biaya,
          );
  
          $row = $this->Admin_model->insertInventori($data);
  
          if($row > 0){
            $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil disimpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect('List_inventori');
          }else{
            $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Data tidak berhasil disimpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect('List_inventori');
          }
        } else {
          $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> '.validation_errors().'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

          redirect('List_inventori');
        }
    }
  
    public function editInventori(){
      $this->form_validation->set_rules('nama', 'Nama Barang', 'required|callback_alpha_dash_space', array('required' => 'Anda harus memasukkan nama barang'));
      $this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'required|is_natural_no_zero', array('required' => 'Anda harus memasukkan jumlah barang', 'is_natural_no_zero' => 'Jumlah barang tidak boleh nol atau negatif'));
      $this->form_validation->set_rules('biaya', 'Biaya Barang', 'required|is_natural', array('required' => 'Anda harus memasukkan biaya barang', 'is_natural' => 'Biaya barang tidak boleh negatif'));

      if ($this->form_validation->run() == TRUE) {
        $id = $this->input->post('id');
  
        $data = array(
          'nama_inventory'    => $this->input->post('nama'),
          'jumlah_inventory'  => $this->input->post('jumlah'),
          'harga_inventory'   => $this->input->post('biaya')
        );
  
        $this->db->where('id_inventory', $id);
        $this->db->update('inventory',$data);
        $row = $this->db->affected_rows();

        if($row > 0){
          $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

          redirect('List_inventori');
        }else{
          $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Data tidak berhasil diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

          redirect('List_inventori');
        }
      } else {
        $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> '.validation_errors().'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        redirect('List_inventori');
      }
    }
  
    public function delete_inventory($id){
      $row = $this->Admin_model->delete_inventory($id);

      if($row > 0){
        $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil dihapus.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        redirect(base_url('List_inventori'));
      }else{
        $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Data tidak berhasil dihapus.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        redirect(base_url('List_inventori'));
      }
    }

    function alpha_dash_space($fullname){
      if (! preg_match('/^[()a-zA-Z\s]+$/', $fullname)) {
          $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
          return FALSE;
      } else {
          return TRUE;
      }
    }
}

/* End of file List_inventori.php */
