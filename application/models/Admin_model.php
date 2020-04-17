<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  function cek_login($table, $where){
      return $this->db->get_where($table,$where);
  }

  function ambil_total_donasi(){
      $donasi = $this->db->get('donasi')->result_array();

      $total_donasi = 0;
      foreach($donasi as $row){
          $total_donasi = $total_donasi + $row['jumlah_donasi'];
      }
    
      return $total_donasi;
  }

  function ambil_total_kitabisa(){
      $last_row = $this->db->order_by('id_donasi', 'DESC')->limit(1)->get('donasi')->result_array();
      $donasi = $last_row[0];

      return $donasi['total_kitabisa_donasi'];
  }

  function insert_donasi($data){
      $this->db->insert('donasi',$data);
      return $this->db->affected_rows();
  }

  function insert_token($data){
      $this->db->insert('admin_token', $data);
  }

  function get_data_token(){
      $data = $this->db->get('admin_token')->result_object();
      return $data[0];
  }

  function get_data_admin(){
      $data = $this->db->get('admin')->result_array();
      return $data[0];
  }

  function ubah_password($password, $email){
      $data = array('password_admin' => $password);
      $this->db->where('email_admin', $email);
      $this->db->update('admin', $data);
  }

  function delete_token($token){
      $this->db->where('token', $token);
      $this->db->delete('admin_token');
  }

  function insert_barang_temu($data){
      $this->db->insert('barangtemu', $data);
      return $this->db->affected_rows();
  }

  function get_barang_hilang(){
      $data = $this->db->get('barangtemu')->result_array();
      return $data;
  }

  function get_barang_hilang_byId($id){
      $data = $this->db->get_where('barangtemu', array('id_barangtemu' => $id))->result_array();
      return $data[0];
  }

  function delete_barangtemu($id){
      $this->db->where('id_barangtemu', $id);
      $this->db->delete('barangtemu');
      return $this->db->affected_rows();
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

  function get_barang_inventori_byId($id){
      $data = $this->db->get_where('inventory', array('id_inventory' => $id))->result_array();
      return $data[0];
  }
}

/* End of file Admin_model.php */
