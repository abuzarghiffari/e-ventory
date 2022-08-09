<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Items_model');
  }

  public function index()
  {
    $data = [
      'title' => 'Items',
      'content' => 'items/page',
      'items' => $this->Items_model->getItems('items')
    ];
    $this->load->view('layout', $data);
  }
}
