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

  public function input_data($data)
  {
    $this->db->insert('categories', $data);
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function delete_data($id_categories)
  {
    $this->db->where('id_categories', $id_categories);
    $result = $this->db->delete('categories');
    return $result;
  }
}
