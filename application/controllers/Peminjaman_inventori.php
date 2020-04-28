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

        $tersedia = $this->db->where('id_inventory', $_POST['selectBarang'])->select('jumlah_inventory')->get('inventory')->result_array();
       
        if(($tersedia[0]['jumlah_inventory'] - $_POST['selectJumlah']) >= 0 ){
            $this->db->insert('datapeminjaman', $data);
            $row = $this->db->affected_rows();
    
            if($row > 0){
                redirect(base_url('Peminjaman_inventori/index/'.$id_peminjaman));
            }else{
            $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Maaf</strong> ada kesalahan dalam proses penginputan permintaan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            
            redirect(base_url('Peminjaman_inventori/index/'.$id_peminjaman));
            }
        }else{
            $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Maaf</strong> jumlah barang yang tersedia tidak memenuhi permintaan anda.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            
            redirect(base_url('Peminjaman_inventori/index/'.$id_peminjaman));
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
            redirect(base_url('Peminjaman_barang_user'));
        }else{
            $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Maaf</strong> pengajuan tidak berhasil dibatalkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            
            redirect(base_url('Peminjaman_inventori/index/'.$id_peminjaman));
        }
    }
}

/* End of file Peminjaman_inventori.php */
