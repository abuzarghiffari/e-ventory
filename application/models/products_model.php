<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model
{
  public function getProducts()
  {
    $this->db->select('*');
    $this->db->from('products as p');
    $this->db->join('suppliers as s', 'p.id_suppliers = s.id_suppliers', 'left');
    $this->db->join('items as i', 'p.id_items = i.id_items', 'left');
    $this->db->join('categories as c', 'p.id_categories = c.id_categories', 'left');
    $query = $this->db->get();
    return $query->result();
  }

  public function input_data($data)
  {
    $this->db->insert('products', $data);
  }

  public function detail_data($id_products)
  {
    $this->db->where('id_products', $id_products);
    return $this->db->get('products')->row();
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function delete_data($id_products)
  {
    $this->db->where('id_products', $id_products);
    return $this->db->delete('products');
  }
}
