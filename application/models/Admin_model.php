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

  // fungsi memasukkan token baru ke tabel admin_token
  function insert_token($data){
    $this->db->insert('admin_token', $data);
  }

  // fungsi mengambil data dari tabel admin_token
  function get_data_token(){
    $data = $this->db->get('admin_token')->result_object();
    return $data[0];
  }

  // fungsi mengambil data admin, digunakan untuk mengubah password
  function get_data_admin(){
    $data = $this->db->get('admin')->result_array();
    return $data[0];
  }

  // fungsi mengubah password
  function ubah_password($password, $email){
    $data = array('password_admin' => $password);
    $this->db->where('email_admin', $email);
    $this->db->update('admin', $data);
  }

  // fungsi menghapus data token
  function delete_token($token){
    $this->db->where('token', $token);
    $this->db->delete('admin_token');
  }
}

/* End of file Admin_model.php */
