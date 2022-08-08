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
}
