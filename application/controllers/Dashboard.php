<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
    $data = [
      'title' => 'Dashboard',
      'content' => 'dashboard/page',
      'products' => $this->Products_model->getProducts('products')
    ];
    $this->load->view('layout', $data);
  }
}
