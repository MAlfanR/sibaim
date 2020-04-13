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
    $data['peminjaman'] = $this->db->get('peminjaman')->result_array();

    $this->load->view('template_admin/header');
    $this->load->view('admin/update_peminjaman_inventori', $data);
    $this->load->view('template_admin/footer');
  }

  public function tambahInventori(){

      $nama = $this->input->post('nama');
      $jumlah = $this->input->post('jumlah');
      $biaya = $this->input->post('biaya');
      $denda = $this->input->post('denda');
      $foto = $_FILES['foto']['name'];

      $data = array(
        'nama_inventory' => $nama,
        'jumlah_inventory' => $jumlah,
        'harga_inventory' => $biaya,
      );

      $row = $this->Admin_model->insertInventori($data);

      if($row > 0){
        echo "data berhasil disimpan";
      }else{
        echo "data tidak berhasil disimpan";
      }
  }

  public function delete_inventory($id){
    $query = $this->db->query('SELECT foto_inventory FROM inventory WHERE id_inventory = '.$id);
    $row = $this->Admin_model->delete_inventory($id);
    if($row > 0){
      redirect(base_url('Update_peminjaman_inventori'));
    }else{
      echo "data tidak berhasil dihapus";
    }
  }

  public function getEdit(){
    echo json_encode($this->Admin_model->get_barang_inventori_byId($_POST['id']));
  }

  public function editInventori(){
    $id = $this->input->post('id');

    $data = array(
      'nama_inventory' => $this->input->post('nama'),
      'jumlah_inventory' => $this->input->post('jumlah'),
      'harga_inventory' => $this->input->post('biaya')
    );

    $this->db->where('id_inventory', $id);
    $this->db->update('inventory',$data);
    $row = $this->db->affected_rows();

    if($row > 0){
      
      redirect(base_url('Update_peminjaman_inventori'));
      
    }else{
      echo "data tidak berhasil di update";
    }
  }

  public function getDetailBarang(){
    $id_peminjaman = $_POST['id_peminjaman'];

    $query = $this->db->query('SELECT * FROM datapeminjaman INNER JOIN inventory ON datapeminjaman.id_inventory=inventory.id_inventory WHERE id_peminjaman = '.$id_peminjaman);
    $barang = $query->result_array();

    $i = 1;
    $html = '';
    foreach($barang as $row){
      $html = $html . '<tr>
      <td>'.$i.'</td>
      <td>'.$row['nama_inventory'].'</td>
      <td>'.$row['jumlahDipinjam'].'</td>
    </tr>';
    $i++;
    }

    echo $html;
  }
}

/* End of file Update_peminjaman_inventori.php */
