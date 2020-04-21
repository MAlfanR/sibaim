<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_peminjam extends CI_Controller {

    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }

    public function index(){
        $query = $this->db->query('SELECT * FROM peminjaman WHERE status_permintaan = "diterima" OR status_permintaan = "ditolak"');
        $data['peminjaman'] = $query->result_array();

        $this->load->view('template_admin/header');
        $this->load->view('admin/daftar_peminjam',$data);
        $this->load->view('template_admin/footer');
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

      public function deletePeminjaman($id){
          $this->db->delete('datapeminjaman', array('id_peminjaman' => $id));
          $this->db->delete('peminjaman', array('id_peminjaman' => $id));
    
          redirect(base_url('Update_peminjaman_inventori'));
      }
}

/* End of file Daftar_peminjam.php */
