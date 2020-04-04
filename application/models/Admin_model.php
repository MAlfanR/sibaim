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

  // fungsi memasukkan data barang temua/hilang
  function insert_barang_temu($data){
    $this->db->insert('barangtemu', $data);
    return $this->db->affected_rows();
  }

  // fungsi mengambil data barang hilang
  function get_barang_hilang(){
    $data = $this->db->get('barangtemu')->result_array();
    return $data;
  }

  function insert_teks_tentang($data){
    $this->db->insert('tekstentang', $data);
    return $this->db->affected_rows();
  }

  function insert_foto_tentang($data){
    $this->db->insert('fototentang', $data);
    return $this->db->affected_rows();
  }

  function get_inventori(){
    $data = $this->db->get('inventory')->result_array();
    return $data;
  }

  function insertInventori($data){
    $this->db->insert('inventory', $data);
    return $this->db->affected_rows();
  }

  function delete_inventory($id){
    $this->db->where('id_inventory', $id);
    $this->db->delete('inventory');
    return $this->db->affected_rows();
  }
}

/* End of file Admin_model.php */
