<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  // menghitung persenan donasi
  function persen_donasi($target_donasi){
    
    // mendapatkan row terakhir di table donasi
    $last_row = $this->db->order_by('id_donasi', 'DESC')->limit(1)->get('donasi')->result_array();
    // ambil indeks ke-0
    $donasi = $last_row[0];
    
    // menghitung persen
    $persen = (($donasi['total_langsung_donasi']+$donasi['total_kitabisa_donasi']) / $target_donasi) * 100;
    
    // desimal 2 angka dibelakan koma
    return round($persen,2);

  }

  function jumlah_total_donasi(){
    $last_row = $this->db->order_by('id_donasi', 'DESC')->limit(1)->get('donasi')->result_array();
    // ambil indeks ke-0
    $donasi = $last_row[0];

    return $donasi['total_langsung_donasi'] + $donasi['total_kitabisa_donasi'];
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

}

/* End of file User_model.php */
