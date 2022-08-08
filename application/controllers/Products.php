<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Products_model');
    $this->load->model('Items_model');
    $this->load->model('Categories_model');
  }

  public function index()
  {
    $data['title'] = 'Products';
    $data['products'] = $this->Products_model->getProducts('products');
    $this->load->view('products/page-product', $data);
  }
}
