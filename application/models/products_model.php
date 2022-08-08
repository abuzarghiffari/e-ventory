<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model
{
  public function getProducts()
  {
    $this->db->select('*');
    $this->db->from('products as p');
    $this->db->join('items as i', 'p.id_items = i.id_items', 'left');
    $this->db->join('categories as c', 'p.id_categories = c.id_categories', 'left');
    $query = $this->db->get();
    return $query->result();
  }
}
