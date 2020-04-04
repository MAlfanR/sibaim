<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Update_sejarah extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }
    
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/update_sejarah');
        $this->load->view('template_admin/footer');
    }

    public function teks(){
        $teks = $this->input->post('teks');
        $label = $this->input->post('label');

        $data = array(
          'isi'     => $teks,
          'label'   => $label  
        );

        $row = $this->Admin_model->insert_teks_tentang($data);

        if($row > 0){
            
            
            redirect(base_url('Update_sejarah'));
            
        }else{
            echo "data tidak berhasil diinputkan";
        }
    }

    public function foto(){

        $label = $this->input->post('label');
        $foto = $_FILES["foto"]["name"];
        
        $data = array(
          'foto'=> $foto,
          'label'=> $label  
        );

        $config['upload_path'] = '';
        $config['allowed_types'] = 'gif|jpg|png';

        if($label == 'Sejarah'){
            $config['upload_path'] = 'assets/images/SejarahBaim';
        }else if($label == 'Organisasi'){
            $config['upload_path'] = 'assets/images/OrganisasiBaim';
        }else{
            echo 'Path atau label salah';
        }

        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('foto')){
            echo "gambar tidak bisa disimpan";
        }else{

            $row = $this->Admin_model->insert_foto_tentang($data);
    
            if($row > 0){
                echo "data berhasil disimpan";
            }else{
                echo "Data tidak bisa disimpan di database";
                unlink('assets/images/'.$foto);
            }
        }

    }

}

/* End of file Update_sejarah.php */
