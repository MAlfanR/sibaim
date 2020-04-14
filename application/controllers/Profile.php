<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    
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
        $this->load->view('admin/profile');
        $this->load->view('template_admin/footer');
    }

    public function ubahProfile(){
        if($_POST['password'] == $_POST['rePassword']){
            $data = array(
                'username_admin' => $_POST['username'],
                'password_admin' => md5($_POST['password']),
                'kontak_admin' => $_POST['kontak'],
                'email_admin' => $_POST['email'],
                'nama_admin' => $_POST['name']
            );

            $this->db->where('id_admin', $_SESSION['id']);
            $this->db->update('admin', $data);

            $row = $this->db->affected_rows();

            if($row > 0){

                $data_session = array(
                    'id'       => $_SESSION['id'],
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'name'     => $_POST['name'],
                    'email'    => $_POST['email'],
                    'kontak'   => $_POST['kontak'],
                    'status'   => "login"
                  );
            
                  $this->session->set_userdata($data_session);

                $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> data berhasil diubah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');

                
                redirect(base_url('Profile'));
            }else{
                $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> data tidak berhasil diubah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect(base_url('Profile'));
            }
        }else{
            $this->session->set_flashdata('flash','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Kesalahan!</strong> Password yang anda masukkan tidak sama dengan retype password
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect(base_url('Profile'));
        }
    }

}

/* End of file Profile.php */
