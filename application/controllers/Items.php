<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Items';
    $this->load->view('items/page-item', $data);
  }
}
