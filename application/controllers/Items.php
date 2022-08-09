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
    $data['title'] = 'Items';
    $data['items'] = $this->Items_model->getItems('items');
    $this->load->view('items/view-item', $data);
  }

  public function insert()
  {
    $data = array(
      'code_items' => $this->input->post('code_items', TRUE),
      'name_items' => $this->input->post('name_items', TRUE)
    );
    $this->Items_model->input_data($data);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Item Added Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('items');
  }
}
