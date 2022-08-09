<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items_model extends CI_Model
{
  public function getItems()
  {
    $this->db->select('*');
    $this->db->from('items');
    $query = $this->db->get();
    return $query->result();
  }

  public function input_data($data)
  {
    $this->db->insert('items', $data);
  }

  public function detail_data($id_items)
  {
    $this->db->where('id_items', $id_items);
    return $this->db->get('items')->row();
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function delete_data($id_items)
  {
    $this->db->where('id_items', $id_items);
    return $this->db->delete('items');
  }
}
