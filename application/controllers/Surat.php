<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

    public function index($id)
    {
        $query = $this->db->query('SELECT * FROM peminjaman INNER JOIN datapeminjaman ON peminjaman.id_peminjaman=datapeminjaman.id_peminjaman INNER JOIN inventory ON datapeminjaman.id_inventory=inventory.id_inventory WHERE datapeminjaman.id_peminjaman='.$id);

        $status = array('status_permintaan' => 'menunggu');
        $this->db->where('id_peminjaman',$id);
        $this->db->update('peminjaman',$status);

        $data['data'] = $query->result_array();
        $this->load->view('surat/surat',$data);
        $html = $this->output->get_output();

        $this->load->library('pdf');

        $dompdf = new Pdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4','Portrait');

        $dompdf->render();
        $dompdf->stream();

    }

}

/* End of file Surat.php */
