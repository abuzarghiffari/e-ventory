<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Categories';
    $this->load->view('categories/page-category', $data);
  }
}
