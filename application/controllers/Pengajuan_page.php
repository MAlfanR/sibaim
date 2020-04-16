<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_page extends CI_Controller {

    public function index($id)
    {
        $query = $this->db->query('SELECT * FROM peminjaman INNER JOIN datapeminjaman ON peminjaman.id_peminjaman=datapeminjaman.id_peminjaman INNER JOIN inventory ON datapeminjaman.id_inventory=inventory.id_inventory WHERE datapeminjaman.id_peminjaman='.$id);

         // menghitung total harga barang
         $row_harga = $query->result_array();
         $total = 0;
         foreach($row_harga as $row){
             $total = $total + $row['harga_inventory'] * $row['jumlahDipinjam']; 
         }
 
         $data['admin'] = $this->db->get('admin')->result_array();
         
         $info = array('total_harga' => $total);
         $this->db->where('id_peminjaman',$id);
         $this->db->update('peminjaman', $info);

         $data['id'] = $id;

        $this->load->view('template_user/header');
        $this->load->view('user/pengajuan_page', $data);
        $this->load->view('template_user/footer');

    }

}

/* End of file Pengajuan_page.php */
