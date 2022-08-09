<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suppliers_model extends CI_Model
{
  public function getSuppliers()
  {
    $this->db->select('*');
    $this->db->from('suppliers');
    $query = $this->db->get();
    return $query->result();
  }

  public function input_data($data)
  {
    $this->db->insert('suppliers', $data);
  }

  public function detail_data($id_suppliers)
  {
    $this->db->where('id_suppliers', $id_suppliers);
    return $this->db->get('suppliers')->row();
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function delete_data($id_suppliers)
  {
    $this->db->where('id_suppliers', $id_suppliers);
    return $this->db->delete('suppliers');
  }
}
