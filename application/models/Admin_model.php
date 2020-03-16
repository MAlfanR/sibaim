<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  function cek_login($table, $where){
    return $this->db->get_where($table,$where);
  }

}

/* End of file Admin_model.php */
