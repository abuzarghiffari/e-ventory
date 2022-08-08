<?php
class Products_model extends CI_Model
{
    public function getProducts()
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('items', 'products.id_items = items.id_items', 'left');
        $this->db->join('categories', 'products.id_categories = categories.id_categories', 'left');

        $query = $this->db->get();
        return $query;
    }
}
