<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_barang_hilang extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }
    
    
    public function index()
    {
        $data['barang'] = $this->Admin_model->get_barang_hilang();

        $this->load->view('template_admin/header');
        $this->load->view('admin/daftar_barang_hilang', $data);
        $this->load->view('template_admin/footer');
    }

    public function hapus_barang($id,$foto){
        $row = $this->Admin_model->delete_barangtemu($id);

        if($row > 0){
            unlink("assets/images/BarangHilang/".$foto);
            redirect(base_url('Daftar_barang_hilang'));
        }else{
            echo 'data tidak terhapus';
        }
    }

    public function getEdit(){
        echo json_encode($this->Admin_model->get_barang_hilang_byId($_POST['id']));
    }

    public function editData(){
        $id = $this->input->post('id');
        $nama_barangtemu = $this->input->post('nama');
        $tanggal_barangtemu = $this->input->post('tanggal');
        $lokasi_barangtemu = $this->input->post('lokasi');
        $keterangan_barangtemu = $this->input->post('keterangan');

        if($_FILES["foto"]["name"] != ""){
            $data = array(
                'nama_barangtemu' => $nama_barangtemu,
                'tanggal_barangtemu' => $tanggal_barangtemu,
                'lokasi_barangtemu' => $lokasi_barangtemu,
                'keterangan_barangtemu' => $keterangan_barangtemu,
                'foto_barangtemu' => $_FILES['foto']['name']
            );
        }else{
            $data = array(
                'nama_barangtemu' => $nama_barangtemu,
                'tanggal_barangtemu' => $tanggal_barangtemu,
                'lokasi_barangtemu' => $lokasi_barangtemu,
                'keterangan_barangtemu' => $keterangan_barangtemu
            );
        }


        $this->db->where('id_barangtemu',$id);
        $this->db->update('barangtemu',$data);
        $row = $this->db->affected_rows();
        
        if($row > 0){
            redirect(base_url('Daftar_barang_hilang'));
        }else{
            echo "data tidak berhasil diubah";
        }
    }

}


/* End of file Daftar_barang_hilang.php */
