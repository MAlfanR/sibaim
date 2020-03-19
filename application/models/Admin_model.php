<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  function cek_login($table, $where){
    return $this->db->get_where($table,$where);
  }

  function ambil_total_donasi(){
    // mendapatkan row terakhir di table donasi
    $last_row = $this->db->order_by('id_donasi', 'DESC')->limit(1)->get('donasi')->result_array();
    // ambil indeks ke-0
    $donasi = $last_row[0];

    return $donasi['total_langsung_donasi'];
  }

}

/* End of file Admin_model.php */
