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

  public function insert()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Create item',
        'content' => 'items/add',
      ];
      $this->load->view('layout', $data);
    } else {
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

  public function update($id)
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Update item',
        'content' => 'items/edit',
        'items' => $this->Items_model->detail_data($id)
      ];
      return $this->load->view('layout', $data);
    } else {
      $id = $this->input->post('id_items', TRUE);
      $code_items = $this->input->post('code_items', TRUE);
      $name_items = $this->input->post('name_items', TRUE);

      $data = [
        'code_items' => $code_items,
        'name_items' => $name_items,
      ];

      $where = [
        'id_items' => $id
      ];

      $this->Items_model->update_data($where, $data, 'items');
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-info alert-dismissible fade show" role="alert">
        item Edited Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('items');
    }
  }

  public function delete($id)
  {
    $data['items'] = $this->Items_model->delete_data($id);
    if ($data['items'] == true) {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        item Deleted Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('items');
    } else {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        item Can\'t Be Deleted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('items');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules(
      'code_items',
      'code item',
      'required'
    );
    $this->form_validation->set_rules(
      'name_items',
      'name item',
      'required'
    );

    $this->form_validation->set_message('required', 'Please enter your %s');
  }
}
