<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_peminjaman_inventori extends CI_Controller {

  public function __construct(){
    parent::__construct();

    if($this->session->userdata('status') != "login"){
      redirect(base_url('login'));
    }
  }
  

  public function index(){
    $data['inventori']            = $this->Admin_model->get_inventori();
    $data['proposal_peminjaman']  = $this->db->get_where('peminjaman', array('status_permintaan' => 'menunggu'))->result_array();

    $query = $this->db->query('SELECT * FROM peminjaman WHERE status_permintaan = "diterima" OR status_permintaan = "ditolak"');
    $data['peminjaman'] = $query->result_array();

    $this->load->view('template_admin/header');
    $this->load->view('admin/update_peminjaman_inventori', $data);
    $this->load->view('template_admin/footer');
  }

  public function diterima($id){
    $data = array('status_permintaan' => 'diterima');
    $this->db->where('id_peminjaman',$id);
    $this->db->update('peminjaman',$data);
    
    redirect(base_url('Update_peminjaman_inventori'));
  }

  public function ditolak($id){
    $data = array('status_permintaan' => 'ditolak');
    $this->db->where('id_peminjaman',$id);
    $this->db->update('peminjaman',$data);
    
    redirect(base_url('Update_peminjaman_inventori'));
  }

  public function deletePeminjaman($id){
    $this->db->delete('datapeminjaman', array('id_peminjaman' => $id));
    $this->db->delete('peminjaman', array('id_peminjaman' => $id));

    redirect(base_url('Update_peminjaman_inventori'));
  }

  public function getEdit(){
    echo json_encode($this->Admin_model->get_barang_inventori_byId($_POST['id']));
  }

  
  public function getDetailBarang(){
    $id_peminjaman = $_POST['id_peminjaman'];

    $query = $this->db->query('SELECT * FROM datapeminjaman INNER JOIN inventory ON datapeminjaman.id_inventory=inventory.id_inventory WHERE id_peminjaman = '.$id_peminjaman);
    $barang = $query->result_array();

    $i = 1;
    $html = '';
    foreach($barang as $row){
      $html = $html . '<tr><td>'.$i.'</td><td>'.$row['nama_inventory'].'</td><td>'.$row['jumlahDipinjam'].'</td></tr>';
      $i++;
    }

    echo $html;
  }

  public function getDetailTanggal(){
    $id   = $_POST['id'];
    $data = $this->db->get_where('peminjaman', array('id_peminjaman' => $id))->result_array()[0];
    echo json_encode($data);
  }
}

/* End of file Update_peminjaman_inventori.php */
