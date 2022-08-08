<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories_model extends CI_Model
{
  public function getCategories()
  {
    $this->db->select('*');
    $this->db->from('categories');
    $query = $this->db->get();
    return $query->result();
  }
}
