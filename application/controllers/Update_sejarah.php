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
            if($label == 'Sejarah'){
                $this->session->set_flashdata('teks','<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Done!</strong> Teks sejarah berhasil disimpan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
            }else if($label == 'Organisasi'){
                $this->session->set_flashdata('teks','<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Done!</strong> Teks organisasi berhasil disimpan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
            }

        redirect(base_url('Update_sejarah'));
              
        }else{
            if($label == 'Sejarah'){
                $this->session->set_flashdata('teks','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Done!</strong> Teks sejarah tidak berhasil disimpan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
            }else if($label == 'Organisasi'){
                $this->session->set_flashdata('teks','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Done!</strong> Teks organisasi tidak berhasil disimpan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
            }
            redirect(base_url('Update_sejarah'));
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
            $this->session->set_flashdata('foto','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Done!</strong> ada kesalahan sistem.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
            redirect(base_url('Update_sejarah'));
        }

        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('foto')){
            echo "gambar tidak bisa disimpan";
        }else{

            $row = $this->Admin_model->insert_foto_tentang($data);
    
            if($row > 0){
                if($label == 'Sejarah'){
                    $this->session->set_flashdata('foto','<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Done!</strong> Foto sejarah berhasil disimpan.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
                }else if($label == 'Organisasi'){
                    $this->session->set_flashdata('foto','<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Done!</strong> Foto organisasi berhasil disimpan.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
                }
                redirect(base_url('Update_sejarah'));
            }else{
                echo "Data tidak bisa disimpan di database";
                unlink('assets/images/'.$foto);
            }
        }

    }

}

/* End of file Update_sejarah.php */
