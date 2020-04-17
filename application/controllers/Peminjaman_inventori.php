<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_inventori extends CI_Controller {

    public function index($id_peminjaman){
        $data['id_peminjaman'] = $id_peminjaman;
        $data['inventori']     = $this->db->get('inventory')->result_array();

        $query = $this->db->query('SELECT * FROM datapeminjaman INNER JOIN inventory ON inventory.id_inventory = datapeminjaman.id_inventory WHERE id_peminjaman = ' . $id_peminjaman);
        $data['pesanan'] = $query->result_array();

        $this->load->view('template_user/header');
        $this->load->view('user/peminjaman_inventori',$data);
        $this->load->view('template_user/footer');
    }

    public function addDataPeminjaman($id_peminjaman){
        $data = array(
            'id_peminjaman'  => $id_peminjaman,
            'id_inventory'   => $_POST['selectBarang'],
            'jumlahDipinjam' => $_POST['selectJumlah']
        );

        $this->db->insert('datapeminjaman', $data);
        $row = $this->db->affected_rows();

        if($row > 0){
            redirect(base_url('Peminjaman_inventori/index/'.$id_peminjaman));
        }else{
            echo "data tidak berhasil disimpan";
        }
    }

    public function hapus($id_datapeminjaman, $id_peminjaman){
        $this->db->delete('datapeminjaman', array('id' => $id_datapeminjaman));

        $row = $this->db->affected_rows();

        if($row > 0){
            redirect(base_url('Peminjaman_inventori/index/'.$id_peminjaman));
        }else{
            echo "data tidak berhasil dihapus";
        }
    }

    public function cancel($id_peminjaman){
        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->delete(array('datapeminjaman','peminjaman'));
        $row = $this->db->affected_rows();
        
        if($row > 0){
            echo "pesanan berhasil di batalkan";
        }else{
            echo "pesanan tidak berhasil dibatalkan";
        }
    }
}

/* End of file Peminjaman_inventori.php */
