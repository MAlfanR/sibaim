<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  function cek_login($table, $where){
    return $this->db->get_where($table,$where);
  }

  // fungsi mengambil total donasi
  function ambil_total_donasi(){
    // mendapatkan row terakhir di table donasi
    $last_row = $this->db->order_by('id_donasi', 'DESC')->limit(1)->get('donasi')->result_array();
    // ambil indeks ke-0
    $donasi = $last_row[0];

    return $donasi['total_langsung_donasi'];
  }

  function ambil_total_kitabisa(){
    // mendapatkan row terakhir di table donasi
    $last_row = $this->db->order_by('id_donasi', 'DESC')->limit(1)->get('donasi')->result_array();
    // ambil indeks ke-0
    $donasi = $last_row[0];

    return $donasi['total_kitabisa_donasi'];
  }

  // fungsi memasukkan data baru ke tabel donasi
  function insert_donasi($data){
    $this->db->insert('donasi',$data);
    return $this->db->affected_rows();
  }

}

/* End of file Admin_model.php */
