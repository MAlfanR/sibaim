<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_barang_hilang extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }
       
    public function index(){
        $data['barang'] = $this->Admin_model->get_barang_hilang();

        $this->load->view('template_admin/header');
        $this->load->view('admin/daftar_barang_hilang', $data);
        $this->load->view('template_admin/footer');
    }

    public function hapus_barang($id,$foto){
        $row = $this->Admin_model->delete_barangtemu($id);

        if($row > 0){
            unlink("assets/images/BarangHilang/".$foto);

            $this->session->set_flashdata('delete','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil dihapus.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect(base_url('Daftar_barang_hilang'));
        }else{
            $this->session->set_flashdata('delete','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Done!</strong> Data tidak berhasil dihapus.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect(base_url('Daftar_barang_hilang'));
        }
    }

    public function getEdit(){
        echo json_encode($this->Admin_model->get_barang_hilang_byId($_POST['id']));
    }

    public function editData(){
        $this->form_validation->set_rules('nama', 'Nama Barang', 'required', array('required' => 'Anda harus memasukkan nama barang'));
        $this->form_validation->set_rules('tanggal', 'Tanggal Barang', 'required', array('required' => 'Anda harus memasukkan tanggal barang ditemukan'));
        $this->form_validation->set_rules('lokasi', 'Lokasi Barang', 'required', array('required' => 'Anda harus memasukkan lokasi barang ditemukan'));
        $this->form_validation->set_rules('keterangan', 'Keterangan Barang', 'required', array('required' => 'Anda harus memasukkan keterangan barang'));

        
        if ($this->form_validation->run() == TRUE) {
            $id                     = $this->input->post('id');
            $nama_barangtemu        = $this->input->post('nama');
            $tanggal_barangtemu     = $this->input->post('tanggal');
            $lokasi_barangtemu      = $this->input->post('lokasi');
            $keterangan_barangtemu  = $this->input->post('keterangan');

            if($_FILES["foto"]["name"] != ""){
                $foto = $this->db->get_where('barangtemu', array('id_barangtemu' => $id))->result_array()[0]['foto_barangtemu'];

                unlink("assets/images/BarangHilang/".$foto);

                $config['upload_path']    = 'assets/images/BarangHilang/';
                $config['allowed_types']  = 'jpg|png';
                $config['overwrite']      = true;

                $this->load->library('upload', $config);

                if(! $this->upload->do_upload('foto')){

                    $this->session->set_flashdata('edit','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Done!</strong> Foto tidak berhasil disimpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

                    redirect(base_url('Daftar_barang_hilang'));
                }else{
                    $data = array(
                        'nama_barangtemu'           => $nama_barangtemu,
                        'tanggal_barangtemu'        => $tanggal_barangtemu,
                        'lokasi_barangtemu'         => $lokasi_barangtemu,
                        'keterangan_barangtemu'     => $keterangan_barangtemu,
                        'foto_barangtemu'           => $_FILES['foto']['name']
                    );

                    $this->db->where('id_barangtemu',$id);
                    $this->db->update('barangtemu',$data);
                }  
            }else{
                $data = array(
                    'nama_barangtemu'           => $nama_barangtemu,
                    'tanggal_barangtemu'        => $tanggal_barangtemu,
                    'lokasi_barangtemu'         => $lokasi_barangtemu,
                    'keterangan_barangtemu'     => $keterangan_barangtemu
                );

                $this->db->where('id_barangtemu',$id);
                $this->db->update('barangtemu',$data);
            }

            $row = $this->db->affected_rows();
        
            if($row > 0){
                $this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> Data berhasil diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

                redirect(base_url('Daftar_barang_hilang'));
            }else{
                $this->session->set_flashdata('edit','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Done!</strong> Data tidak berhasil diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

                redirect(base_url('Daftar_barang_hilang'));
            }
        } else {
            $this->session->set_flashdata('edit','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Done!</strong> '.validation_errors().'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect(base_url('Daftar_barang_hilang'));
        }
    }
}


/* End of file Daftar_barang_hilang.php */
