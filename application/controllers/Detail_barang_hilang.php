<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_barang_hilang extends CI_Controller {

    public function index($id)
    {
        $this->db->where('id_barangtemu', $id);
        $data['detail'] = $this->db->get('barangtemu')->row_array();

        $data['admin'] = $this->db->get('admin')->result_array()[0];

        $this->load->view('template_user/header');
        $this->load->view('user/detail_barang_hilang', $data);
        $this->load->view('template_user/footer');
    }

}