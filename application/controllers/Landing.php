<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Main Page';
    $this->load->view('landing-page/index', $data);
  }
}
