<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Categories_model');
  }


  public function index()
  {
    $data['title'] = 'Categories';
    $data['categories'] = $this->Categories_model->getCategories('categories');
    $this->load->view('categories/page-category', $data);
  }
}
