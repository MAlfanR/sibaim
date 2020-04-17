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
          echo "data berhasil disimpan";
        }else{
          echo "data tidak berhasil disimpan";
        }
    }
  
    public function editInventori(){
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
        redirect(base_url('List_inventori'));
      }else{
        echo "data tidak berhasil di update";
      }
    }
  
    public function delete_inventory($id){
      $row = $this->Admin_model->delete_inventory($id);

      if($row > 0){
        redirect(base_url('List_inventori'));
      }else{
        echo "data tidak berhasil dihapus";
      }
    }
}

/* End of file List_inventori.php */
