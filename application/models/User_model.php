<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  function persen_donasi($target_donasi){
      $last_row = $this->db->order_by('id_donasi', 'DESC')->limit(1)->get('donasi')->result_array();
      $donasi = $last_row[0];
    
      $persen = (($donasi['total_langsung_donasi']+$donasi['total_kitabisa_donasi']) / $target_donasi) * 100;
    
      return round($persen,2);
  }

  function jumlah_total_donasi(){
      $donasi = $this->db->get('donasi')->result_array();
      $total_donasi = 0;
      foreach($donasi as $row){
          $total_donasi = $total_donasi + $row['jumlah_donasi'];
      }

      $kitabisa = $this->db->order_by('id_donasi','DESC')->get('donasi')->result_array()[0]['total_kitabisa_donasi'];

      return $total_donasi + $kitabisa;
  }

  function get_teks($label){
      $data = $this->db->order_by('id_teks', 'DESC')->limit(1)->get_where('tekstentang', array('label' => $label))->result_array();

      return $data[0]['isi'];
  }

  function get_foto($label){
      $data = $this->db->get_where('fototentang', array('label' => $label))->result_array();
      return $data;
  }

  function get_foto_barangtemu(){
      $data = $this->db->get('barangtemu')->result_array();
      return $data;
  }

  function get_inventory(){
      $data = $this->db->get('inventory')->result_array();
      return $data;
  }
}

/* End of file User_model.php */
